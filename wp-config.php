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
define('DB_NAME', 'movies');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'movie_mosquiz');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '123');

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
define('AUTH_KEY', 'OfN&(#.nVD1dPl{_@q<Zk0E!CuzwmPaj3SG% r6RkSE0HJ#;:ByDAHtxCQ5$c~6F');
define('SECURE_AUTH_KEY', 'H.s=qy~3L+Je7#Il4z]kq{g55[Vfp@sb%3H^wTIWF{3nCR@vC>C-i#H567:AlB?7');
define('LOGGED_IN_KEY', 'w_suaX];c#Q+l,e0XP2#=]~|t+yBz4HSXa%:vLOTO<U{j0kOurL]W~0m7U#dq+Mw');
define('NONCE_KEY', 'KQdF%jg4.g-}-Dn?;>Epik,e )Pm]X/:zWZDguRg,~<B19]m3%:l_|z7Oq;]p:<5');
define('AUTH_SALT', 'N^i1tkzo^_ZUtwG,`N$`,tZr#m_L9iLk$Z`Gz9gw{x`1C?Tfe0LBQ%$_lA@Z9W,P');
define('SECURE_AUTH_SALT', '?-vz3-g6|=,KVySfnBBs7dGO4~9^Qg?7[4d%=I9fFoZ?WG412f.>A:FG5uz+ci |');
define('LOGGED_IN_SALT', '=^bT0e33bbsbrgkG04CF&+k@UO]ERsh4IilKPQ/#ZfSMJ9BASY)F+Goy!k*NwB{2');
define('NONCE_SALT', '072K&#pg%!KE=mOm=pp!*E1HkX81;2J>)Xyb1sU.5VFVkEnWEp~3k- dC:x+k;tX');

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

