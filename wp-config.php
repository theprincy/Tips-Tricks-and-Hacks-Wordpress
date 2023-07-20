<?php
/**
 * Custom WordPress configurations on "wp-config.php" file.
 *
 * This file has the following configurations: MySQL settings, Table Prefix, Secret Keys, WordPress Language, ABSPATH and more.
 * For more information visit {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php} Codex page.
 *
 * @package WordPress

 */


/* MySQL settings */
define( 'DB_NAME',     'database_name_here' );
define( 'DB_USER',     'username_here' );
define( 'DB_PASSWORD', 'password_here' );
define( 'DB_HOST',     'localhost' );
define( 'DB_CHARSET',  'utf8mb4' );


/* MySQL database table prefix. */
$table_prefix = 'wp_';


/* Authentication Unique Keys and Salts. */
define('AUTH_KEY',         'Yf9|=c>ZG%q/}A?^akQgp#');
define('LOGGED_IN_KEY',    'Zp}|THO2v`vk*:!5 cTd)/7MQf2rQV`~t~{b:rQ*)zrT;wq]Tw/^{0s|2jeosnJl)r2iHH]dL3orr/!+zr_&vx]-ecZRxeV');
define('AUTH_SALT',        'U9iLNu5z~*a kG~Y?eh9Q;Y ^e-GLY9XCS!e-5|LP9rjEEESiG4j a%khQ.&G%hO');
define('SECURE_AUTH_SALT', '}3F3H-[=i');
define('LOGGED_IN_SALT',   '{{u+a!v L|(T0#:7gowHX^4]Tezoojoear@We+;i1PqS{Pms');
define('NONCE_SALT',       'vA(OPn*Iw0ef3dP=zA-DXVt$B-fj]G0rL+k_I|v-0Y@3O&>$?W.+;*n2[q8*EW1Z');


/* SSL */
define( 'FORCE_SSL_LOGIN', true );
define( 'FORCE_SSL_ADMIN', true );


/* Custom WordPress URL. */
define( 'WP_SITEURL',     'http://example.com/blog' );
define( 'WP_HOME',        'http://example.com/wordpress' );
define( 'WP_CONTENT_URL', 'http://example.com/wp-content' );
define( 'UPLOADS',        'http://example.com/wp-content/uploads' );
define( 'WP_PLUGIN_URL',  'http://example.com/wp-content/plugins' );
define( 'COOKIE_DOMAIN',  'subdomain.example.com' );


/* Specify maximum number of Revisions. */
define( 'WP_POST_REVISIONS', '20' );
/* Media Trash. */
define( 'MEDIA_TRASH', true );
/* Trash Days. */
define( 'EMPTY_TRASH_DAYS', '15' );


/* Multisite. */
define( 'WP_ALLOW_MULTISITE', true );


/* WordPress debug mode for developers. */
define( 'WP_DEBUG',         true );
define( 'WP_DEBUG_LOG',     true );
define( 'WP_DEBUG_DISPLAY', true );
define( 'SCRIPT_DEBUG',     true );
define( 'SAVEQUERIES',      true );


/* PHP Memory */
define( 'WP_MEMORY_LIMIT', '10000M' );
define( 'WP_MAX_MEMORY_LIMIT', '1000M' );
set_time_limit(30000);

/* WordPress Cache */
define( 'WP_CACHE', true );


/* Compression */
define( 'COMPRESS_CSS',        true );
define( 'COMPRESS_SCRIPTS',    true );
define( 'CONCATENATE_SCRIPTS', true );
define( 'ENFORCE_GZIP',        true );


/* CRON */
define( 'DISABLE_WP_CRON',      'false' );
define( 'ALTERNATE_WP_CRON',    'true' );
define( 'WP_CRON_LOCK_TIMEOUT', 150 );


/* FTP */
define( 'FTP_USER', 'user' );
define( 'FTP_PASS', 'password' );
define( 'FTP_HOST', 'host' );
define( 'FTP_SSL', false );
/* or to resolve "WordPress Asking for FTP Credentials" Error */
define('FS_METHOD','direct'); 

/* Updates */
define( 'WP_AUTO_UPDATE_CORE', true );
define( 'DISALLOW_FILE_MODS', true );
define( 'DISALLOW_FILE_EDIT', true );


/* Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/* Sets up WordPress vars and included files. */
