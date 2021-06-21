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
define( 'DB_NAME', 'mypawnshop' );

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
define( 'AUTH_KEY',         '}5;U/&AIfIP]-wU 1{?/Jgw&=Ew&D|<|9]#E-_dBE<`@HKSpaoAP1]E=:kJIh}q:' );
define( 'SECURE_AUTH_KEY',  '>NSJ!|t,tS11)2e_qB4pak=kdCS1C]W0)Wv~X0n>Z1sU/Q^n:xjdR*YF!,eZk=0j' );
define( 'LOGGED_IN_KEY',    'Su_Bi?nKee&#tlaW2Ryr0d8@su{=f4km^klN8SARo[:W%.F#=EgVtp~/ghlI-tnk' );
define( 'NONCE_KEY',        'Y6#@9W>Pq>P:W7 0l=5~l8#1f=8`LVO@V# I7p9+J1^u,bpYw0Qg4H8n&B>tnYF/' );
define( 'AUTH_SALT',        '=e/<j1ip.RamL(aMVpwBK/AhH<<:juJfsPG^74pG!zf<L-~>yr-#YXi|=euI*<w.' );
define( 'SECURE_AUTH_SALT', 'Z0|PJ/==:-LOoLx2rS dpEZlvA-SHEj%qj;,o%`oeYSEsXq_J=+`7mKaiyH_tulp' );
define( 'LOGGED_IN_SALT',   '7h:D):Z8Fl_PIQC`EKBly{V$BE8*<eQfv(T9==- Qz0ywL-ij:R[<jk0:vr/=<`U' );
define( 'NONCE_SALT',       'hhu, ;E,JmgXz60?c`5AXziPxA.4rH!&#C<s)E,JnO6/]t$OxD8KAe1pY-e/gc/=' );

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
