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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpressuser' );

/** Database password */
define( 'DB_PASSWORD', 'wordpressuserPassword' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '}qz6-[r4%BLRR`j)fkZ~VU;e>mp#fv-xsk4}cA|0DgH(X~Ta/wb;M2fGtV`t>(Hu' );
define( 'SECURE_AUTH_KEY',   ' }Wo}T7qCdvXB[X2QIqnrowvwT%Rx|Xp>|PB+h[}Efwjki8l^@I)^+N*Q Ne+?]V' );
define( 'LOGGED_IN_KEY',     'csE}(.>GAQ+TtkgR26bPRq5hZ1u{Q%QxdnP?O11d-_6r?<iw7ReHl036McQ5BsP*' );
define( 'NONCE_KEY',         'byR0El3Wxg4@P(K*s3/QsRUa!o!=A}~&6D=*hMoETmQC*YOD0SwzYJar-A41GR,[' );
define( 'AUTH_SALT',         'Ij8FwngWop}}-gZbavW:(x>8eASRAI<#Rv02%iH#?[&DZg#NaH`jxLXYgRT<i=n>' );
define( 'SECURE_AUTH_SALT',  'hl!GFj_h!YO8r?7`&$TF}gn0]XL}2kw*>eq2)!L#(.!5j8k5jR#IDK(kDg_hpma+' );
define( 'LOGGED_IN_SALT',    'XxbR+YH`=gQiR#_]RNl5JXv$n~ 1MAaHk{fn.$TneFU|ayS):)XGH_Jy>h2ci4^P' );
define( 'NONCE_SALT',        'Z.Pkz8fFGZ0:qoH1m2lp0R~NP0Y0jY8oF)/]r?x:nhv<( %!aMH?>-qv9,ADVbAr' );
define( 'WP_CACHE_KEY_SALT', 'iQ9j.WsgSKc< ,%|)~[v*VS{7z4B6,9Qy([hP~gJQ({g~({r~sIrlK~OwY%a6)Nl' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
