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
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'auto_bd' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
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
define( 'AUTH_KEY',         'jyWY#pD$Qb24Jv>+*Y9L]ij^hXPR0?xX-p9gSqAbU4 l(_I|kJ7%_bsa9U/:=$=h' );
define( 'SECURE_AUTH_KEY',  '9Mwd#`M[/.rz/Hh[/;-QHn|B6`]]Mu{jp.rKh#hd?51/x.E.i`JMvz9rs+GAz)<D' );
define( 'LOGGED_IN_KEY',    'k9ng@G}9&F<nJW/>,RNm}D %2}Qp.zP_<(>~4ZADwX@!(SRq{gJSJfRvnY|nb@*$' );
define( 'NONCE_KEY',        'x;W-^eUvQ}IwtJ2R#jwBl 1b`uZmmo!{[A2Af/S#dmju0P.H[Y[{J<,NTdZai/HB' );
define( 'AUTH_SALT',        'UIQ% v98X_b?$2(5P;[izh!mHIm<zs)&~EtxGrw{&gXeijydy7i|$<0<mm@gSP`A' );
define( 'SECURE_AUTH_SALT', 'j.3`I_qE60ssh>73Hf#kafV%}`zyMt]_|02KW0hRbW[k@rx26oyi->2wD:T3/qD|' );
define( 'LOGGED_IN_SALT',   'O%GEwrou?X3+F7uXu_`vwVuZYkUd.4%?t4J.p9 =7Cx>D.F]FTjTE)dNF.bF%x-+' );
define( 'NONCE_SALT',       'PVlgsfW*XORA(/*EP>1rN:tq%b2C%R(K1{L2#CsjX_UbY/07K~P|!dF6VSvG2q>N' );

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

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
