<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @package language
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

// Common installer pages
$lang = array_merge($lang, array(
	'INSTALL_PANEL'	=> 'Контролен панел',
	'SELECT_LANG'				=> 'Изберете език',
	
	'STAGE_INSTALL'	=> 'Инсталация на phpBB',

	// Introduction page
	'INTRODUCTION_TITLE'	=> 'Въведение',
	'INTRODUCTION_BODY'		=> 'Добре дошли в phpBB3!<br /><br />phpBB® се явява най-разпространеното решение с отворен код за създаване на форум. phpBB3 - е най-новият продукт от гамата, започваща от 2000 година. Както и предшествениците си phpBB3 се явява функционален, има приятелски интерфейс и напълно се поддържа от екипите на phpBB Team. В phpBB3 са подобрени качествата, направили В phpBB2 популярен, добавени са най-популярните функции, които липсват в предишните версии. Надяваме се, че това ще надмина очакванията ви.<br /><br />Дадената система, ще ви помогне да преминете крачките по инсталиране на phpBB3, обновяване от предишни до последната версия на phpBB3 или конвертиране в phpBB3 на друго програмен продукт за форуми (включително phpBB2). За повече информация, моля прочетете <a href="../docs/INSTALL.html">ръковводството за инсталация</a>.<br /><br />За да се запознаете с лицензионните условия на phpBB3 или да разберете за поддръжката, изберете необходимия раздел в страничното меню. За да продължите изберете необходимият раздел отгоре.',

	// Support page
	'SUPPORT_TITLE'		=> 'Поддръжка',
	'SUPPORT_BODY'				=> 'Пълна поддръжка се осигурява за последната стабилна версия на phpBB3 безплатно. Тя включва:</p><ul><li>инсталация</li><li>конфигурация</li><li>технически въпроси</li><li>проблеми, свързани с потенциални грешки на програмният продукт</li><li>обновяване на версиите - кандидати за релиз (RC) до последната стабилна версия</li><li>конвертиране на phpBB 2.0.x в phpBB3</li><li>конвертиране в phpBB3 на друг програмен продукт за форум (вижте <a href="https://www.phpbb.com/community/viewforum.php?f=486">Convertors Forum</a>)</li></ul><p>Ние предлагаме на потребителите, използващи все още бета версия на phpBB3, отново да инсталират последната версия. </p><h2>Разширения/Стилове</h2><p>Въпроси, свързани с разширенията, се обсъждат в съответният форум <a href="https://www.phpbb.com/community/viewforum.php?f=451">Extensions Forum</a>.<br />Въпроси свързани със стиловете, се обсъждат в съответния форум <a href="https://www.phpbb.com/community/viewforum.php?f=471">Styles Forum</a>.<br /><br />Ако въпроса ви е свързан с конкретен продукт, задайте го в темата, посветена на този продукт.</p><h2>Поддръжка</h2><p><a href="https://www.phpbb.com/community/viewtopic.php?f=14&amp;t=571070">Как да започна</a><br /><a href="https://www.phpbb.com/support/">Поддръжка</a><br /><a href="https://www.phpbb.com/support/docs/en/3.1/ug/quickstart/">Клатко ръководство</a><br /><br />За да сте в течение на последните версии,може да се абонирате<a href="https://www.phpbb.com/support/">за нашият newsletter</a>.<br /><br />',

	// License
	'LICENSE_TITLE'		=> 'General Public License',

	// Install page
	'INSTALL_INTRO'			=> 'Добре дошли в програмата за инсталиране на phpBB3',
	'INSTALL_INTRO_BODY'	=> 'С помощта на тази програма, ще можете да инсталирате phpBB3 на сървър.</p><p>За целта ще е необходимо да бъде настроена БД, името й, потребителско име и парола за достъп. Ако нямате достъп до тези данни, моля свържете се с доставчика ви на хостинг услугата. НЕ МОЖЕТЕ да продължите инсталацията, без достъп до тази данни. Също така е необходимо да знаете следното:</p>

	<ul>
		<li>Типа база данни (БД) която ще използвате.</li>
		<li>Име на сървъра БД или DSN — адрес на сървъра на БД.</li>
		<li>Порт на сървъра на БД — порт на сървъра на БД (не е необходимо да се посочва в повечето случаи).</li>
		<li>Име на базата данни — име на БД на сървъра.</li>
		<li>Потребителско име и парола за БД — данните за достъп до БД.</li>
	</ul>

	<p><strong>Забележка:</strong> ако изпълнявате инсталацията с използване на SQLite, е необходимо да посочите пълният път до файла на БД в полето «Име на сървъра на БД и DSN» и да оставите празни полетата за потребителско име и парола. От съображения за сигурност, е необходимо да проверите, че липсва достъп от интернет до този файл.</p>

	<p>phpBB3 поддържа следните БД:</p>
	<ul>
		<li>MySQL 3.23 по-висока (поддържа се MySQLi)</li>
		<li>PostgreSQL 8.3 и по-висока</li>
		<li>SQLite 3.6.15 и по-висока</li>
		<li>MS SQL Server 2000 по-висока (директно или през ODBC)</li>
		<li>MS SQL Server 2005 по-висока (native)</li>
		<li>Oracle</li>
	</ul>

	<p>В списъка за избор на БД, ще бъдат показвани само онези, които поддържа сървъра ви.',

	'ACP_LINK'	=> 'Заведи ме до <a href="%1$s">ACP</a>',

	'INSTALL_PHPBB_INSTALLED'		=> 'phpBB вече е инсталиран.',
	'INSTALL_PHPBB_NOT_INSTALLED'	=> 'phpBB още не е инсталиран.',
));
	
	// Requirements translation
