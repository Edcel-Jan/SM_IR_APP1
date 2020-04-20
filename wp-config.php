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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sm_ir_app' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'O3[hzUWhYs)!:C9E[3&$:xcDfjE&cX^zE0D.u9/;zc6NSw<4])l)VG4/^qL/~FK,' );
define( 'SECURE_AUTH_KEY',  'pO7/LN#^ -M=b+aEOi~Iuk9h)lGhXizEll<FEU2u@0%z<;gE0NN9U]d].o<oK4cn' );
define( 'LOGGED_IN_KEY',    'h[`_6?zBV6}x5;PU(Ws&2ID}8.)O+J@3iq;;b:En<; e]8o<wzwO8rw{CBVlG aX' );
define( 'NONCE_KEY',        'g!j3BLS9kKGj$9E;@%$a3#vT_GzOHu:2/)G8lBC]xD?3;czt~Y4WDJFO6yealsAB' );
define( 'AUTH_SALT',        'i=#V5T9HjFF9<ciP>We|3GA/U{os]^>h00e_Xo<6Tu;Q<LD<tmOH416AvzG W1:M' );
define( 'SECURE_AUTH_SALT', '+z~z@9`sn}Z)?7-z}G|ZRGFj%n5%7?w1VQjb|.tn-M.pCFF[r.{MTO_SaCz-W#C ' );
define( 'LOGGED_IN_SALT',   '1VyC*TX-IS1Lg:EeMe1:in1UF,^Ek*el8U[XQsF&r3y0~Z+8h5;P_O,QG,| o~hr' );
define( 'NONCE_SALT',       '#`#h}40v8pP*_zxJ*PjC{?.P+[x9xfhnJuFW5>Yn9s?a_G%V]7Qz}]m%sw5#xgU5' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
