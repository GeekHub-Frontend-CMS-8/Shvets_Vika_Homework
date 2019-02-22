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
define('DB_NAME', 'wordpress');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '1234');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'TRmk]ma2^a,G2ct=>PK/!;_vfs3LNur8r!a3^5wh?l[>(L]OT<4u}gxI6,du9ZH+');
define('SECURE_AUTH_KEY',  'Rm3ErpN/sR#/dqK|H=fIaT<{Q;faS`jqFl/>xGZN+4dL(?^Uef4qYn/X[T]G.%uI');
define('LOGGED_IN_KEY',    'J>O,A1w|a?0<%!D>{`ZxtU$s^}g`wngL:[,kO5,[/UF@rP|a<O>4~2[~OxZT#-_X');
define('NONCE_KEY',        't;,x2Dja&d@~Ew&j9Fh|2&OFK2kvc$;Ln6scQkUEe1/[:zW;W?$owzG`;B=o?:/z');
define('AUTH_SALT',        '~[1#KO*|FWD2Lk3 -Kb7/Ms9Db9XEs+^zWbghV)#440.]3YIs~WL9Hq{[=OUQ DP');
define('SECURE_AUTH_SALT', 'SXTPk!yI|75+c|Fc]v)9s^:6t$;7!}]Q@J]Vy_=_(wsZ|A0YVJ=n<:hr,~Ba3w=1');
define('LOGGED_IN_SALT',   '(7wv*^>S(zJuN)_zBVhuwxm6|:7&vtCPg~7CeB^Q[ny9{>cG67$]_z*m;=O2ob@Y');
define('NONCE_SALT',       'p8W[!WBiy.6/E*uI2jL^g|X+rlgRxb=<`;]S+8l/!^_}U%)p+2;V^8X`%[}+f*.{');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
