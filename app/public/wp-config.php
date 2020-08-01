<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '77QciCiJSPv3GRy3fHGWONy4jBmYNurJ0Y90jb5ZQar94o0A4IbUHKY50xU4Ybwuz43A7W7UIwjdHXtbFXa+Sg==');
define('SECURE_AUTH_KEY',  'ct2LhYsM0rZubnnjvcWzXoqn/SNmmmIAgF3vMAP6HasHU7WMFq+9OAXTNM7vm7/yG7M0SC6PW9oTuHot9ijxrQ==');
define('LOGGED_IN_KEY',    'Z2OzuiZEzhVGPAAA2oYRWNqN8IP69x0ICYn9v5W73vqO8A6cm2fNyskbWZ62pyz2eGHsiRgtDktB1AGJjAzrig==');
define('NONCE_KEY',        'DdbhGFRlBGXM6TFdCB6VXXtVD/vG8tt5SC7IKkcL/lw9YoMpIVRZmeVVwPlsRwCNU9v20E+2HK0qT/j17fkUhw==');
define('AUTH_SALT',        '76+m5NAzL1XQEVwLh8QNlVHJx4yAyatS+KcwoP9jkeEi+/M0pLNYx+94OEGiUevXmzXH0Z60sqy+junpQv48XA==');
define('SECURE_AUTH_SALT', 'icvYiduLtOQFkyX0usX84GRBr6g1PHgHIz2axbfAjNzyeJcTIgeTOvbvpZTLySKCm04HLfxO2swUl5AUF4ZYsQ==');
define('LOGGED_IN_SALT',   'aa8s0evgTmuNM3C1Z26KO0YHivn/Sf1fhovCfKQY8Y3jhAxnYZJlKsGMJSEg/PlcWsLTuOqnUsmVHMsnuEXtVQ==');
define('NONCE_SALT',       '07XCujibGbv0TxUkq3sGmRp0RwN398Y7p4T9h2NV+152Pypx9htwK3DHWnG6IIisoAb5xeoW+UrtZaf1Fsz3pA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
