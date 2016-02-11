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
define('DB_NAME', 'db_dima');

/** Имя пользователя MySQL */
define('DB_USER', 'db_dima');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'as210100');

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
define('AUTH_KEY',         '_:+j)2`5)M(VFOyTg`{j.3x-O=mJ.hkD+*@Fda6^>YjYVmJ.jgwL^<VCMWR; F+V');
define('SECURE_AUTH_KEY',  'pnCf(5Xi=aR6<7~|#iG~Q-=XK9p&jZJ.+njdux7+unhq<p0(mwl4BDM`25%y#JRR');
define('LOGGED_IN_KEY',    'GbM`#-W.y!.U746I:Rn|[DIM1/x*KxB+Ivm%1_/?^$pPGhX;Wvu`NdEC);R< H6[');
define('NONCE_KEY',        '-[::_vkea4Abr+_L]f^<PNcn5n*DAfu+W*OqwO9:khFma/eJ3/uL-:Nh]}I2&2!d');
define('AUTH_SALT',        '_/>*c.{DC,J-sEN.~q8hb16oKL8@WA8bA-s]$238my:n_2. &{)&YMz/)n7+H0^8');
define('SECURE_AUTH_SALT', '(*[N(N*fR+o*b $%f=ODR~+y|L_ZMTSHwLGN=5}zT%Y]m?n8}3%Ul_X_a|d;,yLK');
define('LOGGED_IN_SALT',   'bWFup{>C-yYx@I,DELr<Z Qd+PyxEE&(!F0cS=sME=D)D!IEcMoX-X?W/%!z?pm>');
define('NONCE_SALT',       '2<1E9Jf(|Fj_BsI;Y%+Y(&8DBoAqgQ6u^oNv/qI)Bt<-&?7roy/m+>1$,Jj~bjV|');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'sd_';

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
