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
define( 'DB_NAME', 'mybase' );

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
define( 'AUTH_KEY',         ')5,Wi;kyLii5o$2WFNct8&ZqYzUl0[K,7p18?b^*B]h41iS$&x%Pw$5e8%-|3vSx' );
define( 'SECURE_AUTH_KEY',  '[InGS##H~6~/J0**}6KhWZz1ioxIc5Ya=*u0T)7h?uRjE^n $w,xq]v4@H*yM3<C' );
define( 'LOGGED_IN_KEY',    '<M,)kXAgbfy8EyPTZMb|-XXfR#Hu@k*a{$_YhM*Y[yle|%@q:e4rh/M<yY5-}ruj' );
define( 'NONCE_KEY',        '7_hxjR-G,MKgJ&.-rwdtfs_bVi?>OnW~Tb6fIEPA,53VEON<$yP4,:B@OiX+1fh<' );
define( 'AUTH_SALT',        '@VGgTMi%$v].muna?cBY:kc5d*`sqav:?Sg5x~ut{j(o&&}W(B{:7$wUq?>/Vya4' );
define( 'SECURE_AUTH_SALT', 'hGD79d<Nfi%1}=UypJ3<_0Qu3u~$X-.EG/0BC(47jcoxq~&WWeK|{hsiCHrkyx-i' );
define( 'LOGGED_IN_SALT',   'd@DSqib3GFVT<v.4Hz;V1_^UWLwZ$dwqnZt7{R?yWb%]Lw4X|yLLoNPcS N~}H6!' );
define( 'NONCE_SALT',       '|i5OxyuZ/$=eZwBTe*^zF!VoEu(C9k~>usX0;Nv2cxjVyd#w4AqGgw`}L}^-A *%' );

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