$lang = array_merge($lang, array(
	// Filesystem requirements
	'FILE_NOT_EXISTS'						=> 'Файла не съществува',
	'FILE_NOT_EXISTS_EXPLAIN'				=> 'За инсталацията на phpBB е необходим файла %1$s.',
	'FILE_NOT_EXISTS_EXPLAIN_OPTIONAL'		=> 'За по-голямо удобство при използване на форума, се препоръчва наличието на файла %1$s.',
	'FILE_NOT_WRITABLE'						=> 'Файла е недостъпен за запис',
	'FILE_NOT_WRITABLE_EXPLAIN'				=> 'За инсталиране на phpBB файла %1$s трябва да бъде достъпен за запис.',
	'FILE_NOT_WRITABLE_EXPLAIN_OPTIONAL'	=> 'За по-голямо удобство при използване на форума, се препоръчва да се направи достъпен за запис, файла %1$s.',

	'DIRECTORY_NOT_EXISTS'						=> 'Директорията не съществува',
	'DIRECTORY_NOT_EXISTS_EXPLAIN'				=> 'За инсталиране на phpBB е необходима директорията %1$s.',
	'DIRECTORY_NOT_EXISTS_EXPLAIN_OPTIONAL'		=> 'За по-голямо удобство при използване на форума, се препоръчва, наличието на директория %1$s.',
	'DIRECTORY_NOT_WRITABLE'					=> 'Директорията не е достъпна за запис',
	'DIRECTORY_NOT_WRITABLE_EXPLAIN'			=> 'За инсталиране на phpBB директорията %1$s трябва да бъде достъпна за запис.',
	'DIRECTORY_NOT_WRITABLE_EXPLAIN_OPTIONAL'	=> 'За по-голямо удобство при използване на форума, се препоръчва да се направи достъпна за запис, директорията %1$s.',

	// Server requirements
	'PHP_VERSION_REQD'					=> 'Версия PHP',
	'PHP_VERSION_REQD_EXPLAIN'			=> 'За работа на phpBB е необходим PHP версия 5.4.0 или по-висока.',
	'PHP_GETIMAGESIZE_SUPPORT'			=> 'Функцията PHP getimagesize() не е е достъпна',
	'PHP_GETIMAGESIZE_SUPPORT_EXPLAIN'	=> 'За правилна работа на phpBB е необходимо да бъде достъпна функцията getimagesize.',
	'PCRE_UTF_SUPPORT'					=> 'Поддръжка UTF-8 в PCRE',
	'PCRE_UTF_SUPPORT_EXPLAIN'			=> 'phpBB няма да работи, ако PHP е сглобен без поддръжка на UTF-8 за разширението PCRE.',
	'PHP_JSON_SUPPORT'					=> 'Поддръжка на PHP JSON',
	'PHP_JSON_SUPPORT_EXPLAIN'			=> 'За правилната работа на phpBB трябва да бъде достъпно разширението PHP JSON.',
	'PHP_XML_SUPPORT'					=> 'Поддръжка на PHP XML/DOM',
	'PHP_XML_SUPPORT_EXPLAIN'			=> 'За правилната работа на phpBB трябва да бъде достъпно разширението PHP XML/DOM.',
	'PHP_SUPPORTED_DB'					=> 'Поддържани бази данни',
	'PHP_SUPPORTED_DB_EXPLAIN'			=> 'Необходима е поддръжка на поне една съвместима система за управление на базите данни от страна на PHP. Ако нито една СУБД не е достъпна, моля свържете се с доставчиска на хостинг услугата или разгледайте съответният раздел документация, за инсталация и настройка на PHP.',

	'RETEST_REQUIREMENTS'	=> 'Провери повторно',

	'STAGE_REQUIREMENTS'	=> 'Провери изискванията',
));
	
// General error messages
$lang = array_merge($lang, array(
	'INST_ERR_MISSING_DATA'		=> 'Необходимо е да бъдат попълнени всички полета на тази страница.',

	'TIMEOUT_DETECTED_TITLE'	=> 'Програмата за инсталация е установила, превишаване на времето за очакване на заявката',
	'TIMEOUT_DETECTED_MESSAGE'	=> 'Станало е превишаване на времето за очакване на запитването при изпълнение на програмата за инсталация. Опитайте да обновите страницата в браузъра, това може да причини загуба на данни. Препоръчително е да се увеличи времето за изпълнение, от настройките на PHP, или използавне на интерфейса за команден ред (CLI).',
));

