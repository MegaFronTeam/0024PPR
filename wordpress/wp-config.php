<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'odd' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'odd' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'Y38vgfw)DxmlRnhw' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'M2{upCE-X12c];D(mMy~0eZ+ji?>:,WeKx^vdq*EPv3{n#Dt0]Z,C uQSSQU$Qll' );
define( 'SECURE_AUTH_KEY',  'OR9{H^k|fQsIuyH[.Jp;#ar#5^WevV_;0CD$j,ImA- APjzq5< _oI+Y[ac);lD/' );
define( 'LOGGED_IN_KEY',    '.p6Hds_ujH+t 5`;hGGYBe[J4x[D1a],QhvUuz{r&.a1Asc[6}>k+@pjdY!y8<A6' );
define( 'NONCE_KEY',        'lH1/kUi1qv%X,|lXZI YyuU_I-EyfF<oUs6jxU:rCs-!fl+yhC=&ZAx31TH?E`8T' );
define( 'AUTH_SALT',        'Q-i**Z!vh<d#gB^L}lIs|K(fm4w3HB}CM.0x#I:7e^4(^fE?>EKuwOue80+B$L!~' );
define( 'SECURE_AUTH_SALT', '#jzOgGZ~c<e4NK6rb|v0((yX1( D^jZf~W;;vOFewrnBuvZv*lP$fU~xqI}.O:3-' );
define( 'LOGGED_IN_SALT',   '&_o)6*>lQp<DSvj-_w*IoIYk3$<2yU7g}5/4dG<w-fh#3#L2,zMfa<3!X{w.X[_2' );
define( 'NONCE_SALT',       'O}bhG#-)@&QS,Tv-;!HI7.dIsnHVwT>xLayw|*kx^AsM*0=U3#6b~>H^9_(65.j<' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'odd_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
