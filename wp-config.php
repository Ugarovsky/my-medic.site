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
define('DB_NAME', 'tatsar_mymedik');

/** Имя пользователя MySQL */
define('DB_USER', 'tatsar_mymedik');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'tatsar_mymedik');

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
define('AUTH_KEY',         'V9g|qc8 XBNr,Y+=g>KJ~8=CN>OvmS%L.4GD#M+hPAu#C})B($V%E+)o}=IuakkD');
define('SECURE_AUTH_KEY',  '=WdR/?TJ+!dD7V/%TK#t+{1%n-<6DWV~<6xb5e`|N)l0KfEoC^0Bb1!2cx:c{X3&');
define('LOGGED_IN_KEY',    '+{g2c26gF2pVnlpSdcqHXW*&N%:@#db=|Rd^pLywn$d.: @b6`0mZh#9 O* PpE+');
define('NONCE_KEY',        'xr7ro}FHY>dz*.xmUB,h1jDV@n(_l=}z+v@+4OGz:a8: q7)b92+WoIS1A|vPgKs');
define('AUTH_SALT',        'Rc*<aHG&_l]{wc?4=BaOqv|NBs->cfK?LVU6b?YH1{.X|>RXb+R^,ER~u`vxgM56');
define('SECURE_AUTH_SALT', 'am%j51cN4S9T&tUVlB)0}GdvEqrP?Ca5X/sdwC4.C,fwtm&g|wp:(%`p%]qrgJH*');
define('LOGGED_IN_SALT',   '@F*|d]|vy:Jt*k8OB|Ll=5Wmoj)4wvV$f]]8a[KmK%_+;=|ClpFt;%FdeM^M1|tE');
define('NONCE_SALT',       'jmKINPh{p}>-[2Y#-3kd+2!qOl;(bvP*Y=/|n1 N,EN!:BoE2j?--h6(48ie?N|)');

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
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
