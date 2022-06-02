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
define( 'DB_NAME', 'portfolio' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'portfolio' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'portfolio' );

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
define( 'AUTH_KEY',         'YrO8olY)1FGti7pJvtqF^k[z=fe Ek-JkShXhfM>d(jT@7VX+QuJ}A+:{=6Rn9((' );
define( 'SECURE_AUTH_KEY',  'P?TXazSV%,VZfrL)SlR|MBkFo(?T+D[&%uskw=mVJsSHUxw~paJ*7$=-mHN;R:Bx' );
define( 'LOGGED_IN_KEY',    'qeO L!/uRKAz!j&Z%Rxl:%nmyXEN<ccu%isjQt#tA`q7RLvYpGNjb?K[aOreJ98O' );
define( 'NONCE_KEY',        '^d&~_f3>|l=Ve+JHf89.x!(jgUq/yH]{N3xorO{S88ocP;)bp%Xk[*::b X#(:(Y' );
define( 'AUTH_SALT',        'bH-iR<=7Wo.sWDT)M!Xr& ])831o)Y/FGaHx@aOe2qvvN<dv#3X!y/i:lrMcGs7u' );
define( 'SECURE_AUTH_SALT', 'WR||Jt5o::a9A=)&ugxh,NS9L=;AdP<rM|qG.UKv%9}:S?cyqp Tora4x!y]~vd+' );
define( 'LOGGED_IN_SALT',   '8%_E$8* B*jz|u{~U$3|#N1$R1n6ybjb^5z2/6adUmajS%SbVcBEo<7ymD{mIHQ-' );
define( 'NONCE_SALT',       'BhjgA&fer)dktv_~2.k#_6%Rbd7[EKNeVUlfvIjKTfv|N?DM-tX!8)QyH/oMY`Oa' );
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
