<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_customwp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'lUu+5Fu|qRBxqeg3G(){;oo2O3gw;k5AaXU*,D0dKSFU-SB s]Q*7-RX:mW6AA>B' );
define( 'SECURE_AUTH_KEY',  '3Chj-:YI}<MF+$93&$D6~{L0clY1>U T3lrkrx!r<#Pl;2`xAm94EsMMKoG4Xm)o' );
define( 'LOGGED_IN_KEY',    'Lso[}f3G.+]qTV7VibJh5(dp3y{0j8m2{R1QyOy,aV3>NN[xIh35mC#7&V*MbDh&' );
define( 'NONCE_KEY',        'R-)&^.=a^3kF}pUa^?a>xZV0mGaRKUQC_Vd2i^eAueQAB`]3@e9|hWAP2oo~vb8;' );
define( 'AUTH_SALT',        'dBSE)(oH?ADk3a(ybz]Rr;:E%4tl7&EtQ^lk{Uh+q!z/v|fSMYEmV~zD&QuBd[eQ' );
define( 'SECURE_AUTH_SALT', '%17SP8,x@WklVly{8*lRDt-Fk_OM|u#KW%n8_@10wta3p;v_pJH1-y]IwM$&a`rf' );
define( 'LOGGED_IN_SALT',   '.Ktr]^&  @zh8n%Brxfh=+{JGP(|li i)oT!qF*eCLp6~#%s(,y*ZQH,7jzPaBN0' );
define( 'NONCE_SALT',       '13Q,:o4w5WRFt:5I2,Y]m&eSD[+=B,E@Q%RCHs> KXd@#j,50JCjN0XS32]>LsjM' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
