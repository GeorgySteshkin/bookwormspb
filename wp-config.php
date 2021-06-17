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
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'bookmagazine' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'Georgy' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '011003' );

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
define( 'AUTH_KEY',         'JqJoh%!E*]IUup-5#nbr1%JtX_-D7EonV~?Cxq9>7lb%dKuQHj.*NfTHIf3&g2]@' );
define( 'SECURE_AUTH_KEY',  'am#ps5`E`5%V{^1+|j}#4]aErmU2%A$VBQw,:|@fL>Vg@-g$P/QPK+Hxe34QtLX2' );
define( 'LOGGED_IN_KEY',    '`u6u8MX*CetF@2*dN7EV4h+d{l9^i$KVoh<?^k;cXt8SD>!Gpo$VBBp$#Y.+Gh7I' );
define( 'NONCE_KEY',        'YNBFw`Qae~2&~FTLTJ3A9{C/Md-{O,jw:@tvBlu(W[IQ`}/_M?TI)tCE6Amabd-/' );
define( 'AUTH_SALT',        '80HW^JT|Ei7eLN^uTpKVpV:y)9u$=^kBDMkyx[&7tkca6*qX;GP`+sT;&V;t{{X_' );
define( 'SECURE_AUTH_SALT', 'l=b-bVXOM9^E &oie~S)t2?kS;3,f7YI!06g6J]OBx<W?iSv3D=L*Qc[M<86bX(e' );
define( 'LOGGED_IN_SALT',   '0y9Fj&&#T[1{[MMA2o!(}k_YAN/>-|&js{{C?Fd,s;^(f4G$<lk()J]K KUIMd^m' );
define( 'NONCE_SALT',       'ZoOkEam$)4FG?_Z%:mHD:1uT?7O35[2sY!!a.0V9Jhil!l35x}?_wpp@nCPvJUW+' );

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
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
