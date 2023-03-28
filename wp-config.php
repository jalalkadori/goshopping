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
define( 'DB_NAME', 'goshopping' );

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
define( 'AUTH_KEY',         'Z39(Li7},Rb2<Vy*iy/-n1_L* 6i!SBPmKU<FMV?3VYZIj_9m-XTpULoxV(BusD4' );
define( 'SECURE_AUTH_KEY',  '+9CYzVa4Ks]ZxY$PUih8z7eJXF07r<?};rm80S9i]C~c]csM]#@_Uu+G{^{m5-lQ' );
define( 'LOGGED_IN_KEY',    '(WqmrDDELI^HP(mzlnt58aM:G`3C]k7.CDM!6_ZrAaXh?MWC6_x%kwNE!QdehL}Z' );
define( 'NONCE_KEY',        '<l5(I&,GJfP _,0_@]!Wq>J_z`ujXww@5xpPd.g30gXTW`I|?6]O7A2kB>$^xp}=' );
define( 'AUTH_SALT',        'dvHk?=F>34,i,Q}iG3uEj+;[YIbSO>jL^l=!4g&S7HrO5tc?.DLqx(b(7{`pO,={' );
define( 'SECURE_AUTH_SALT', 'e>aOQu[D@_El75,#IW^ET]+g-xQp+G1!Tn=c{)>:o2*XhK,YdOC{}%#5*ae~HhO0' );
define( 'LOGGED_IN_SALT',   '?4RvyErUZ P3><X%.3+LY-otW5Zti^4J W!J<_h8D7vc7+;ycOmo}<TL+yw%l1Ew' );
define( 'NONCE_SALT',       'zJQYZAv.Z8WgqNXEXu,j=O1iRY8Ce0;HD^0vDHt`U:td9~X%{m>J_B.{ul,p,#Y,' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_goshopping';

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
