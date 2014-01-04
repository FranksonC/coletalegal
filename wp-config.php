<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'coletalegal_wordpress');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'coleta');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'admin');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'k+),t|v%0wnEE)i6|<R-[$P!2/Y,eJM|)ACK,oDLWHXKUH-t.ZB&Tds0@|g:^QAm');
define('SECURE_AUTH_KEY',  'pQM+xP`-]5cXc.g I=`O%xZ6-0K;Tag+Z$(Nn )k)qBKrU]U%P{rI7z-f:{x~3!7');
define('LOGGED_IN_KEY',    '-) y|l{{auG7?cm+@zkd#Cea1[WT.i:d>:;TfV>>m0#~#Ou=2fqG=~xSY(+1J@]!');
define('NONCE_KEY',        '+B1]jmt,gRc7X?D)1Nc.vf1nFJ<~8Whuktr|rsd?wB|=1:MiiqZC@W&]BI%l? D[');
define('AUTH_SALT',        'fC!z|xgJ;6]YD?WTB+E2oFKl]iU4jW,QE(gXof7Gh-/Y;4-vb;`5]fJ_nD>h0;^B');
define('SECURE_AUTH_SALT', '}8}mAlLKdX#o_awyIKa-5g?+sk=<[Egfz$xGnLkNPta3l&]!,?-R=4#+LKm?u5a&');
define('LOGGED_IN_SALT',   '?;W@@Bqge|j|`-<Bos]#U^tM*Ge4}*Tx/mt(<C*3!?H0n ~Ig,)s!oZQ5UZ#S0Z7');
define('NONCE_SALT',       '!.v5qJzRi+bQ>1aj*?+te`=#0==1N|l{:d} _`/|A:dH!`_Hr+-2n95FMfGITQ+c');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * O idioma localizado do WordPress é o inglês por padrão.
 *
 * Altere esta definição para localizar o WordPress. Um arquivo MO correspondente ao
 * idioma escolhido deve ser instalado em wp-content/languages. Por exemplo, instale
 * pt_BR.mo em wp-content/languages e altere WPLANG para 'pt_BR' para habilitar o suporte
 * ao português do Brasil.
 */
define('WPLANG', 'pt_BR');

/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