// Updater
$lang = array_merge($lang, array(
	'STAGE_OBTAIN_DATA'	=> 'Определи параметрите за инсталация',

	//
	// Admin data
	//
	'STAGE_ADMINISTRATOR'	=> 'Администриране',

	// Form labels
	'ADMIN_CONFIG'				=> 'Настройки на администратора',
	'ADMIN_PASSWORD'			=> 'Парола на администратора',
	'ADMIN_PASSWORD_CONFIRM'	=> 'Потвърди паролата на администратора',
	'ADMIN_PASSWORD_EXPLAIN'	=> 'Въведете парола с дължина от 6 до 30 символа.',
	'ADMIN_USERNAME'			=> 'Име на администратора',
	'ADMIN_USERNAME_EXPLAIN'	=> 'Въведете име с дължина от 3 до 20 символа.',

	// Errors
	'INST_ERR_EMAIL_INVALID'		=> 'Въведен е грешен email.',
	'INST_ERR_PASSWORD_MISMATCH'	=> 'Въведените пароли не съвпадат.',
	'INST_ERR_PASSWORD_TOO_LONG'	=> 'Въведената парола е прекалено дълга. Дължината на паролата не трябва да превишава 30 символа.',
	'INST_ERR_PASSWORD_TOO_SHORT'	=> 'Въведената парола е прекалено къса.  Дължината на паролата не трябва да е по-малка от 6 символа.',
	'INST_ERR_USER_TOO_LONG'		=> 'Въведената потребителско име е прекалено дълго. Дължината на потребителското име, не трябва да превишава 20 символа.',
	'INST_ERR_USER_TOO_SHORT'		=> 'Въведената потребителско име е прекалено късо. Дължината на потребителското име, не трябва да е по-малка от 20 символа.',

	//
	// Board data
	//
	// Form labels
	'BOARD_CONFIG'		=> 'Общи настройки',
	'DEFAULT_LANGUAGE'	=> 'Език по подразбиране',
	'BOARD_NAME'		=> 'Име на форума',
	'BOARD_DESCRIPTION'	=> 'Кратко описание на форума',

	//
	// Database data
	//
	'STAGE_DATABASE'	=> 'База данни',

	// Form labels
	'DB_CONFIG'				=> 'Конфигуриране на базата данни (БД)',
	'DBMS'					=> 'Тип на базата данни',
	'DB_HOST'				=> 'Име на сървъра на БД или DSN',
	'DB_HOST_EXPLAIN'		=> 'DSN — това е името на източника на данните и е необходим само при инсталиране и използване на ODBC.	В PostgreSQL използвайте името localhost за свързване в локалният сървър, през сокета но домейна UNIX или адрес 127.0.0.1 за свързване през TCP. За SQLite посочете пълният път до БД.',
	'DB_PORT'				=> 'Порта на сървъра на БД',
	'DB_PORT_EXPLAIN'		=> 'Оставете полето празно, ако сървъра използва порт по подразбиране.',
	'DB_PASSWORD'			=> 'Парола до БД',
	'DB_NAME'				=> 'Име на БД',
	'DB_USERNAME'			=> 'Потребителско име за БД',
	'DATABASE_VERSION'		=> 'Версия СУБД',
	'TABLE_PREFIX'			=> 'Префикса в таблицата на базата данни',
	'TABLE_PREFIX_EXPLAIN'	=> 'Префикса следва да започва с буква и може да съдържа само букви, числа и долно подчертаване.',

	// Database options
	'DB_OPTION_MSSQL_ODBC'	=> 'MSSQL Server 2000+ през ODBC',
	'DB_OPTION_MSSQLNATIVE'	=> 'MSSQL Server 2005+ [ Native ]',
	'DB_OPTION_MYSQL'		=> 'MySQL',
	'DB_OPTION_MYSQLI'		=> 'MySQL с разширение MySQLi',
	'DB_OPTION_ORACLE'		=> 'Oracle',
	'DB_OPTION_POSTGRES'	=> 'PostgreSQL',
	'DB_OPTION_SQLITE3'		=> 'SQLite 3',

	// Errors
	'INST_ERR_NO_DB'				=> 'Не се получи да бъде качен модула PHP за избраният тип БД.',
	'INST_ERR_DB_INVALID_PREFIX'	=> 'Посочен е грешен префикс. Той следва да започва с буква и може да съдържа само букви, числа и долно подчертаване.',
	'INST_ERR_PREFIX_TOO_LONG'		=> 'Посоченият префикс за таблиците е прекалено дълъг. Дължината на префикса не трябва да надвишава %d символа.',
	'INST_ERR_DB_NO_NAME'			=> 'Не е посочено името на базата данни.',
	'INST_ERR_DB_FORUM_PATH'		=> 'Посоченият файл на базата данни се намира в папката на форума. Необходимо е да го преместите в папка, която не е достъпна през интернет.',
	'INST_ERR_DB_CONNECT'			=> 'Неуспешно свързване с БД. Отдолу са посочени причината за грешката.',
	'INST_ERR_DB_NO_ERROR'			=> 'Съобщението за грешка е недостъпно.',
	'INST_ERR_PREFIX'				=> 'Таблици с посочения префикс, вече съществуват. Въведете друг префикс.',
	'INST_ERR_DB_NO_MYSQLI'			=> 'Инсталираната на сървъра версия MySQL не е съвместима с избраният вариант на «MySQL с с разширение MySQLi». Вместо това, опитайте да изберете варианта «MySQL».',
	'INST_ERR_DB_NO_SQLITE3'		=> 'Инсталирана е стара версия на разширението SQLite. Необходимо е да я обновите, поне до версия 3.6.15.',
	'INST_ERR_DB_NO_ORACLE'			=> 'За инсталираната на сървъра версия Oracle е необходимо да бъде инсталирано значението на параметъра <var>NLS_CHARACTERSET</var> равно на <var>UTF8</var>. Или обновете базата данни до версия 9.2 или по-висока, или променете значението на параметъра.',
	'INST_ERR_DB_NO_POSTGRES'		=> 'Избраната база данни не е създадена с кодировка <var>UNICODE</var> или <var>UTF8</var>. Опитайте се да инсталирате форума в база данни с кодировка var>UNICODE</var> или <var>UTF8</var>.',
	'INST_SCHEMA_FILE_NOT_WRITABLE'	=> 'Файла на схемата на базата данни не е достъпен за запис',

	//
	// Email data
	//
	'EMAIL_CONFIG'	=> 'Настройки на E-mail',

	// Package info
	'PACKAGE_VERSION'					=> 'Инсталирана версия',
	'UPDATE_INCOMPLETE'				=> 'Обновяването не бе завършено.',
	'UPDATE_INCOMPLETE_MORE'		=> 'Прочетете информацията отдолу.',
	'UPDATE_INCOMPLETE_EXPLAIN'		=> '<h1>Обновяването не бе завършено</h1>

		<p>Наличен е неуспешен опит за обновяване. Пуснете <a href="%1$s" title="%1$s">програма за обновяване на базата данни</a>, изеберете варианта <em>Само базата данни</em> и натиснете бутона<strong>Изпрати</strong>. Не забравяйте, да изтриете директорията «install» след успешно обновяване на базата данни.</p>',

	//
	// Server data
	//
	// Form labels
	'SERVER_CONFIG'				=> 'Настройки на сървъра',
	'SCRIPT_PATH'				=> 'Път до конференцията',
	'SCRIPT_PATH_EXPLAIN'		=> 'Път до директорията, съдържаща phpBB, относително името на домейна. Например, <samp>/phpBB3</samp>.',
));

