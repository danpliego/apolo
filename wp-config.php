<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'apolo');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'danpliego');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'Nana1823');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', ':SLm/+-!&SUuo}In(^iJV2Poj1;Un=xI3>ET%l|Pu4j)aAQ:DPp9H_6K+&<xbW}u');
define('SECURE_AUTH_KEY', 'p{aH91_f >f{:.JkY?323x^OQ+lK|#~X9-ov}t:n,BQ|v!@C~&*||uzzGD4as<}}');
define('LOGGED_IN_KEY', ')Sk##Sqf|qjOF@X`_^ C$Q?g#(HZk*Wrwc`Swvov*5#j1FzQ6VFRfgc`{2{hH0@b');
define('NONCE_KEY', '^@r^p~,f!sS-j/(hBY}]7q#JBuCWsjt>$a-,_2BCNXlSTj(XH}@Gg$xH)PxcZ9/,');
define('AUTH_SALT', '_l,0x4xY hf/^M(=0~5Kk-sSBQftvgtO.pXr6sk0G,:6#HSl=D|}Eoc_jq>9y2;}');
define('SECURE_AUTH_SALT', '%#]k F-oeeghqAPIg :2[/Jk!<%Y%14`f7lSKd]4m?Athlx2N*2Aep*J-3XFJG _');
define('LOGGED_IN_SALT', 'gaU[n )?<P#W=oaG4hWXgD}6#o;vquWA7Cn~lX#!x+p*1_Ew&|?IMW(gbi!_n<Gp');
define('NONCE_SALT', '|=iB9IrX[tYVD.dl=K;ii.^a6!|lS3]*C*)58e PQpe8+~Q+JQLIkU|YmyK<ibwa');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

