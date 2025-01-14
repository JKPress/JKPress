<?php
/**
 * A pseudo-cron daemon for scheduling JKPress tasks.
 *
 * JK-Cron is triggered when the site receives a visit. In the scenario
 * where a site may not receive enough visits to execute scheduled tasks
 * in a timely manner, this file can be called directly or via a server
 * cron daemon for X number of times.
 *
 * Defining DISABLE_WP_CRON as true and calling this file directly are
 * mutually exclusive and the latter does not rely on the former to work.
 *
 * The HTTP request to this file will not slow down the visitor who happens to
 * visit when a scheduled cron event runs.
 *
 * @package JKPress
 */

ignore_user_abort( true );

if ( ! headers_sent() ) {
	header( 'Expires: Wed, 11 Jan 1984 05:00:00 GMT' );
	header( 'Cache-Control: no-cache, must-revalidate, max-age=0' );
}

// Don't run cron until the request finishes, if possible.
if ( function_exists( 'fastcgi_finish_request' ) ) {
	fastcgi_finish_request();
} elseif ( function_exists( 'litespeed_finish_request' ) ) {
	litespeed_finish_request();
}

if ( ! empty( $_POST ) || defined( 'DOING_AJAX' ) || defined( 'DOING_CRON' ) ) {
	die();
}

/**
 * Tell JKPress the cron task is running.
 *
 * @var bool
 */
define( 'DOING_CRON', true );

if ( ! defined( 'ABSPATH' ) ) {
	/** Set up JKPress environment */
	require_once __DIR__ . '/jk-load.php';
}

// Attempt to raise the PHP memory limit for cron event processing.
jk_raise_memory_limit( 'cron' );

/**
 * Retrieves the cron lock.
 *
 * Returns the uncached `doing_cron` transient.
 *
 * @ignore
 * @since 3.3.0
 *
 * @global jkdb $jkdb JKPress database abstraction object.
 *
 * @return string|int|false Value of the `doing_cron` transient, 0|false otherwise.
 */
function _get_cron_lock() {
	global $jkdb;

	$value = 0;
	if ( jk_using_ext_object_cache() ) {
		/*
		 * Skip local cache and force re-fetch of doing_cron transient
		 * in case another process updated the cache.
		 */
		$value = jk_cache_get( 'doing_cron', 'transient', true );
	} else {
		$row = $jkdb->get_row( $jkdb->prepare( "SELECT option_value FROM $jkdb->options WHERE option_name = %s LIMIT 1", '_transient_doing_cron' ) );
		if ( is_object( $row ) ) {
			$value = $row->option_value;
		}
	}

	return $value;
}

$crons = jk_get_ready_cron_jobs();
if ( empty( $crons ) ) {
	die();
}

$gmt_time = microtime( true );

// The cron lock: a unix timestamp from when the cron was spawned.
$doing_cron_transient = get_transient( 'doing_cron' );

// Use global $doing_jk_cron lock, otherwise use the GET lock. If no lock, try to grab a new lock.
if ( empty( $doing_jk_cron ) ) {
	if ( empty( $_GET['doing_jk_cron'] ) ) {
		// Called from external script/job. Try setting a lock.
		if ( $doing_cron_transient && ( $doing_cron_transient + JK_CRON_LOCK_TIMEOUT > $gmt_time ) ) {
			return;
		}
		$doing_jk_cron        = sprintf( '%.22F', microtime( true ) );
		$doing_cron_transient = $doing_jk_cron;
		set_transient( 'doing_cron', $doing_jk_cron );
	} else {
		$doing_jk_cron = $_GET['doing_jk_cron'];
	}
}

/*
 * The cron lock (a unix timestamp set when the cron was spawned),
 * must match $doing_jk_cron (the "key").
 */
if ( $doing_cron_transient !== $doing_jk_cron ) {
	return;
}

foreach ( $crons as $timestamp => $cronhooks ) {
	if ( $timestamp > $gmt_time ) {
		break;
	}

	foreach ( $cronhooks as $hook => $keys ) {

		foreach ( $keys as $k => $v ) {

			$schedule = $v['schedule'];

			if ( $schedule ) {
				$result = jk_reschedule_event( $timestamp, $schedule, $hook, $v['args'], true );

				if ( is_jk_error( $result ) ) {
					error_log(
						sprintf(
							/* translators: 1: Hook name, 2: Error code, 3: Error message, 4: Event data. */
							__( 'Cron reschedule event error for hook: %1$s, Error code: %2$s, Error message: %3$s, Data: %4$s' ),
							$hook,
							$result->get_error_code(),
							$result->get_error_message(),
							jk_json_encode( $v )
						)
					);

					/**
					 * Fires if an error happens when rescheduling a cron event.
					 *
					 * @since 6.1.0
					 *
					 * @param JK_Error $result The JK_Error object.
					 * @param string   $hook   Action hook to execute when the event is run.
					 * @param array    $v      Event data.
					 */
					do_action( 'cron_reschedule_event_error', $result, $hook, $v );
				}
			}

			$result = jk_unschedule_event( $timestamp, $hook, $v['args'], true );

			if ( is_jk_error( $result ) ) {
				error_log(
					sprintf(
						/* translators: 1: Hook name, 2: Error code, 3: Error message, 4: Event data. */
						__( 'Cron unschedule event error for hook: %1$s, Error code: %2$s, Error message: %3$s, Data: %4$s' ),
						$hook,
						$result->get_error_code(),
						$result->get_error_message(),
						jk_json_encode( $v )
					)
				);

				/**
				 * Fires if an error happens when unscheduling a cron event.
				 *
				 * @since 6.1.0
				 *
				 * @param JK_Error $result The JK_Error object.
				 * @param string   $hook   Action hook to execute when the event is run.
				 * @param array    $v      Event data.
				 */
				do_action( 'cron_unschedule_event_error', $result, $hook, $v );
			}

			/**
			 * Fires scheduled events.
			 *
			 * @ignore
			 * @since 2.1.0
			 *
			 * @param string $hook Name of the hook that was scheduled to be fired.
			 * @param array  $args The arguments to be passed to the hook.
			 */
			do_action_ref_array( $hook, $v['args'] );

			// If the hook ran too long and another cron process stole the lock, quit.
			if ( _get_cron_lock() !== $doing_jk_cron ) {
				return;
			}
		}
	}
}

if ( _get_cron_lock() === $doing_jk_cron ) {
	delete_transient( 'doing_cron' );
}

die();
