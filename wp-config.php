<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'odk_p4' );

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
define( 'AUTH_KEY',         'jNn%`fwx#Q)8a1>Q)V{Olny7#OK[;r[G)<rVjxqQA+HpPp%6jtp6maS4=Tr>pl71' );
define( 'SECURE_AUTH_KEY',  '<<XvHG[E0]:H7Gw{v#wGS8emB,@ ?Jr2e3Hbk&;Ns{IUeai|-`f9Z!Rx}01u7@,G' );
define( 'LOGGED_IN_KEY',    ']7?n,c9.p28#E+Jmb4 &Lnx`=uB%*e^AIF8m)51)6wPd+.D1k>b(Q*UE;=7XT>0`' );
define( 'NONCE_KEY',        'r7C$>7?@(/.8n cptf<ui/Q`W]uq^}+?]-RtWMyb]R|~3EfS[Ca3sge]}4O)(Fmq' );
define( 'AUTH_SALT',        'e}qMn9OVqugRf&sZc?NrHx6GDf&~h ^@Hptq7/ yrq+N1.~0L]i_jjVfE[ZTl|vg' );
define( 'SECURE_AUTH_SALT', 'X1D6@)=+0)ej?C,Sy)jwP09g-.v#Rq$S}qp`w{-*p.OrDlf<@BJ+y]<Z{ aSoE/4' );
define( 'LOGGED_IN_SALT',   'B8!&Y5@n}Byst57^/<tdpH?puMa)UF!zb/3)Ltl{4!=wL9@`4xfF$~ [L1^{WYI9' );
define( 'NONCE_SALT',       'nmKxau{N~;&P2<1o`o87/S@$u>ujkZnYS(jNP+4J}N4&wY+r@5BB]wd;f0C)`*{?' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
