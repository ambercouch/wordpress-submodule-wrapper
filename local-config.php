<?php

/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'mynt-apps');

/** MySQL database username */
define('DB_USER', 'mynt-apps');

/** MySQL database password */
define('DB_PASSWORD', 'isitossett');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/* * #@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '()=EZ<//.-?.5Cpoj lf;vFFzu*3|G:.&MJ [(QQHT|yqd.)2Z&/pa[&O}V)KFA8');
define('SECURE_AUTH_KEY', 'y`$GHIwa2)KOn,+|!E|$DqwXmgBJ|K%/%<{7=Q0&,M 6lCgSrELezxb,b&DCoq,N');
define('LOGGED_IN_KEY', 'u4GVA|7:{S[uP`pU$i-H-~TIq<hLy?ErG^~nND@6AY[qi5E?quAP6lCk>-}eKXHu');
define('NONCE_KEY', '09LVp*pVv3tI{zlG+R]el=Lw|nJtyyf1]t+hDvvsk8Sn:j_HNl&ji=T(3rb8x+Zx');
define('AUTH_SALT', '7OT^NEQfO&}QE=@!rw8$`1TnzwU,7!q P }Uj]6?Mb%`>/Aac|%=-7q+w`7kp=7e');
define('SECURE_AUTH_SALT', '3|coI1sL&:zV*NCNM%VmD^P3#?c6><rBoalDLt,s+=L,jh)+{+t4~=ivaK!.|/;8');
define('LOGGED_IN_SALT', ']/jl+NDx*!,2MnWlP&+hDxxO#u0i|6-Y-J*(}R#9F|-_ADLW(4.X&J! OfPzdIR@');
define('NONCE_SALT', '|U`KurD<bXzQN9I]qYgC|1BiqAy?q-[_7;P/*5n<(@Y^b#h+(C.vc|~:9,V=]sS<');

/* * #@- */

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);