// Default database schema entries…
$lang = array_merge($lang, array(
	'CONFIG_BOARD_EMAIL_SIG'		=> 'Благодарим, от Администрацията',
	'CONFIG_SITE_DESC'				=> 'Кратко описание на вашият форум',
	'CONFIG_SITENAME'				=> 'вашият_домейн.bg',

	'DEFAULT_INSTALL_POST'			=> 'Това е пример за съобщение на вашият форум phpBB3. Всичко работи коректно. Вие може да изтриете това съобщение и да продължите с настройка на форума. В процеса на инсталиране на вашата първа категория и първи форум, бяха зададени подходящи права за достъп за преинсталираните администраторски групи, супермодератори, гости, регистрирани потребители и регистрирани в съответствие с COPPA потребители. Ако решите да изтриете вашата първа категория и първи форум, не забравяйте да посочите правата за достъп на всички нови категории и форуми, които създавате. Препоръчваме ви да преименувате първата ви категория и първи форум и да копирате правата за достъп от тях към ново създаваните категории и форуми. Желаем ви късмет!',

	'FORUMS_FIRST_CATEGORY'			=> 'Вашата първа категория',
	'FORUMS_TEST_FORUM_DESC'		=> 'Описание на вашият първи форум.',
	'FORUMS_TEST_FORUM_TITLE'		=> 'Вашият първи форум',

	'RANKS_SITE_ADMIN_TITLE'		=> 'Администратор',
	'REPORT_WAREZ'					=> 'Съобщението съдържа линкове, към нелегално или пиратско съдържание.',
	'REPORT_SPAM'					=> 'Съобщението има за цел, само реклама на сайтове, программи или других продукти, или услуги.',
	'REPORT_OFF_TOPIC'				=> 'Съобщението не се отнася към обсъжданата тема.',
	'REPORT_OTHER'					=> 'Причината за обжалване, не се отнася към нито една от изброените, изпълзвайте полето за допълнителна информация.',

	'SMILIES_ARROW'					=> 'Стрелка',
	'SMILIES_CONFUSED'				=> 'Замислен',
	'SMILIES_COOL'					=> 'Всичко е наред',
	'SMILIES_CRYING'				=> 'Плаче или силно е разстроен',
	'SMILIES_EMARRASSED'			=> 'Смутен',
	'SMILIES_EVIL'					=> 'Зъл или много раздразнен',
	'SMILIES_EXCLAMATION'			=> 'Възклицание',
	'SMILIES_GEEK'					=> 'Смотльо',
	'SMILIES_IDEA'					=> 'Идея',
	'SMILIES_LAUGHING'				=> 'Смее се',
	'SMILIES_MAD'					=> 'Раздразнен',
	'SMILIES_MR_GREEN'				=> 'Зелен',
	'SMILIES_NEUTRAL'				=> 'Неутрален',
	'SMILIES_QUESTION'				=> 'Въпрос',
	'SMILIES_RAZZ'					=> 'Дразни',
	'SMILIES_ROLLING_EYES'			=> 'Премрежва поглед',
	'SMILIES_SAD'					=> 'Тъжен',
	'SMILIES_SHOCKED'				=> 'Шокиран',
	'SMILIES_SMILE'					=> 'Усмихва се',
	'SMILIES_SURPRISED'				=> 'Очуден',
	'SMILIES_TWISTED_EVIL'			=> 'Много зъл',
	'SMILIES_UBER_GEEK'				=> 'Мегасмотльо',
	'SMILIES_VERY_HAPPY'			=> 'Много доволен',
	'SMILIES_WINK'					=> 'Намигва',

	'TOPICS_TOPIC_TITLE'			=> 'Добре дошли в phpBB3',
));

// Common navigation items' translation
$lang = array_merge($lang, array(
	'MENU_OVERVIEW'		=> 'Обзор',
	'MENU_INTRO'		=> 'Встъпление',
	'MENU_LICENSE'		=> 'Лиценз',
	'MENU_SUPPORT'		=> 'Поддръжка',
));

// Task names
$lang = array_merge($lang, array(
	// Install filesystem
	'TASK_CREATE_CONFIG_FILE'	=> 'Създаване на файла на конфигурацията',

	// Install database
	'TASK_ADD_CONFIG_SETTINGS'			=> 'Записване на настройките на конфигурацията',
	'TASK_ADD_DEFAULT_DATA'				=> 'Записване на настройките по подразбиране в базата данни',
	'TASK_CREATE_DATABASE_SCHEMA_FILE'	=> 'Създаване на файла на схемата на базата данни',
	'TASK_SETUP_DATABASE'				=> 'Настройване на базата данни',
	'TASK_CREATE_TABLES'				=> 'Създаване на таблици в баата данни',

	// Install data
	'TASK_ADD_BOTS'			=> 'Регистрация на ботове',
	'TASK_ADD_LANGUAGES'	=> 'Инсталиране на достъпни езици на пакетите',
	'TASK_ADD_MODULES'		=> 'Инсталиране на модулите',

	// Install finish tasks
	'TASK_INSTALL_EXTENSIONS'	=> 'Инсталиране на разширения',
	'TASK_NOTIFY_USER'			=> 'Изпращане на e-mail уведомявания',
	'TASK_POPULATE_MIGRATIONS'	=> 'Изпълнение на миграцията',

	// Installer general progress messages
	'INSTALLER_FINISHED'	=> 'програмата за инсталиране, успешно е приключила работата си',
));

// Installer's general messages
$lang = array_merge($lang, array(
	'MODULE_NOT_FOUND'				=> 'Модула не е намерен',
	'MODULE_NOT_FOUND_DESCRIPTION'	=> 'Не намереният модул на услугата «%s» не е инициализиран.',

	'TASK_NOT_FOUND'				=> 'Задачата не е намерена',
	'TASK_NOT_FOUND_DESCRIPTION'	=> 'Не намерената задача на услугата «%s» не е инициализиран.',

	'SKIP_MODULE'	=> 'Skip “%s” module',
	'SKIP_TASK'		=> 'Skip “%s” task',

	'TASK_SERVICE_INSTALLER_MISSING'	=> 'Всички задачи на услугите на програмата за инсталиране трябва да започват от думата «installer»',
	'TASK_CLASS_NOT_FOUND'				=> 'Определението на задачата на услугата на програмата за инсталиране е грешно. За зададеното име на услугата «%1$s»  се очаква пространство от имена «%2$s». За получаване на допълнителна информация, се обърнете към документите за task_interface.',

	'INSTALLER_CONFIG_NOT_WRITABLE'	=> 'Файла на конфигурацията не е достъпен за запис.',
));

