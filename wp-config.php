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
define( 'DB_NAME', 'quotesin' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'AnQ`XQ<0`lt`WX.QO0r}p7K|1|+1xS2JCt_NGn5_*:KPI>>)(}-1]Oo$W85V&o)`' );
define( 'SECURE_AUTH_KEY',  'wt}0Vr<@qUnK}uyyx4<2>2YoUv*!;4j:dj%@f@5VI8b9<#`+beD;c:I3qap]hly!' );
define( 'LOGGED_IN_KEY',    'T$8c,UYGb.SF+H?9S)DX;$Y,&f>-t9s&g.42j|L?&xVY,v=$v[#E|/.?OLndP]s0' );
define( 'NONCE_KEY',        'x[XpKmQvL`?.UwYoc:8+eao}kG b~4,4TzlPBjf!JdHXX<MK:Rp-|GLBKG[bWF2o' );
define( 'AUTH_SALT',        'mV-oAYcSmr=@h@.}/.V=De.<+;G^]-{*W!Yca4MF<R_2KB7cy+bRyKO}:/LHI{5b' );
define( 'SECURE_AUTH_SALT', '(WRtI`zX,St/$Bx4n2avx]o4,!H#FvIM8yVt`sH5G8~?g^!MqOsWY:`KWR&0SwpQ' );
define( 'LOGGED_IN_SALT',   'm3DZ 1GKj<JkSP!o8 m{1)X<%bUOIRZR!&Gr_OY7(V$Te2Pa{[ ((}AmVUvy`?dq' );
define( 'NONCE_SALT',       'h7t(<;WVBcOem: O4]U)z<StE$IMqW)uo2(dJY4kUIAalL2lKChQ??4hUnSoLrTm' );

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
