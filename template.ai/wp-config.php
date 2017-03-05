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
define('DB_NAME', 'template');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'ZN2HOHWMF)34g1Sk^(xWY#KWy^Q#P,#Oma-^!hA]z~Q;jz)S&bw6X-x -$neV9)?');
define('SECURE_AUTH_KEY',  'aoj,A4Zv^p1&l3b!#MLpU<|-6dNxm}Qj.4i(t,[VV)8t;q;eRYv[c.,&cW_#_3:Q');
define('LOGGED_IN_KEY',    'd=M:A5+]J)4I9[3(&A)4EdhyfO:227DE~h88}_jG[t^@+<KX>!ik`GH~fKe*(N!P');
define('NONCE_KEY',        '4e_d$k=%o$`oAh!bl~&dCHF}x3Bt5#dDfn9CCrel@A&}f}#eAr+SzX{971_*m>yz');
define('AUTH_SALT',        'yIl49P,Mb1P/,qb /iw2<I]5u(f;0FtIZRsN36!`e@iE^]%GVhKd%[.B&1E0mR->');
define('SECURE_AUTH_SALT', '>;|n$^&,P#qa7^WlEGm^@1=ikWp`N}pZnB*>[Pb0+&$?:d0u=HEFDH|tB)eeA${U');
define('LOGGED_IN_SALT',   '*w1+2-b*AZLltbOOTFqC|k,?]$,k*n=O[gfjLxcM]3TC4v$[)M<jUPUI+ls/_?(G');
define('NONCE_SALT',       '1l/!2w)|:6>O2UAth_3gcKF:C_IFaMw]@AzZ`DV+8%9(2b-l|;<0{X_)k 5}`X.8');

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

/**
Чтобы разрешить использование этой страницы для автоматического ремонта базы данных, добавьте в ваш файл wp-config.php следующую строку
 */
define('WP_ALLOW_REPAIR', true);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