// CLI messages
$lang = array_merge($lang, array(
	'CLI_INSTALL_BOARD'				=> 'Инсталация на phpBB',
	'CLI_UPDATE_BOARD'				=> 'Обновяване на phpBB',
	'CLI_INSTALL_SHOW_CONFIG'		=> 'Покажи използваната конфигурация',
	'CLI_INSTALL_VALIDATE_CONFIG'	=> 'Провери файла на конфигурацията',
	'CLI_CONFIG_FILE'				=> 'Използвания файл на конфигурацията',
	'MISSING_FILE'					=> 'Файла е %1$s недостъпен',
	'MISSING_DATA'					=> 'Файла на конфигурацията липсва или съдържа грешни настройки.',
	'INVALID_YAML_FILE'				=> 'Не успешен опит за прочитане на YAML файла %1$s',
	'CONFIGURATION_VALID'			=> 'Файла на конфигурацията не съдържа грешки',
));

// Common updater messages
$lang = array_merge($lang, array(
	'UPDATE_INSTALLATION'			=> 'Обновяване на версията phpBB',
	'UPDATE_INSTALLATION_EXPLAIN'	=> 'Тук може да обновите вашата версия на phpBB до последна.<br />По време на този процес, всички ваши файлове ще бъдат проверени за цялостност. Вие ще можете да прегледате файловете и внасяните в тях промени преди обновяването.<br /><br />Самото обновяване може да бъде изпълнено по два начина.</p><h2>Ръчно обновяване</h2><p>Този метод се състои в това, че вие сваляте индивидуален набор от обновени файлове, за да не загубите направените от вас промени в съществуващите файлове. След като свалбите този архив, вие ръчно трябва да качите необходимите файлове, в съответните папки съгласно основната директория на phpBB. След което, ще имате възможност да направите проверка, че всички файлове заемат полагащите им се места.</p><h2>Автоматично обновяване чрез FTP</h2><p>Този начин, прилича на първия, но липсва необходимостта да сваляте обновените файлове и да ги качвате самостоятелно на сървъра, това ще бъде направено вместо вас. За да използвате този метод, е необходимо да знаете изискваните от програмата за обновяване, данни за вашият FTP-сървър. След края на процеса, ще бъдете изпратени отново за повторно сравняване на файловете, с цел удостоверяване че обновяването е преминало успешно.<br /><br />',
	'UPDATE_INSTRUCTIONS'			=> '
		<h1>Уведомление за нова версия</h1>
		<p>Преди да продължите процеса на обновяване, прочетете уведомяването за излизане на нова версия, то може да съдържа полезна за вас информация. В него също така присъстват линкове за сваляне и списък с промените.</p>
		<br />
		<h1>Как да обновите вашата версия на phpBB с помощта на пакета за автоматично обновяване</h1>
		<p>Предложеният тук начин за обновяване на phpBB може да се използва, само за автоматично обновяване. Вие също така може да направите обновяването, използвайки методите, посочени в документа INSTALL.html. За автоматично обновяване, е необходимо да изпълните следните крачки:</p>
		<ul style="margin-left: 20px; font-size: 1.1em;">
			<li>Премини към <a href="https://www.phpbb.com/downloads/" title="https://www.phpbb.com/downloads/">страницата с файлове на phpBB.com</a> и свалете архив с автоматичното обновяване на phpBB («Automatic Update Package»).<br /><br /></li>
			<li>Разархивирайте пакета.<br /><br /></li>
			<li>Качете разархивираните папки «install» и «vendor» в основната директория на phpBB (там, където се намира файла config.php).<br /><br /></li>
		</ul>
		<p>След това форума ще стане недостъпен за обикновените потребители, тъй като вече ще присъства качената от вас папка install.<br /><br />
		<strong><a href="%1$s" title="%1$s">Сега може да започнете процеса по обновяване, като преминете в папката install</a>.</strong><br />
		<br />
		Ще получите насоки, в процеса на обновяване, а след неговият край ще получите уведомяване за това.
		</p>
	',
));

// Updater forms
$lang = array_merge($lang, array(
	// Updater types
	'UPDATE_TYPE'			=> 'Тип обновяване',

	'UPDATE_TYPE_ALL'		=> 'Файлове и база данни',
	'UPDATE_TYPE_DB_ONLY'	=> 'Само без данни',

	// File updater methods
	'UPDATE_FILE_METHOD_TITLE'		=> 'Методи за обновяване на файловете',

	'UPDATE_FILE_METHOD'			=> 'метод за обновяване на файловете',
	'UPDATE_FILE_METHOD_DOWNLOAD'	=> 'Свали архив с обновени файлове',
	'UPDATE_FILE_METHOD_FTP'		=> 'Обнови файловете по FTP (автоматически)',
	'UPDATE_FILE_METHOD_FILESYSTEM'	=> 'Обнови файловете директно (автоматически)',

	// File updater archives
	'SELECT_DOWNLOAD_FORMAT'	=> 'Избери формата на архива за сваляне',

	// FTP settings
	'FTP_SETTINGS'			=> 'Настройки на FTP',
));

// Requirements messages
$lang = array_merge($lang, array(
	'UPDATE_FILES_NOT_FOUND'	=> 'Папката с файловете на обновяването не е намерена. Проверете, че съответните файлове са качени на сървъра.',

	'NO_UPDATE_FILES_UP_TO_DATE'	=> 'Вашата версия на phpBB е последна и не изисква обновяване. Ако е необходимо проверете целостта на файловете, проверете, дали необходимите файлове за обновяване са качени на сървъра.',
	'OLD_UPDATE_FILES'				=> 'Използвате остаряло обновяване. Намерените файлове са предназначени за обновяване на версия %1$s до %2$s, последната версия phpBB е — %3$s.',
	'INCOMPATIBLE_UPDATE_FILES'		=> 'Намерените файлове за обновяване, са несъвместими с наличната версия на phpBB. Инсталирана е версия %1$s, а файла за обновяване, е предназначен за версия от %2$s до %3$s.',
));

