<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'MotaPhotographe' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'qwyY{>hh7D8Yv3C+Zj- kaRUvEW{&T#ehZ4g?C;]PvKWIlW;>3Y^G2wCTqgC0-Sw' );
define( 'SECURE_AUTH_KEY',  'S2oLy.T9/r1zS7~a8KfWURJ; uj37gJ+_}Ym%)^8yML<I3V2@$AB#*!ip`TT(5*[' );
define( 'LOGGED_IN_KEY',    '^ndZ1kIcrDjBGvu{MR,#|k{])M)+A[<Bs GE:)%.8nww4HJ$L;zV3]J[1{uk;:t2' );
define( 'NONCE_KEY',        ':`{H^!jU$Is|N5qJ.jI.jH>3[qc&V((7/Bu!(CW%<$<}skRWkykkO#}0tVoq+>nG' );
define( 'AUTH_SALT',        '`BSYl(fH(h[[8v[p$cUp>8JWb- 9&>lu!LrFj|s&[DsO .(z*Gz^}pir+f/RglBk' );
define( 'SECURE_AUTH_SALT', '8OxCGo%_bK:jK?KNl{,VzW@wp6-;*.NUF#bc>_I/+| m%-F< wREX}5-[DFM6_9f' );
define( 'LOGGED_IN_SALT',   '>pF {i@XYV*+VQj^>4?q[L[UV-DthpRaXOR|8r5lN9%i2HL<Cjb6c;0ytnDbw@dV' );
define( 'NONCE_SALT',       'C*qP3LfP7;pZERA.NW< 2Aqivv#BlJ9Gz^_6eQWrrAyb2UKRiRISF`eE.K{BbvV0' );
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
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
