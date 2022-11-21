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
define( 'DB_NAME', 'voiture' );

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
define( 'AUTH_KEY',         '/s(6W`PH95*]L5bSr16`^@mQ3V9-am&f.]A7e;[eGc.ns#N-~_jxyNVJ5R`4d)>U' );
define( 'SECURE_AUTH_KEY',  '$?nDRgY?O^dv k1|-4dy*=?R}`>*h4-.15B9+qg06ca2f>$caTk]O(YOw{/iB3Pn' );
define( 'LOGGED_IN_KEY',    'ey;,3C0P~v b}LMr|!)#X^4<+WO=]Iua6L]%_r -W$Ng`:hz0bC@*4>)U#wKB%~>' );
define( 'NONCE_KEY',        '-f9c[q4q!sL?uLUwf5A20C2uyT{pf?$T!+QK.tf:Fe5HLB<:sEA}em,dlcq*WB#,' );
define( 'AUTH_SALT',        ':}ExM8w-o$& 50ZO(xW1,UuzGH9.}SZe,:hxx$z[hN$vx,N?9Z&=i+.h}n7%6v#L' );
define( 'SECURE_AUTH_SALT', 'aT&~wkl;CBF8R{zvW4w}&DF|r^fcKTP!T8VXKQg7lq,lj=aNXh&lYdW!}UI!Vze6' );
define( 'LOGGED_IN_SALT',   '~H?l^j%DouwhHM/ogakF^n_V8=)+=w[(^-~g.N5A190q0|Pk QAKi@+0$d8eQCP-' );
define( 'NONCE_SALT',       'b+jQ.!NiU?4j:UXx}uB!$J%F.asj?Y~qu-YL---LeUr7Lt^;2xC_u=rN(ix1Gd<!' );
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
