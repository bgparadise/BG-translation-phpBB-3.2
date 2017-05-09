<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
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

$lang = array_merge($lang, array(
	'ACP_PERMISSIONS_EXPLAIN'	=> '
		<p>Правата са групирани в четири групи:</p>

		<h2>Глобални права</h2>
		<p>Тези се използват за контрол на глобално ниво. Разделени са на Потребителски права, Права на групи, Администраторски и Модераторски права.</p>

		<h2>Форум-базирани права</h2>
        <p>Използват се за контрол на форумите. Разделени са на Форум права, Форум модератори, Потребителски форум права и Групови форум права. Повече информация можете да откриете тук <a href="https://www.phpbb.com/support/documentation/3.0/quickstart/quick_permissions.html">Глава 1.5 - Quick Start Guide</a></p>

		<h2>Роли</h2>
		<p>Тези се използват за създавате на различни пакети от права за различни типове.</p>

		<h2>Маски</h2>
		<p>Използват се за тестване на правата приложени на Потребители, Модератори (Локални и Глобални), Администратори или Форуми.</p>
	
		<br />
		
		
	',

	'ACL_NEVER'				=> 'Никога',
	'ACL_SET'				=> 'Права',
	'ACL_SET_EXPLAIN'		=> 'Правата са базирани на проста <samp>Да</samp>/<samp>Не</samp> система. Ако зададете опция на <samp>Никога</samp> за потребител или група, всяка друга стойност ще бъде заместена. Всички маркирани обекти ще копират правата от дефинираните от Вас.',
	'ACL_SETTING'			=> 'Настройки',

	'ACL_TYPE_A_'			=> 'Административни права',
	'ACL_TYPE_F_'			=> 'Форум права',
	'ACL_TYPE_M_'			=> 'Модераторски права',
	'ACL_TYPE_U_'			=> 'Потребителски права',

	'ACL_TYPE_GLOBAL_A_'	=> 'Административни права',
	'ACL_TYPE_GLOBAL_U_'	=> 'Потребителски права',
	'ACL_TYPE_GLOBAL_M_'	=> 'Права на глобални модератори',
	'ACL_TYPE_LOCAL_M_'		=> 'Форум модератори права',
	'ACL_TYPE_LOCAL_F_'		=> 'Форум права',
	
	'ACL_NO'				=> 'Не',
	'ACL_VIEW'				=> 'Виж права',
	'ACL_VIEW_EXPLAIN'		=> 'От тук можете да видите правата в действие. Червените показват, че потребителя/групата няма права, а зелените че има права.',
	'ACL_YES'				=> 'Да',

	'ACP_ADMINISTRATORS_EXPLAIN'				=> 'От тук можете да определите администраторските права на потребители или групи. Всички потребители с администраторски права имат достъп до админ панела.',
	'ACP_FORUM_MODERATORS_EXPLAIN'				=> 'Тук можете да определите потребител или група като форум модератори. За да определите потребител за достъп до форуми, трябва да дефинирате глобални модеративни права.',
	'ACP_FORUM_PERMISSIONS_EXPLAIN'				=> 'Тук можете да промените потребителите и групите, които имат достъп до форумите. За да определите модератори или да дефинирате администратори използвайте подходящата страница.',
	'ACP_FORUM_PERMISSIONS_COPY_EXPLAIN'		=> 'От тук можете да копирате форум правата от един форум на друг.',
	'ACP_GLOBAL_MODERATORS_EXPLAIN'				=> 'От тук можете да определите правата на глобалните модератори за потребители и групи. Глобалните модератори са като обикновените с изключение на това че имат достъп до всеки форум.',
	'ACP_GROUPS_FORUM_PERMISSIONS_EXPLAIN'		=> 'Тук можете да определите форум права за групи.',
	'ACP_GROUPS_PERMISSIONS_EXPLAIN'			=> 'От тук можете да определите глобалните права за групи - потребителски права, глобалните модераторски права и администраторските права. Потребителските права включват опции като аватари, изпращане на лични съобщения и други; глобалните модераторски права - одобряване на мнение, управление на теми, управление на банове и други; администраторските права - промяна на права, дефиниране на BBCodes, управление на форуми и други.',
	'ACP_ADMIN_ROLES_EXPLAIN'					=> 'Тук можете да управлявате ролите за административните права.',
	'ACP_FORUM_ROLES_EXPLAIN'					=> 'Тук можете да управлявате ролите за форум правата.',
	'ACP_MOD_ROLES_EXPLAIN'						=> 'Тук можете да управлявате ролите за модераторските права.',
	'ACP_USER_ROLES_EXPLAIN'					=> 'Тук можете да управлявате ролите за потребителските права.',
	'ACP_USERS_FORUM_PERMISSIONS_EXPLAIN'		=> 'Тук можете да определите форум права за потребители.',
	'ACP_USERS_PERMISSIONS_EXPLAIN'				=> 'Тук можете да определяте глобални права на потребители - потребителски права, глобални модераторски права и администраторски права. Потребителските права включват опции като промяна на аватар, изпращане на лични съобщения и други; глобалните модераторски права - одобряване на мнения, управляване на теми и други; администраторските права - промяна на права, дефиниране на BBCodes, управление на форуми и други.',
	'ACP_VIEW_ADMIN_PERMISSIONS_EXPLAIN'		=> 'Тук можете да прегледате ефективните административни права определени за избраните потребители/групи',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS_EXPLAIN'	=> 'Тук можете да прегледате глобалните модераторски права определени за избраните потребители/групи',
	'ACP_VIEW_FORUM_PERMISSIONS_EXPLAIN'		=> 'Тук можете да прегледате форум правата определени за избраните потребители/групи',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS_EXPLAIN'	=> 'Тук можете да прегледате форум модераторските права определени за избраните потребители/групи и форуми',
	'ACP_VIEW_USER_PERMISSIONS_EXPLAIN'			=> 'Тук можете да прегледате ефективните потребителски права определени за избраните потребители/групи',

	'ADD_GROUPS'				=> 'Добави групи',
	'ADD_PERMISSIONS'			=> 'Добави права',
	'ADD_USERS'					=> 'Добави потребители',
	'ADVANCED_PERMISSIONS'		=> 'Допълнителни права',
	'ALL_GROUPS'				=> 'Избери всички групи',
	'ALL_NEVER'					=> 'Всички <samp>Никога</samp>',
	'ALL_NO'					=> 'Всички <samp>Не</samp>',
	'ALL_USERS'					=> 'Избери всички потребители',
	'ALL_YES'					=> 'Всички <samp>Да</samp>',
	'APPLY_ALL_PERMISSIONS'		=> 'Приложи всички права',
	'APPLY_PERMISSIONS'			=> 'Приложи правата',
	'APPLY_PERMISSIONS_EXPLAIN'	=> '',
	'AUTH_UPDATED'				=> 'Правата са обновени.',

	'COPY_PERMISSIONS_CONFIRM'				=> 'Сигурни ли сте, че искате да продължите операцията? Това ще замести съществуващите досега права.',
	'COPY_PERMISSIONS_FORUM_FROM_EXPLAIN'	=> 'Форума-източник от който искате да копирате правата.',
	'COPY_PERMISSIONS_FORUM_TO_EXPLAIN'		=> 'Форума, на който искате да приложите копираните права.',
	'COPY_PERMISSIONS_FROM'					=> 'Копирай правата от',
	'COPY_PERMISSIONS_TO'					=> 'Приложи правата на',

	'CREATE_ROLE'				=> 'Създай роля',
	'CREATE_ROLE_FROM'			=> 'Използвай настройките от…',
	'CUSTOM'					=> 'По избор…',

	'DEFAULT'					=> 'По подразбиране',
	'DELETE_ROLE'				=> 'Изтрий роля',
	'DELETE_ROLE_CONFIRM'		=> 'Сигурен ли си, че искаш да премахнеш тази роля?',
	'DISPLAY_ROLE_ITEMS'		=> 'Виж елементите използвани в тази роля',

	'EDIT_PERMISSIONS'			=> 'Промени правата',
	'EDIT_ROLE'					=> 'Промени ролята',

	'GROUPS_NOT_ASSIGNED'		=> 'Няма определена група за ролята',

	'LOOK_UP_GROUP'				=> 'Търси потребителска група',
	'LOOK_UP_USER'				=> 'Търси потребител',

	'MANAGE_GROUPS'		=> 'Управлявай групи',
	'MANAGE_USERS'		=> 'Управлявай потребители',

	'NO_AUTH_SETTING_FOUND'		=> 'Няма дефинирани настройки на правата.',
	'NO_ROLE_ASSIGNED'			=> 'Няма определена роля…',
	'NO_ROLE_ASSIGNED_EXPLAIN'	=> '',
	'NO_ROLE_AVAILABLE'			=> 'Няма свободна роля',
	'NO_ROLE_NAME_SPECIFIED'	=> 'Въведете име на ролята.',
	'NO_ROLE_SELECTED'			=> 'Ролята не може да бъде намерена.',
	'NO_USER_GROUP_SELECTED'	=> 'Не сте избрали потребител или група.',

	'ONLY_FORUM_DEFINED'	=> 'Дефинирали сте само форуми. Трябва да изберете поне едни потребител или група.',

	'PERMISSION_APPLIED_TO_ALL'		=> 'Правата и ролите ще бъдат приложени на всички маркирани обекти',
	'PLUS_SUBFORUMS'				=> '+Подфоруми',

	'REMOVE_PERMISSIONS'			=> 'Изтрий правата',
	'REMOVE_ROLE'					=> 'Изтрий ролята',
	'RESULTING_PERMISSION'         => 'Получаване на правило',
	'ROLE'							=> 'Роля',
	'ROLE_ADD_SUCCESS'				=> 'Ролята е успешно добавена.',
	'ROLE_ASSIGNED_TO'				=> 'Потребители/Групи определени към %s',
	'ROLE_DELETED'					=> 'Ролята е успешно премахната.',
	'ROLE_DESCRIPTION'				=> 'Описание',

	'ROLE_ADMIN_FORUM'			=> 'Форум админ',
	'ROLE_ADMIN_FULL'			=> 'Пълен админ',
	'ROLE_ADMIN_STANDARD'		=> 'Стандартен админ',
	'ROLE_ADMIN_USERGROUP'		=> 'Потребителски и групов админ',
	'ROLE_FORUM_BOT'			=> 'Бот достъп',
	'ROLE_FORUM_FULL'			=> 'Пълен достъп',
	'ROLE_FORUM_LIMITED'		=> 'Ограничен достъп',
	'ROLE_FORUM_LIMITED_POLLS'	=> 'Ограничен достъп + Анкети',
	'ROLE_FORUM_NOACCESS'		=> 'Без достъп',
	'ROLE_FORUM_ONQUEUE'		=> 'На модераторската опашка',
	'ROLE_FORUM_POLLS'			=> 'Стандартен достъп + Анкети',
	'ROLE_FORUM_READONLY'		=> 'Само четене',
	'ROLE_FORUM_STANDARD'		=> 'Стандартен достъп',
	'ROLE_FORUM_NEW_MEMBER'		=> 'Достъп за новорегистрирани потребители',
	'ROLE_MOD_FULL'				=> 'Пълен модератор',
	'ROLE_MOD_QUEUE'			=> 'Опашка модератор',
	'ROLE_MOD_SIMPLE'			=> 'Прост модератор',
	'ROLE_MOD_STANDARD'			=> 'Стандартен модератора',
	'ROLE_USER_FULL'			=> 'Всички функции',
	'ROLE_USER_LIMITED'			=> 'Ограничени функции',
	'ROLE_USER_NOAVATAR'		=> 'Без аватар',
	'ROLE_USER_NOPM'			=> 'Без лични съобщения',
	'ROLE_USER_STANDARD'		=> 'Стандартни функции',
	'ROLE_USER_NEW_MEMBER'		=> 'Опции за новорегистрирани потребители',

	'ROLE_DESCRIPTION_ADMIN_FORUM'			=> 'Има достъп до управлението на форума и настройките на форум правата.',
	'ROLE_DESCRIPTION_ADMIN_FULL'			=> 'Има достъп до всички администраторски функции на този форум.<br />Не се препоръчва.',
	'ROLE_DESCRIPTION_ADMIN_STANDARD'		=> 'Има достъп до повечето администраторски функции, но не може да използва сървърните и системно базираните инструменти. ',
	'ROLE_DESCRIPTION_ADMIN_USERGROUP'		=> 'Може да управлява групи и потребители; Може да променя права, настройки, банове и рангове.',
	'ROLE_DESCRIPTION_FORUM_BOT'			=> 'Ролята е препоръчителна за ботове и паяци.',
	'ROLE_DESCRIPTION_FORUM_FULL'			=> 'Може да използва всички функции на форума, включително публикуване на Важни теми и Закачени теми. Може също така да игнорира flood лимита.<br />Не се препоръчва за нормалните потребители.',
	'ROLE_DESCRIPTION_FORUM_LIMITED'		=> 'Може да използва някои функции на форума, не не може да прикачва файлове и да използва икони в мнение.',
	'ROLE_DESCRIPTION_FORUM_LIMITED_POLLS'	=> 'Ограничен достъп, но може да създава анкети.',
	'ROLE_DESCRIPTION_FORUM_NOACCESS'		=> 'Може да вижда форума, но няма достъп до него.',
	'ROLE_DESCRIPTION_FORUM_ONQUEUE'		=> 'Може да използва повечето форум функции, включително прикачените файлове, но мненията и темите трябва да бъдат одобрени от модератор.',
	'ROLE_DESCRIPTION_FORUM_POLLS'			=> 'Като стандартния достъп, но може да създава анкети',
	'ROLE_DESCRIPTION_FORUM_READONLY'		=> 'Може да чете форума, но не може да пише в него.',
	'ROLE_DESCRIPTION_FORUM_STANDARD'		=> 'Може да използва повечето функции на форума включително и прикачените файлове, но не може да заключва или изтрива собствените си теми и не може да създава анкети.',
	'ROLE_DESCRIPTION_FORUM_NEW_MEMBER'		=> 'Става въпрос за групата на новорегистрираните потребители.',
	'ROLE_DESCRIPTION_MOD_FULL'				=> 'Може да използва модераторските функции включително банване.',
	'ROLE_DESCRIPTION_MOD_QUEUE'			=> 'Може да използва Модераторската опашка за да одобрява и променя мнение, но нищо друго.',
	'ROLE_DESCRIPTION_MOD_SIMPLE'			=> 'Може да използва базовите действия за теми. Не може да добавя предупреждения или да използва модераторската опашка.',
	'ROLE_DESCRIPTION_MOD_STANDARD'			=> 'Може да използва повечето модераторски инструмени, но не може да банва потребители или да сменя автор на мнение.',
	'ROLE_DESCRIPTION_USER_FULL'			=> 'Може да използва всички форум функции за потребители, включително промяна на потребителско име и игнориране на flood ограничението.<br />Не се препоръчва.',
	'ROLE_DESCRIPTION_USER_LIMITED'			=> 'Има достъп до някои от потребителските функции. Прикачени файлове, email и моменталните съобщения не се позволяват.',
	'ROLE_DESCRIPTION_USER_NOAVATAR'		=> 'Ограничени функции, не може да използва аватар функцията.',
	'ROLE_DESCRIPTION_USER_NOPM'			=> 'Ограничени функции, не може да използва личните съобщения.',
	'ROLE_DESCRIPTION_USER_STANDARD'		=> 'Има достъп до повечето, но не всички потребителски функции. Не може да променя потребителско име или да игнорира flood ограничението.',
	'ROLE_DESCRIPTION_USER_NEW_MEMBER'		=> 'Става въпрос за специалната група на новорегистрираните потребители.',

	'ROLE_DESCRIPTION_EXPLAIN'		=> 'Можете да въведете кратко обяснение какво прави всяка от ролите. Текста въведен тук ще се показва на началната страница за права.',
	'ROLE_DESCRIPTION_LONG'			=> 'Описанието на ролята е прекалено дълго, има ограничение от 4000 знака.',
	'ROLE_DETAILS'					=> 'Детайли',
	'ROLE_EDIT_SUCCESS'				=> 'Ролята е успешно променена.',
	'ROLE_NAME'						=> 'Име на ролята',
	'ROLE_NAME_ALREADY_EXIST'		=> 'Ролята <strong>%s</strong> вече съществува.',
	'ROLE_NOT_ASSIGNED'				=> 'Ролята все още не е определена.',

	'SELECTED_FORUM_NOT_EXIST'		=> 'Избрания форум(и) не съществува.',
	'SELECTED_GROUP_NOT_EXIST'		=> 'Избраната група(и) не съществува.',
	'SELECTED_USER_NOT_EXIST'		=> 'Избрания потребител(и) не съществува.',
	'SELECT_FORUM_SUBFORUM_EXPLAIN'	=> 'Избрания форум ще включи всички подфоруми',
	'SELECT_ROLE'					=> 'Избери роля…',
	'SELECT_TYPE'					=> 'Избери тип',
	'SET_PERMISSIONS'				=> 'Задай права',
	'SET_ROLE_PERMISSIONS'			=> 'Задай права на ролята',
	'SET_USERS_PERMISSIONS'			=> 'Задай права на потребител',
	'SET_USERS_FORUM_PERMISSIONS'	=> 'Задай права на форум',

	'TRACE_DEFAULT'					=> 'По подразбиране всичко е зададено като <samp>Не</samp> за да може да бъде променяно.',
	'TRACE_FOR'						=> 'Чертай за',
	'TRACE_GLOBAL_SETTING'			=> '%s (глобално)',
	'TRACE_GROUP_NEVER_TOTAL_NEVER'	=> 'Правата на тази група са зададени на <samp>Никога</samp>.',
	'TRACE_GROUP_NEVER_TOTAL_NEVER_LOCAL'   => 'Правата на тази група са зададени на <samp>Никога</samp>, стария резултат се запазва.',
	'TRACE_GROUP_NEVER_TOTAL_NO'	=> 'Правата на тази група са зададени на <samp>Никога</samp> което става новата обща стойност.',
	'TRACE_GROUP_NEVER_TOTAL_NO_LOCAL'   => 'Правата на тази група са зададени на <samp>Никога</samp>, Никога е новата стойност.',
	'TRACE_GROUP_NEVER_TOTAL_YES'	=> 'Правата на тази група са зададени на <samp>Никога</samp> което заменя <samp>Да</samp> на <samp>Никога</samp> за този потребител.',
	'TRACE_GROUP_NEVER_TOTAL_YES_LOCAL'   => 'Правата на тази група са зададени на <samp>Никога</samp> което замества <samp>Да</samp> на <samp>Никога</samp> за този потребител.',
	'TRACE_GROUP_NO'				=> 'Правото е <samp>Не</samp> за тази група, старата стойност е запазена.',
	'TRACE_GROUP_NO_LOCAL'         => 'Правилото е <samp>Не</samp> за тази група, старата стойност се запазва.',
	'TRACE_GROUP_YES_TOTAL_NEVER_LOCAL'   => 'Правата на тази група са зададени на <samp>Да</samp>, но <samp>Никога</samp> не може да бъде заместено.',
	'TRACE_GROUP_YES_TOTAL_NEVER'	=> 'Правата на тази група са зададени на <samp>Да</samp>, но <samp>Никога</samp> не може да бъде заместено.',
	'TRACE_GROUP_YES_TOTAL_NO_LOCAL'   => 'Правата на тази група са зададени на <samp>Да</samp>, което става новата стойност.',
	'TRACE_GROUP_YES_TOTAL_NO'		=> 'Правата на тази група са зададени на <samp>Да</samp>, което става новата стойност.',
	'TRACE_GROUP_YES_TOTAL_YES_LOCAL'   => 'Правата на тази група са зададени на <samp>Да</samp>, няма промени, старата стойност е запазена.',
	'TRACE_GROUP_YES_TOTAL_YES'		=> 'Правата на тази група са зададени на <samp>Да</samp>, резултата е запазен.',
	'TRACE_PERMISSION'				=> 'Проследяване на права - %s',
	'TRACE_RESULT'               => 'Резултат от проследяване',
	'TRACE_SETTING'					=> 'Настройки на проследяване',

	'TRACE_USER_GLOBAL_YES_TOTAL_YES'		=> 'Форум независимите права са зададени на <samp>Да</samp>, старите също, така че резултата е запазен. %sПроследи глобалните права%s',
	'TRACE_USER_GLOBAL_YES_TOTAL_NEVER'		=> 'Форум независимите права са зададени на <samp>Да</samp>, което замества старите <samp>Никога</samp>. %sПроследи глобалните права%s',
	'TRACE_USER_GLOBAL_NEVER_TOTAL_KEPT'	=> 'Форум независимите права са зададени на <samp>Никога</samp> което не влияе на локалните права. %sПроследи глобалните права%s',

	'TRACE_USER_FOUNDER'					=> 'Потребителят е основател, администраторските права винаги са <samp>ВКЛЮЧЕНИ</samp>.',
	'TRACE_USER_KEPT'						=> 'Потребителските права са задедени на <samp>Не</samp> старите права се запазват.',
	'TRACE_USER_KEPT_LOCAL'					=> 'Потребителските права са задедени на <samp>Не</samp> старите права също, няма промени.',
	'TRACE_USER_NEVER_TOTAL_NEVER'			=> 'Потребителските права са задедени на <samp>НИКОГА</samp> е главната стойност е <samp>НИКОГА</samp>, so nothing is changed.',
	'TRACE_USER_NEVER_TOTAL_NEVER_LOCAL'	=> 'Потребителските права са зададени на <samp>Никога</samp> старите права също, няма промени.',
	'TRACE_USER_NEVER_TOTAL_NO'				=> 'Потребителските права са задедени на <samp>НИКОГА</samp> което става главна стойност.',
	'TRACE_USER_NEVER_TOTAL_NO_LOCAL'		=> 'Потребителските права са зададени на <samp>Никога</samp> което става новата стойност, защото старата беше Не.',
	'TRACE_USER_NEVER_TOTAL_YES'			=> 'Потребителските права са задедени на <samp>Никога</samp> е замества старата <samp>Да</samp>.',
	'TRACE_USER_NEVER_TOTAL_YES_LOCAL'		=> 'Потребителските права са зададени на <samp>Никога</samp> което става новата стойност, защото старата беше Да.',
	'TRACE_USER_NO_TOTAL_NO'				=> 'Потребителските права са задедени на <samp>Не</samp> и главната стойност е Не, затова става по подразбиране на <samp>Никога</samp>.',
	'TRACE_USER_NO_TOTAL_NO_LOCAL'			=> 'Потребителските права са задедени на <samp>Не</samp>, връща се стойността по подразбиране <samp>Никога</samp>.',
	'TRACE_USER_YES_TOTAL_NEVER'			=> 'Потребителските права са задедени на <samp>Да</samp> но главната стойност <samp>НИКОГА</samp> не може да бъде заместена.',
	'TRACE_USER_YES_TOTAL_NEVER_LOCAL'		=> 'Потребителските права са задедени на <samp>Да</samp>, но стойността <samp>Никога</samp> не може да бъде заместена.',
	'TRACE_USER_YES_TOTAL_NO'				=> 'Потребителските права са задедени на <samp>Да</samp> което става главна стойност, защото преди беше на <samp>Не</samp>.',
	'TRACE_USER_YES_TOTAL_NO_LOCAL'			=> 'Потребителските права са задедени на <samp>Да</samp> което става новата стойност.',
	'TRACE_USER_YES_TOTAL_YES'				=> 'Потребителските права са задедени на <samp>Да</samp> и главната стойност е <samp>Да</samp> - нищо не е променено.',
	'TRACE_USER_YES_TOTAL_YES_LOCAL'		=> 'Потребителските права са задедени на <samp>Да</samp> старите права също, няма промени.',
	'TRACE_WHO'								=> 'Кой',
	'TRACE_TOTAL'							=> 'Общо',

	'USERS_NOT_ASSIGNED'			=> 'Няма потребители определени към тази роля',
	'USER_IS_MEMBER_OF_DEFAULT'		=> 'е потребител на групата',
	'USER_IS_MEMBER_OF_CUSTOM'		=> 'е потребител на групата',

	'VIEW_ASSIGNED_ITEMS'	=> 'Виж определените елементи',
	'VIEW_LOCAL_PERMS'		=> 'Локални права',
	'VIEW_GLOBAL_PERMS'		=> 'Глобални права',
	'VIEW_PERMISSIONS'		=> 'Виж правата',

	'WRONG_PERMISSION_TYPE'	=> 'Избран е грешен тип на правата.',
	'WRONG_PERMISSION_SETTING_FORMAT'	=> 'Настройките на правата са грешни, phpBB не може да ги разчете.',
));
