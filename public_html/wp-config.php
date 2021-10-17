<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'kii8r_wp1' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'kii8r_wp1' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'x4fuwerm5a' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ':L-~U*O5CZ9sny>hD!g6S51w3)%p!(,qFO;Vz%HR+F3*p+/DTJC<gB! _@-yui`%' );
define( 'SECURE_AUTH_KEY',  'lf jV~,=S8l|MHE.iT,N:j-$l;vJe_`+3?P)jmFZbhmTGqs?BG[sieo:07Cn_Qu?' );
define( 'LOGGED_IN_KEY',    'veb&n$oQ0Pl^>?gSLzL9#Pp{&%i;u~j 22a_9>%/a7*dU:8~$A@Q?=a<W _gMX|J' );
define( 'NONCE_KEY',        '%||B_y7x(tH,z@dvDsDUreVz&0Cc~.&K@X0@sjpnB-* g9w2uvx|TBedrL{aa:&|' );
define( 'AUTH_SALT',        '0}#e8e}M$sE~pp(;K@H0sVeXNAkoQ&-A.|))/d*aO=`1]7b4kDBz>seV%V)+!{/W' );
define( 'SECURE_AUTH_SALT', 'KFb?ByGL$-[w br~_.Lx>02$CP046+Y?&CcDI:G9Ke*r,liA^/C^|)P@A}>[|C&l' );
define( 'LOGGED_IN_SALT',   '!og6A,TH$7UPZ$U^qCB2n|0P`Af`%,: PcC ;-XN3`.MN7a!HC0d%<*{&S(30p[]' );
define( 'NONCE_SALT',       ']A}xXn,#NHEA^!Hm vwWOq(S}}ia2KhO0HFQ<+TaKs-0)`pbSdr]q{z,MHfXO;-8' );
define( 'WP_CACHE_KEY_SALT','GdojG98{_RC=Y[#Qk;(>&x!JiW3w%|i)V-g>O<w/s<iTk8ut]@qqgg*5WvJX3u%A' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