// Update files
$lang = array_merge($lang, array(
	'STAGE_UPDATE_FILES'		=> 'Обновяване на файловете',

	// Check files
	'UPDATE_CHECK_FILES'	=> 'Проверка на файловете за обновяване',

	// Update file differ
	'FILE_DIFFER_ERROR_FILE_CANNOT_BE_READ'	=> 'Грешка при отваряне на %s за проверка на промените.',

	'UPDATE_FILE_DIFF'		=> 'Внасяне на промени в файловете',
	'ALL_FILES_DIFFED'		=> 'Всички промени в файловете са внесени.',

	// File status
	'UPDATE_CONTINUE_FILE_UPDATE'	=> 'Обновяване на файловете.',

	'DOWNLOAD'							=> 'Свали',
	'DOWNLOAD_CONFLICTS'				=> 'Свали архив с конфликтните места',
	'DOWNLOAD_CONFLICTS_EXPLAIN'		=> 'Търсете &lt;&lt;&lt; за да видите конфликтите',
	'DOWNLOAD_UPDATE_METHOD'			=> 'Свали архив с обновените файлове',
	'DOWNLOAD_UPDATE_METHOD_EXPLAIN'	=> 'Свалете и разархивирайте файла. Вътре се намират необходимите обновени файлове, които следва да качите на сървъра в папката на phpBB. Качвайте файловете в съответните им места. След което може да продължите процеса на обновяване.',

	'FILE_ALREADY_UP_TO_DATE'		=> 'Файла вече е обновен.',
	'FILE_DIFF_NOT_ALLOWED'			=> 'Недостатъчно права за промяна на файла.',
	'FILE_USED'						=> 'Данни от файла',			// Single file
	'FILES_CONFLICT'				=> 'Файлове с конфликти',
	'FILES_CONFLICT_EXPLAIN'		=> 'Следните файлове са модифицирани и не сйответстват на началните файлове от старата версия. Дадените файлове съдържат конфликти и ще предизвикват грешки при опит за тяхно използване в phpBB. Проверете конфликтните места и се опитайте да ги разрешите ръчно, или продължете обновяването използвайки предпочитания метод за обновяване на файловете. В случай, че конфликтите биват разрешени ръчно, направете повторна проверка за промяна на файловете. За всеки файл може да изберете предпочитаем метод за обновяване на файловете. В първия случай ще бъдат загубени конфликтните места от стария файл, във втория ще бъдат добавени конфликтните редове от новия файл.',
	'FILES_DELETED'					=> 'Изтрити файлове',
	'FILES_DELETED_EXPLAIN'			=> 'Следните фалйове не се използват в новата версия. Дадените файлове, следва да бъдат изтрити.',
	'FILES_MODIFIED'				=> 'Променени файлове',
	'FILES_MODIFIED_EXPLAIN'		=> 'Следните файлове са модифицирани, и не съответстват на началните файлове от старата версия. Обновения файл ще бъде резултат от обединяване на модифицирания и новия файл.',
	'FILES_NEW'						=> 'Нови файлове',
	'FILES_NEW_EXPLAIN'				=> 'Следните файлове липсват в настоящата версия на phpBB. Тези файлове ще бъдат добавени.',
	'FILES_NEW_CONFLICT'			=> 'Нови конфликтни файлове',
	'FILES_NEW_CONFLICT_EXPLAIN'	=> 'Следните файлове са се появили в новата версия, обаче файл със същото име и на същото място, съществува. Даденият файл ще бъде презаписан от нов.',
	'FILES_NOT_MODIFIED'			=> 'Непроменени файлове',
	'FILES_NOT_MODIFIED_EXPLAIN'	=> 'Следните файлове не бяха променени и представляват оригинални файлове на phpBB на тази версия, която искате да обновите.',
	'FILES_UP_TO_DATE'				=> 'Вече обновени файлове',
	'FILES_UP_TO_DATE_EXPLAIN'		=> 'Следните файлове вече съответстват на файловете от новата версия и нямат нужда от обновяване',
	'FILES_VERSION'					=> 'Версия на файловете',
	'TOGGLE_DISPLAY'				=> 'Покажи/скрий списъка с файлове',

	// File updater
	'UPDATE_UPDATING_FILES'	=> 'Обновяване на файловете',

	'UPDATE_FILE_UPDATER_HAS_FAILED'	=> 'Неуспех при обновяване на файл «%1$s». Ще бъде използван файла «%2$s».',
	'UPDATE_FILE_UPDATERS_HAVE_FAILED'	=> 'Неуспех при обновяване на файловете. Възможността за използване на стари файлове липсва.',

	'UPDATE_CONTINUE_UPDATE_PROCESS'	=> 'Продължи процеса на обновяване',
	'UPDATE_RECHECK_UPDATE_FILES'		=> 'Повторна проверка на файловете',
));

// Update database
$lang = array_merge($lang, array(
	'STAGE_UPDATE_DATABASE'		=> 'Обновяване на базата данни',

	'INLINE_UPDATE_SUCCESSFUL'		=> 'Базата данни успешно е обновена.',

	'TASK_UPDATE_EXTENSIONS'	=> 'Обновяване на разширенията',
));

