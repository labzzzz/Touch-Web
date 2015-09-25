<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи и ABSPATH. Дополнительную информацию можно найти на странице
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется скриптом для создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения вручную.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'u5894sbab_tweb');

/** Имя пользователя MySQL */
define('DB_USER', 'u5894sbab_touch');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'H8kr!^kt5');

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
define('AUTH_KEY',         '5Ku(LqznvQ&|+A}x44CiY88BujWC@r#|}-!,tA3+{7C<r:tEqU:w~ Ckm^2KGlWL');
define('SECURE_AUTH_KEY',  '=~gc9S68QY@HuX;R<6#Jd*iKQ-:bP%zSjz)hdTz$ER5i(-[H~?MpB_sPQ}fv$5ei');
define('LOGGED_IN_KEY',    '1L<8rx{tI`3uwxe!&0!V>@AJb}rXR7_/106]>BGd B>s+c]C|?z|tTMyx1S;JrKY');
define('NONCE_KEY',        'gZ+KsO_{N<F;m*-mo# _y+Vqp{d,F@%M&EWIc*K(8F:f!e$s_5rsN!YGf+@ku(4l');
define('AUTH_SALT',        'FJ-|*^9=i!D,m1ftl@>k}6|+)KFT0<gQCXN-Bq+QHHh^N31_1$:-hM]|@a_+?vly');
define('SECURE_AUTH_SALT', 'B+gn(Hg}%lc+f4i[O +Hs,k/kjF=vLH#hYpOZXVnt^%!]>VY-,1xT+%ePp^3{`[5');
define('LOGGED_IN_SALT',   'p=LN|Vqx`A#zkZhCA8s&(><kTWx!!LN**aEB<r?;IZ(ez7U%U?xwG>KoCsKoD}$W');
define('NONCE_SALT',       '+gu,bTdjx3Zh4|IY=8#^?I:bjAHCkG9R}p5f68`Zb QWV*`F!*q);J)rm}LCV=[`');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'v25s_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
