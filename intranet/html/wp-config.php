<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'intranet' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'root' );

/** Nome do host do MySQL */
define( 'DB_HOST', '192.168.80.108' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Y2uJ~y8L($O-aDx%34d7:7V{1OlS qbSo]f4MVfhS^<6T8@TRg$SYm@BV2[_xMk%' );
define( 'SECURE_AUTH_KEY',  'wG}%umMPX(R8OF}{b`E 5A>q}Nf0%KZ!yJfwB9u4t*4RqXRL(Im 5U49M.5x#@^l' );
define( 'LOGGED_IN_KEY',    'Mfd7!v(C:t(pf)7aZUU76GmtC4bfD_ {S:7L#7GKRblF0_5|r,vr4(qx$aN.DH]*' );
define( 'NONCE_KEY',        'fx(bx}||!-M>5$T-<SMK@>Xo_)2LLIqWWI>HPAARz?RW>r5z5[p7%FoP!gPfK!Tj' );
define( 'AUTH_SALT',        'q/2b,1d3aTQ6tGPD,61vVW&n#[~hnyQOrADEJibFxcKUB>PB$!_Su)JA<2h+sGt ' );
define( 'SECURE_AUTH_SALT', '%mXCbK8a@MESLk}3|2FF(B7D}U],U>|rim,N-cv?*i2uHAT(K&3FzX)XG[jlEI<!' );
define( 'LOGGED_IN_SALT',   ' 0RU>MXd+[R@KJw*z@4 DNtu@zs&a_byw.YK<k*>tF{?{nAn7#DZ9t,^Hs $3^YS' );
define( 'NONCE_SALT',       ')stc`,P0QNz*waQeJl[.}}e<[:_o[y(lqru&n=WW(fzh%YeEMl,EcN!K52G+3xvp' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
