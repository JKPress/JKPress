<?php

/**
 * The PHPMailer class has been moved to the jk-includes/PHPMailer subdirectory and now uses the PHPMailer\PHPMailer namespace.
 */
if ( function_exists( '_deprecated_file' ) ) {
	_deprecated_file(
		basename( __FILE__ ),
		'5.5.0',
		JKINC . '/PHPMailer/PHPMailer.php',
		__( 'The PHPMailer class has been moved to jk-includes/PHPMailer subdirectory and now uses the PHPMailer\PHPMailer namespace.' )
	);
}

require_once __DIR__ . '/PHPMailer/PHPMailer.php';
require_once __DIR__ . '/PHPMailer/Exception.php';

class_alias( PHPMailer\PHPMailer\PHPMailer::class, 'PHPMailer' );
class_alias( PHPMailer\PHPMailer\Exception::class, 'phpmailerException' );
