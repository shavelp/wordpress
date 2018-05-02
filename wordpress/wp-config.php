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
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '=,WL1`;*6e1b|^;)%GZ1kD{yWcSP^gLS+w@G%`gvKHU8l_2KTfE9`Cf/[~?7 Vjp');
define('SECURE_AUTH_KEY',  'wbf/tx5f}ni-xB?DH6lSI$SGihR)DcYrr7`Wk1 t l^Y8U{debAlvZlh}OPj8Hag');
define('LOGGED_IN_KEY',    'FSS3Y.a5Y4JP(3X7pN-.3g3S9g_l%N@3VZ10=}.<n9^48@&/%;,sftMurlR>MY2H');
define('NONCE_KEY',        '63X#h$I[v5)cd]qksd Z9l)R,Z$d`LEOhOG4[(S=e3Yk>T%Bv+SLexO,5]5$GWRf');
define('AUTH_SALT',        'RZ@kw@9F~sLGrsp^*S8r6>|S.W[.KocBkYIn(PVU+OaM}i%?cpHX;3&d]Ut8~KBi');
define('SECURE_AUTH_SALT', 'z9<sBLS m^ +H,-X$3XV:j@le.ZJ6gRZ#Y>`A#q/- =F58GVY`?Z)9Z#y%m?LTxo');
define('LOGGED_IN_SALT',   'Tb3Fy#v!nYMOu9LPPV}:[-::bwB2AkRXV|J:pusoHK.B_LoXO2]SIV4;>$IA?x<X');
define('NONCE_SALT',       '[yHD-|Q0.N L*10mU[MDDh$ j_R?hQk: T22qZ.Y)/Y[fY4u.)#u%4`b5z1El|OO');

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
