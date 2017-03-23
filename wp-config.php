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
define('DB_USER', 'WordPress');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'Bananakong7');

/** Имя сервера MySQL */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'Y0,l(.1w}y,Ph@pG3tdlSV4~4@zaU/ENF-pgPb@a4& 1yzyQaj1(|${w;b/TBz==');
define('SECURE_AUTH_KEY',  '%oc9`R9bMKge=@SqBY[fdS%y$ZsV;ZIA*D.z&h8e^*6T9Z!z2Ni=:2%oV@b1u<]T');
define('LOGGED_IN_KEY',    'oUww`LDudS~:up0I*sLo94#jwt]<}U]h`ISCoO]z}0HZ_qto;e/!7g=??,#,`WJ9');
define('NONCE_KEY',        '!8B?{~OcP;iat-ZRg<la9^Ie}BMl+=R *jC&J]P* ZwY2TTe(D_k2ka/S|kZw$yI');
define('AUTH_SALT',        'hCz4K9MtnZC;A*5ZRIeuM@HE&sRaWFgYhh&CI+X<W^kwsf:piWk)CAg7P_Q,RE1]');
define('SECURE_AUTH_SALT', 'DnV~4gNp^VUnFs]p#*NaV`es -Q}S7 pX]CyKe,~Qs;h;0K4zyt*5z)8oV[lpAbw');
define('LOGGED_IN_SALT',   'uTZ733T3D;=1f?(&5>E80x*@l~wCK g7bK[J(IOc/A&Ffzp+Mv>EFk ^A@k>gtG4');
define('NONCE_SALT',       'LcqxZ|};7T3/Axsg,?I-R&&&8C-!vUxCsoA*YgV3Q9LTfWS1uKjhvThYDdbnsXb`');

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
