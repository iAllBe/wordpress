<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wordpress' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'root' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '&vn8-Ih ?n?ZJE.jbHZ6}GDp-`*udnUlQB[1%oac{~XRB;EM%5(Pye:^XJGexhm<' );
define( 'SECURE_AUTH_KEY',  'Zu~sE~(HIY8ImKA1hH_N565S^e}T!8[iwSZBElnc`SLo_r_gX$)B+}Dng0+Ym#w)' );
define( 'LOGGED_IN_KEY',    'h0D;iiD{ wBrMi<d3goY~#tP$i-%pL*bV,%gtK<RZ=ST7?<|sjv8y}%|OGHXqgRK' );
define( 'NONCE_KEY',        '`x#F[C lRRdI=^va3XHuzrDer7NL%N,qGQmXttv,F&^wk<yZ:HI_U+82zreLYNte' );
define( 'AUTH_SALT',        '`3]*EV`kPuHZA~IkB(`$~0PYpEn:2;TR{}|Uj<pe|?;6]B:9&>yV%l:w!w_c{[{z' );
define( 'SECURE_AUTH_SALT', 'R;#RG=S}Wx_`H j>zR@ (aVohgAU43yK)@Y@<=~yX=4jf=]2wpzA%4*H21`|*Yzc' );
define( 'LOGGED_IN_SALT',   '$Jw=F}zbS$7J-4)}L+B-e*a3j5HxTk{_+L^r<p@KONRE0lWO{ESE=^6$X{;*7Ul$' );
define( 'NONCE_SALT',       '6a%(z)6E[Vtw12$H44z$=8=GvIL-Mi*x|hV`eaX-!$me(w@Pt3^~S^:DXFV`BT #' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
