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
define( 'DB_NAME', 'plantyprojet' );

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
define( 'AUTH_KEY',         'v4M83c.<#6fm}z7!mDglU5`=dro82Xq{p+9+WO~NbLe(^o6!MS[O0mJQ<}W7Om?w' );
define( 'SECURE_AUTH_KEY',  '+$8jj{gElBWshQC(CPOM0Tf>|$<&V/, om-C!Q@3GDZ(X*qBd]U6<BoJs8dR_Ap{' );
define( 'LOGGED_IN_KEY',    'k- )%h%kO#!}Gh #C$J*DtQxzBZduf>trYLJTG kEiRQMtUH2XV0L(Gy%+C]^qv~' );
define( 'NONCE_KEY',        'Pk}N]gc TJS&A>i;I5:5D|HMm:A#[1Eoq_vb&{);t@Ld)z3B==:{@)~4xRh+.w{_' );
define( 'AUTH_SALT',        '(tCgb/q&XBu)-3=Gq$c5^zjn !N9_M@1&vrOn+,7bV!)&IY=(Wu^o1/s]lh_uMC6' );
define( 'SECURE_AUTH_SALT', 'tt|;p4?  jHLTnRCHiq6xVIaVo-/~#85RQz4#wP&i+k;xcva;?%X=bMHW0ZW`CFQ' );
define( 'LOGGED_IN_SALT',   'J~?`mF?U 7smtAUwX?%}6zWWJJAu>-Y9v0nO a/j0BF HJ!2W1 t0I)|@TWpZfN4' );
define( 'NONCE_SALT',       'NWIV{]O097ZxM{c@?$A[D%mcw959Nxd/.#Fwlm90@._k;D0D3{VZ_5RR~tP_->`I' );
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
