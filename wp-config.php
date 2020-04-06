<?php
define('WP_CACHE', true); // Added by WP Rocket
define('WP_AUTO_UPDATE_CORE', 'minor');// This setting is required to make sure that WordPress updates can be properly managed in WordPress Toolkit. Remove this line if this WordPress website is not managed by WordPress Toolkit anymore.
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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'revistaforestal' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define('AUTH_KEY', 'cNA~[Z8xUEx5+3F&5PThD&YT&7Y6*E1M9H#db~M481(N9v6+6LX[4&s%v4*-PLQ#');
define('SECURE_AUTH_KEY', '&O::*KML7%M[5CrW61j&*5[T6@@:Z07GQ+~9gN9Eo2nurGw_0w)9a0fle5!2z-h9');
define('LOGGED_IN_KEY', 'UlH@X]%m|2ySW%10X06VNdS~0a|f876/BV2C90A7Z6A#c5mm&H614/j~+ajx%ZW|');
define('NONCE_KEY', '1yd49BNfiDp2-q]Z+2ooPJ98u2rH(CY817WwwuNK3D3U7Cg41)MlC3#b9k]e:dI7');
define('AUTH_SALT', '|Q0-TU0jb3kc@_Y5*;)F9w+nd~xfiBQg9bZ9-Cp:26X+N_Z|R~7%0]m3oa:MH2Rq');
define('SECURE_AUTH_SALT', '+4sInh3]HaltJdL4RK-R*/E!2Iq!1IEfO*~kLiq]1N562b57!#S(W5@byS)o@Ge(');
define('LOGGED_IN_SALT', 'an96cQF6r8g1@PxM3!vd|rz2;u:/Hl7Bh6GUL13B6DT|(pE+~7*V(wk0[yGdc)1/');
define('NONCE_SALT', 'U8%rm&!R3J)H@6Dm/o81h48W9%&u5r#*85X@TD1TME!]3R9wBv~1#Oc~%o_gv3Oy');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define('WP_ALLOW_MULTISITE', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
