<?php

/**
 * The SMTP class has been moved to the jk-includes/PHPMailer subdirectory and now uses the PHPMailer\PHPMailer namespace.
 */
_deprecated_file(
	basename( __FILE__ ),
	'5.5.0',
	JKINC . '/PHPMailer/SMTP.php',
	__( 'The SMTP class has been moved to the jk-includes/PHPMailer subdirectory and now uses the PHPMailer\PHPMailer namespace.' )
);

require_once __DIR__ . '/PHPMailer/SMTP.php';

class_alias( PHPMailer\PHPMailer\SMTP::class, 'SMTP' );
