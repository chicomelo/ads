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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'ads_wp_db' );

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
define( 'AUTH_KEY',         '=6hSy!k:ptJ=hg!|cJ%VxC63mxsk,mQpM_;s%FZ?-S,YBY0 #H^wt*la^2[e%NAR' );
define( 'SECURE_AUTH_KEY',  'b#U/xQ//x4:-2l[76VO5FM9iN6mlopX&q>m5!9T)AL(+Ebs8c%nXZ9l[M_b?%QWP' );
define( 'LOGGED_IN_KEY',    '8-zI w+@6uTZL{_.3Qu_kLMPT_m|wR1^u<Xc]:-)(:9*V[@^miRkQM<LnmCcUJmv' );
define( 'NONCE_KEY',        'ZEtw46Mux{@<4r&407Vlmrn`?X)7tGx&l7OQ=M~EG6Ua=Ka-z[1r`[N,CTe.7$ej' );
define( 'AUTH_SALT',        '9a_3/., ;Z&x1#qP=iELp+D.WVvB9Fw8Kr.<RF#6r}oj%x_k[+i 85o)%_K-C[^l' );
define( 'SECURE_AUTH_SALT', 'VxBK.rQ1R=z]#a=Jpp:LG>_p5;QppZ:ZoZ)FMM$Q*HsVfBXKr!RMGfbR0!HtK_yN' );
define( 'LOGGED_IN_SALT',   'TsW9oy$,(.WxdJr`vANe>,XMF>(D^I_x|p~fq+]K5 XtHh^z}%PCfx}7hR+N<_c>' );
define( 'NONCE_SALT',       '{~N)jb]u7^Ku$nUIX_79yt{{U]!&adAva$*$PDQOXuW)(5t9O83MO3g +4,7MI5x' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'pos_ads_wp_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
