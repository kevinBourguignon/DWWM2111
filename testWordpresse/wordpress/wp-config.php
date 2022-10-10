<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'test' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '=eG60FZ-p*!1l=Sa[S8e#v4kG2mrU515qaWN L2A qG(Jtqx^/&,.{Fj r{Ro3*M' );
define( 'SECURE_AUTH_KEY',  '3Buky$0byN)ARZ,TT&K!^PJ}t.JY$-1>y?}Rl;m_9Mcg<soCc}<T5-s@NaN56}R^' );
define( 'LOGGED_IN_KEY',    'x$8NL^:,+-J5.iG;9!{zNv=}^sC){tGNC.n89!bgI#;Z*=jTEfuvv+$@s7JP=>yO' );
define( 'NONCE_KEY',        'D||e>]A+|2p7<YQ4Q8~n3.52c5iya,i43A5$>.y_@sxi1I4Ync9-uAmjJ$b_9/f:' );
define( 'AUTH_SALT',        'jsnAXx<WBa(I7ElrjzI e)#am7}l>SYb7&!/-lPa6fj8XV?`:j{&p<UtCj+MD=-W' );
define( 'SECURE_AUTH_SALT', 'CkE)(zhCP!Oj-L]#im~Y0lZ({Q4>A()E$PM{zXJ,yaZb]bP.jd{.2 yQj+Tp(EC ' );
define( 'LOGGED_IN_SALT',   ' =oB-&^TBzc5 K#CdNgBF=xgn_*mjO6HN91;>kh6ePQ^bV#FR0=CB?0 fpa_2~9r' );
define( 'NONCE_SALT',       'e:G*p#6%I]lGMCS-JfV/(rJ}Q#;cTsBDoUsss_gM-(V7v&tr9UAz/wPpu4Q>z=Wd' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
