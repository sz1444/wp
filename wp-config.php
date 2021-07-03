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
define( 'DB_NAME', 'm1265_arek' );

/** MySQL database username */
define( 'DB_USER', 'm1265_arek' );

/** MySQL database password */
define( 'DB_PASSWORD', '6esgtuhuMQpFqx8UHVqY' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql16.mydevil.net' );

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
define( 'AUTH_KEY',         'R)h.ZFAj}{w3C[YZWR5%a-Uw1cR~ sSTgcT0:cEeSU*q: <1h6HpP)Lln-p~`|a4' );
define( 'SECURE_AUTH_KEY',  'i4Jv2zF.Me%]%3-9*]scx4O++)|b0:J34ljKv=}>`m]S*Q3u6:XP8M~=;[fcOmM*' );
define( 'LOGGED_IN_KEY',    'b34PgG$y7$qJc]B/krMmw`out1f5Q>lf(gxdTIyE`29~@}_+/Q_tMa74?8dyf/]N' );
define( 'NONCE_KEY',        'QEN!1l?HNs.+]$s+J+f2I5roLWg+ZU|)o{JEMr0Zzc2>prDvaxo@lB1(&N][P;eb' );
define( 'AUTH_SALT',        '`.sL3b$K,,O{;:+ )DSS$9Ss+k^C<S<._F>vkrU)(Cl;RJ(RnFoIqzQ@IZ5~zf2W' );
define( 'SECURE_AUTH_SALT', 'p)5HpS;5J6$`4iu; ;CCG?6[U_:X$!h!.?.!pad#TxK<YmyG%|~)btX.6&6~hf[A' );
define( 'LOGGED_IN_SALT',   'S|ux3a}Ia@J08qc!M$NR#)bp!`yh5d,s0P(m0de(*$nJ`sC_I#vS/Zut$y{fJAF?' );
define( 'NONCE_SALT',       '^%TK:MZiheR0dUEjF`G2qS&>9-1N6~a >v,$qv=%JZE4)>c7;W1a(v%.#=%bnmgC' );

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
