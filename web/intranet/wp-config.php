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
define( 'AUTH_KEY',         ':pd#mC <J8M!k8f+Gv[S$?.aj$WXYN>Z%ts#poGQz*Q[Q5^<fQ9hK|k/H(jW6U+n' );
define( 'SECURE_AUTH_KEY',  '6R.uqPWN9Bm,`.0Mo<1Q+d[A f$%f|WpMUURR@,qmT2=90UP~)cZ*KQvPASJ0*~-' );
define( 'LOGGED_IN_KEY',    '[,tyq5&6n5YD5Kr|A,IvG%WSpR8cAp;OVc[&Kh/{ rCUOgppN 5s2a.b$)E@0yf4' );
define( 'NONCE_KEY',        'LiS{L{:fYP@v=EyaqYNE`OAiCvh^Zvy:D.5r_39sbNS/DzB<b.:|sXa@0sMy,HQ)' );
define( 'AUTH_SALT',        'VBqi:4]L0ut^3hQ~5GIxd#IZ];:B+Ehkw6>2(oOCP=vH1VKUoF(Mn|?B+=(Frb^E' );
define( 'SECURE_AUTH_SALT', 'WKb NS+fIpu;b.p-R9CP.$Uv#.V}dC5l kCpvno4irs[Vyxf5<OH,=OQ>tR7rE!Y' );
define( 'LOGGED_IN_SALT',   '!&rh^NKWq0!k27f|+VXvY%]f PflTJ]ZpD4W?,YTL?8^>NCD9U&|6VFxpjJ~9u[(' );
define( 'NONCE_SALT',       'aQ?S#^=@tH@:FiLT6? KT.7ZBOD!y52/8j}oo14Zv!_p%ffT<E.&[P2]lreK05)D' );

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
