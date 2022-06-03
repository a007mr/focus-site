<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define( 'DB_NAME', 'focuswordpressdb' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'focusadminblog' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'glkmafienv4Q2B' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '-[$P8F(2/i1`7~(h63y+zh0d $=3 #-NJ(Y^n)Rx@0)>3,,.1]!QVI_L8S+l@5;r');
define('SECURE_AUTH_KEY',  'Hdmj1Vw(`K^qD_Z}rF:C,Ug@n+[iiWBa.Vh8k!li@:&QE&!h<&]O-?=!3u+2_,SO');
define('LOGGED_IN_KEY',    '=AN6OBTp;m ANn@FsV;W/-,p3M:4Oy+]c@<+6#`-3%qhq%sxT^8ww|E{!|-^f,wH');
define('NONCE_KEY',        '#M(Xzj,r_$bU@Y#hD|&*G9CN^0_|f2zG-#YQM#se+NT7z(q_{(|5iFKv>A|w]+t6');
define('AUTH_SALT',        'tE|/+S9M;z].2lJe>4s<o_;z1KTy.lg:ozaZEz4X.:xXEYRru$s8|)=iK^/^U21y');
define('SECURE_AUTH_SALT', 'y7^Rn+.>`;)__;+Mu=EP^G&-SrH-?!3SDr^:t+m8rf6-rAKR^peI;aWh-8D~n_Pc');
define('LOGGED_IN_SALT',   '(/6Ry/E.+kTTbV?@n]@j@}ZX9AYXt+lhPT%gwr8Zml-T2HiSuC8OY7W:x._+Fgh5');
define('NONCE_SALT',       'zU-x|rKNxL[u+8s{Fx=moH9hrR^jK:H}KMv:A}rC@5(b-Q z*+iZ2u/>b|~J3O?h');

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
@ini_set('upload_max_size' , '128M' );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );

define('FS_METHOD', 'direct');
