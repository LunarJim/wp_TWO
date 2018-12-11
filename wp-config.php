<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'wp4');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'wp4');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'wp4');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'eG89[|bH^J71Nla RBV8c8e])&&Qs*kWC$WgTZi~x >2%tUS&(J$[?z 0RS6Dh#N');
define('SECURE_AUTH_KEY',  '7~} GX!r6%e9X`%fBU]DIE6^F6`b9TM5d|8#DgHUmSwA)KLC$8jn;CeD&+g`T(QY');
define('LOGGED_IN_KEY',    'Z -R4di=NiS)k8FYiI(?U0 .%EH=[/NTej[&3Sm/7DvP8EM2/Vs_^Cbq!$Vhi]UN');
define('NONCE_KEY',        'a!AaU-K&KX^LHJzI3V7->(])#q,:7=,e+@BgG4192~G6fVYWs@2e*Mlj.+M`:tG@');
define('AUTH_SALT',        'DK6[(xShV|1jNFIk~**w;:o^*25v.h&ym;UOZ^at`{l~8NA{sT.U&.d]B|{|`(gY');
define('SECURE_AUTH_SALT', 'I#43Fwf-Oy?~i%Sv^OEg.xns1i?WO|?[`^K((Fb1uU1sHEN~A3E`_*=Sd409,~ s');
define('LOGGED_IN_SALT',   'W`NdCAyFo>Eado%0@UJ]UOBy/LiO!I0b]WP]I=r ;!914%Yz?5^.dMTOLN,&yz=h');
define('NONCE_SALT',       '{^sD$*ku/K53[:*]y0<p-o]344[~p@jhmJ,rnRu $l;J*]Zl`(r/3;TpFa-W>kY+');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', true);

if (true) {

  define( 'DISALLOW_FILE_MODS', false );

  define('WP_DEBUG_DISPLAY', true);

  define('WP_DEBUG_LOG', false);

  define( 'WP_POST_REVISIONS', false );

  define('EMPTY_TRASH_DAYS', 1);

} else {

define( 'DISALLOW_FILE_MODS', false );

define('WP_DEBUG_DISPLAY', false);

define('WP_DEBUG_LOG', true);

define( 'WP_POST_REVISIONS', 10 );

define('EMPTY_TRASH_DAYS', 15);

}

define('FS_METHOD', 'direct');

define('DISALLOW_FILE_EDIT', true);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');