// Converter
$lang = array_merge($lang, array(
	// Common converter messages
	'CONVERT_NOT_EXIST'			=> 'Посоченият конвертор не съществува.',
	'DEV_NO_TEST_FILE'			=> 'В конвертора не е посочена стойността на променливата test_file. Ако сте потребител на този конвертор, съобщете за тази грешка, на автора на конвертора, тъй като тя не следва да се появява. Ако сте автор на конвертора, следва да опроделите името на съществуващия файл на конвертирания форум, за проверка на коректността на пътя към него.',
	'COULD_NOT_FIND_PATH'		=> 'Грешка при намирането на пътя, към стария форум. Проверете настройките и опитайте отново.<br />» Пътят %s бе посочен, като начален.',
	'CONFIG_PHPBB_EMPTY'		=> 'Променливата на конфигурацията на phpBB3 за «%s» е празна.',

	'MAKE_FOLDER_WRITABLE'		=> 'Проверете, дали съществува тази папка и сървъра има права на запис в нея, след което повторете опита:<br />»<strong>%s</strong>.',
	'MAKE_FOLDERS_WRITABLE'		=> 'Проверете, дали съществуват тези папки и сървъра има права на запис в тях, след което повторете опита:<br />»<strong>%s</strong>.',

	'INSTALL_TEST'				=> 'Нова проверка',

	'NO_TABLES_FOUND'			=> 'Таблица не са намерени.',
	'TABLES_MISSING'			=> 'Грешка при намирането на таблица<br />» <strong>%s</strong>.',
	'CHECK_TABLE_PREFIX'		=> 'Проверете коректността на префиксите на таблицита и опитайте отново.',

	// Conversion in progress
	'CONTINUE_CONVERT'			=> 'Продължете конвертирането',
	'CONTINUE_CONVERT_BODY'		=> 'Намерен е предишен опит за конвертиране. Вие можете да започнете ново конвертиране или да продължите предишното',
	'CONVERT_NEW_CONVERSION'	=> 'Ново конвертиране',
	'CONTINUE_OLD_CONVERSION'	=> 'Продължи предишното конвертиране',

	// Start conversion
	'SUB_INTRO'					=> 'Въведение',
	'CONVERT_INTRO'				=> 'Поздравява ви системата за конвертиране на phpBB',
	'CONVERT_INTRO_BODY'		=> 'Тук имате възможност да импортирате данни от други (инсталирани) типове форуми. В долният списък са изброени достъпните в настоящето време модули за конвертиране. Ако в него липсва форума, който искате да конвертирате, моля посетете сайта ни, на който може да има достъпни за сваляне повече модули.',
	'AVAILABLE_CONVERTORS'		=> 'Достъпни конвертори',
	'NO_CONVERTORS'				=> 'Няма достъпни за използвани конвертори.',
	'CONVERT_OPTIONS'			=> 'Параметри',
	'SOFTWARE'					=> 'Тип форум',
	'VERSION'					=> 'Версия',
	'CONVERT'					=> 'Конвертирай',

	// Settings
	'STAGE_SETTINGS'			=> 'Параметри',
	'TABLE_PREFIX_SAME'			=> 'Префикса на таблиците следва да бъде същият, който се използва от конвертираният форум.<br />» Посоченият префикс — %s.',
	'DEFAULT_PREFIX_IS'			=> 'Конвертора не успя да намери таблизите на phpBB2 с посочения префикс. Проверете, дали сте въвели правилните данни от стария форум. Таблиците на форума %1$s имат префикс <strong>%2$s</strong>.',
	'SPECIFY_OPTIONS'			=> 'Определяне на настройките за конвертиране',
	'FORUM_PATH'				=> 'Пътя към форума',
	'FORUM_PATH_EXPLAIN'		=> '<strong>Относителен</strong> път към стария форум от <strong>основната директория на инсталирания phpBB3</strong>.',
	'REFRESH_PAGE'				=> 'Обновявай страницата, за продължаване на конвертирането',
	'REFRESH_PAGE_EXPLAIN'		=> '«Да» означава, че конвертора автоматично ще презарежда страницата, за да продължи конвертирането след приключване на поредния етап. Ако това е вашето първо конвертиране с цел тестиране и проверка за грешки, препоръчваме ви да сложите този параметър на «Не».',

	// Conversion
	'STAGE_IN_PROGRESS'			=> 'Конвертиране',

	'AUTHOR_NOTES'				=> 'Бележки от автора<br />» %s',
	'STARTING_CONVERT'			=> 'Начало на конвертацията',
	'CONFIG_CONVERT'			=> 'Конвертиране на конфигурацията',
	'DONE'						=> 'Готово',
	'PREPROCESS_STEP'			=> 'Изпълнение на предварителната функция/запитвания',
	'FILLING_TABLE'				=> 'Попълване на таблицата <strong>%s</strong>',
	'FILLING_TABLES'			=> 'Попълване на таблиците',
	'DB_ERR_INSERT'				=> 'Грешка при обработване на запитването <code>INSERT</code>.',
	'DB_ERR_LAST'				=> 'Грешка при обработване на <var>query_last</var>.',
	'DB_ERR_QUERY_FIRST'		=> 'Грешка при изпълнение на <var>query_first</var>.',
	'DB_ERR_QUERY_FIRST_TABLE'	=> 'Грешка при изпълнение на <var>query_first</var>, %s («%s»).',
	'DB_ERR_SELECT'				=> 'Грешка при обработване на запитването <code>SELECT</code>.',
	'STEP_PERCENT_COMPLETED'	=> 'Етап <strong>%d</strong> от <strong>%d</strong>',
	'FINAL_STEP'				=> 'Финален етап',
	'SYNC_FORUMS'				=> 'Синхронизиране на форумите',
	'SYNC_POST_COUNT'			=> 'Синхронизиране на количеството съобщения',
	'SYNC_POST_COUNT_ID'		=> 'Синхронизиране на количеството съобщения с <var>entry</var> от %1$s до %2$s',
	'SYNC_TOPICS'				=> 'Синхронизиране на темите',
	'SYNC_TOPIC_ID'				=> 'Синхронизиране на темите с <var>topic_id</var> от %1$s до %2$s.',
	'PROCESS_LAST'				=> 'Изпълнение на финални операции',
	'UPDATE_TOPICS_POSTED'		=> 'Създаване на списък с темите, в които е писал потребителя',
	'UPDATE_TOPICS_POSTED_ERR'	=> 'Станала е грешка при създаването на списъка с теми, в които е писал потребителя. Вие можете да повторите опита да изпълните този етап в администраторския раздел, след приключване на процеса за преобразуване.',
	'CONTINUE_LAST'				=> 'Продължи изпълнението на финалните операции',
	'CLEAN_VERIFY'				=> 'Изчистване и проверка на финалната структура',
	'NOT_UNDERSTAND'			=> 'Грешка при анализ на съобщението %s #%d, таблица %s («%s»)',
	'NAMING_CONFLICT'			=> 'Конфликт на имената: и двете имена %s и %s се явяват псевдоними<br /><br />%s',

	// Finish conversion
	'CONVERT_COMPLETE'			=> 'Конвертирането приключи',
	'CONVERT_COMPLETE_EXPLAIN'	=> 'Вие успешно конвертирахте вашият форум в формата phpBB 3.2. Вие можете <a href="../">да влезете на форума</a>. Проверете, дали всички настройки са успешно преместени, преди да пуснете форума, като изтриете папката install. Помнете, че помощната информация за използване на phpBB може да намерите в интернет, като се запознаете с<a href="https://www.phpbb.com/support/docs/en/3.2/ug/">документацията</a>, също така на<a href="https://www.phpbb.com/phpBB/viewforum.php?f=466">форума за поддръжка на phpBB Group</a>.',

	'CONV_ERROR_ATTACH_FTP_DIR'			=> 'На стария форум е включено качване на прикачени файлове по FTP. Изключете тази функция и се убедете, в коректността на посочената папка за качване, след което копирайте всички файлове в тази нова папка, достъпна през интернет. След което пуснете отново конвертора.',
	'CONV_ERROR_CONFIG_EMPTY'			=> 'Липсва достъпна информация за конфигурацията за конвертиране.',
	'CONV_ERROR_FORUM_ACCESS'			=> 'Грешка при опит за получаване на информация за локалните права за достъп.',
	'CONV_ERROR_GET_CATEGORIES'			=> 'Грешка при опит за получаване на информация за получаване на информация за категориите.',
	'CONV_ERROR_GET_CONFIG'				=> 'Грешка при опит за получаване на информация за конфигурацията на форума.',
	'CONV_ERROR_COULD_NOT_READ'			=> 'Грешка при опит за получаване на достъп или четене на «%s».',
	'CONV_ERROR_GROUP_ACCESS'			=> 'Грешка при опит за получаване на информация за правата на групите.',
	'CONV_ERROR_INCONSISTENT_GROUPS'	=> 'Намерено е нарушение на целостта на таблиците на групите в add_bots(). Необходимо е да бъдат всички специални групи, ръчно.',
	'CONV_ERROR_INSERT_BOT'				=> 'Грешка при опит за добавяне на бот към потребителите.',
	'CONV_ERROR_INSERT_BOTGROUP'		=> 'Грешка при опит за добавяне на бот в таблицата за ботове.',
	'CONV_ERROR_INSERT_USER_GROUP'		=> 'Грешка при опит за добавяне на потребител в таблицата user_group.',
	'CONV_ERROR_MESSAGE_PARSER'			=> 'Грешка при обработване на съобщението',
	'CONV_ERROR_NO_AVATAR_PATH'			=> 'Забележки за разработчика: следва да посочите $convertor[\'avatar_path\'] за използване %s.',
	'CONV_ERROR_NO_FORUM_PATH'			=> 'Не е посочен относителният път към началния форум.',
	'CONV_ERROR_NO_GALLERY_PATH'		=> 'Забележка за разработчика: трябва да посочите $convertor[\'avatar_gallery_path\'] за да използвате %s.',
	'CONV_ERROR_NO_GROUP'				=> 'Грешка при намирането на група «%1$s» в %2$s.',
	'CONV_ERROR_NO_RANKS_PATH'			=> 'Забележка за разработчика: трябва да посочите $convertor[\'ranks_path\'] за да използвате %s.',
	'CONV_ERROR_NO_SMILIES_PATH'		=> 'Забележка за разработчика: трябва да посочите $convertor[\'smilies_path\'] за да използвате %s.',
	'CONV_ERROR_NO_UPLOAD_DIR'			=> 'Забележка за разработчика: трябва да посочите  $convertor[\'upload_path\'] за да използвате %s.',
	'CONV_ERROR_PERM_SETTING'			=> 'Грешка при опит за добавяне/обновяване на настройките за правата на достъп.',
	'CONV_ERROR_PM_COUNT'				=> 'Грешка при изчисляването на количеството лични съобщения в папката.',
	'CONV_ERROR_REPLACE_CATEGORY'		=> 'Грешка при добавянето на форум, вместо стара категория.',
	'CONV_ERROR_REPLACE_FORUM'			=> 'Грешка при добавяне на нов форум, вместо стар форум.',
	'CONV_ERROR_USER_ACCESS'			=> 'Грешка при получаване на данните на достъп на потребителя.',
	'CONV_ERROR_WRONG_GROUP'			=> 'Намерена е грешна група «%1$s» в %2$s.',
	'CONV_OPTIONS_BODY'					=> 'На тази страница ви се предлага, да въведете данните, необходими за достъп до началния форум. Посочете информация за базата данни, на вашия стар форум; конвертора няма да внася никакви промени в нея. За да осигурите пълно конвертиране, началния форум следва да бъде изключен.',
	'CONV_SAVED_MESSAGES'				=> 'Запазени съобщения',

	'PRE_CONVERT_COMPLETE'			=> 'Всички етапи за подготовка на конвертирането са завършени. Сега може да започнете процеса на конвертиране. Имайте предвид, че може да ви се наложи ръчно да направите някой действия и настройки. След конвертирането, задължително проверете назначените права за достъп, възстановете индекса на търсене, който не е подлежал на конвертиране, ако е необходимо, също така проверете, че всички файлове са успешно копирани (например, автарите и емот иконите).',
));
