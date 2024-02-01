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
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'planty' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ';>wps96Zn;Va`ZA`)oXa{}@o5x%8.,PFgn9xEJ}/On&pk8X@f3S;(CQPI_98_E`g' );
define( 'SECURE_AUTH_KEY',  '!AU%38K[|HF3!vU,k|g>#d<:VSI1?+wT=lPGnG(wV>:d|>0SMPz 0POjDu0Vm9/[' );
define( 'LOGGED_IN_KEY',    '|qMHJ0TSSVK962;=kcivN`yXcl}f@|$k}H9Jef7I)R_+#CTx{|_yu02FH`(<Us6*' );
define( 'NONCE_KEY',        'Ga~k t~vzD%SYV/{;r,.w-3YLAn~#2&93i8.<3:r9FwE*7-1R2)496O^S#r&gz93' );
define( 'AUTH_SALT',        'SqESt@d/=<~`~d-%{#Q-cm|4>I*f{Gd~/w<UG&j8:5cu;R_V nH7u+thGBi,F=gr' );
define( 'SECURE_AUTH_SALT', 'p~#Y=ALh(=._S;,~[o)uEzW.<<?`0}&?{h|y#[t&6pT fx40,/4U&$l4>dI%.Ohl' );
define( 'LOGGED_IN_SALT',   'zMU$3[T75x[{=E@do8hB_{s&Q>n07 M?1v KDk/coxTP^dccFkK5oV6A`:,}O4D~' );
define( 'NONCE_SALT',       'W]=|7{-F{`dX6T4K?[!!SS)42U=>0tiPAW%>Cz=(@7cJ;tb#0%k$ieYJ7J[_-b*U' );
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
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
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
