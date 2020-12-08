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
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'mundo_financeiro' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'jD4cp]%t3wkm M= @@q[/ -xU`eXr6m^;&39zz#bxbUa^%B|!Y-9T+oo#o)^P5me' );
define( 'SECURE_AUTH_KEY',  '92q+@Qda(tbiFSClv mctv4QT>I,RFrhzank-nK%qq@F`,Xv8aM#SOVucvFhI_h1' );
define( 'LOGGED_IN_KEY',    'n.[885nPVQ!w$yS||QP9uYNe@qA9yf.v#i[N[~I0U[HI,4jg@wfB[C@EX++ &8[M' );
define( 'NONCE_KEY',        '8Eb+f)zS_VuiC1&@7.RTb:gy%=fPWDfk1~A>wdM/8IL=Do:<I*Ov@DWilsF00zi$' );
define( 'AUTH_SALT',        'Ff|n.PM@#,lH*-?%ID O6y}qkB3|IAm#wK7htB7c5#xtX>EPbW]k7^|AslNL&E}z' );
define( 'SECURE_AUTH_SALT', '|@hL0i=6c/L75EY%hCd:$BDBonh=GX;P=kvzj=]{BJJ!cj4e+j.w),>ul>`[4IM8' );
define( 'LOGGED_IN_SALT',   'l<?<n,P`31<`?Q~d Li8P)8p4Br[v+%3_C&NIP0M;GK%c/m*6:Dbbd=efFH[MxWJ' );
define( 'NONCE_SALT',       'o}Ar/Hff.[}!Sn<n(qib6wTRa|6AR^c*,;Y)F863dz/H5b-OLGwksoPDp*dz*cvr' );

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

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
