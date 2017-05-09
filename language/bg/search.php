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

$lang = array_merge($lang, array(
    'ALL_AVAILABLE'          => 'Всички свободни',
    'ALL_RESULTS'            => 'Всички резултати',

    'DISPLAY_RESULTS'        => 'Покажи резултатите като',

	'FOUND_SEARCH_MATCHES'		=> array(
		1	=> 'Търсенето върна %d резултат',
		2	=> 'Търсенето върна %d резултата',
		3	=> 'Търсенето върна %d резултата',
	),
	'FOUND_MORE_SEARCH_MATCHES'	=> array(
		1	=> 'Търсенето върна повече от %d резултат',
		2	=> 'Търсенето върна повече от %d резултата',
		3	=> 'Търсенето върна повече от %d резултата',
	),

    'GLOBAL'                => 'Съобщение',

    'IGNORED_TERMS'            => 'Игнорирани',
    'IGNORED_TERMS_EXPLAIN'    => 'Посочените думи са игнорирани: <strong>%s</strong>',

    'JUMP_TO_POST'            => 'Виж мнението',
	
	'LOGIN_EXPLAIN_EGOSEARCH'   => 'Трябва да се регистрирате и да влезете в акаунта си.',
	'LOGIN_EXPLAIN_UNREADSEARCH'=> 'Администратора изисква да сте регистриран и да сте влязъл в акаунта си за да преглеждате непрочетените съобщения.',
	'LOGIN_EXPLAIN_NEWPOSTS'   => 'Администратора изисква да сте регистриран и да сте влязъл в акаунта си за да преглеждате новите мнения от последното ви посещение.',
	
	'MAX_NUM_SEARCH_KEYWORDS_REFINE'  => array(
		1	=> 'Избрали сте прекалено много думи за търсене. Не въвеждайте повече от %1$d дума.',
		2	=> 'Избрали сте прекалено много думи за търсене. Не въвеждайте повече от %1$d думи.',
		3	=> 'Избрали сте прекалено много думи за търсене. Не въвеждайте повече от %1$d думи.',
	),

    'NO_KEYWORDS'            => 'Вие трябва да въведете поне една дума за търсене. Всяка дума трябва да съдържа най-малко %d букви и не трябва да надхвърля %d думи.',
    'NO_RECENT_SEARCHES'    => 'Няма извършени търсения напоследък',
    'NO_SEARCH'                => 'Вие нямате право да използвате търсещата машина.',
    'NO_SEARCH_RESULTS'        => 'Нищо не е намерено.',
	'NO_SEARCH_LOAD'		=> 'За съжаление търсенето в момента е недостъпно. Сървъра е претоварен. Моля опитайте по-късно.',
	'NO_SEARCH_TIME'		=> array(
		1 => 'Вие не можете да търсите в момента, моля опитайте след няколко минути.',
		2 => 'Вие не можете да търсите в момента, моля опитайте след няколко минути.',
		3 => 'Вие не можете да търсите в момента, моля опитайте след няколко минути.',
	),
	'NO_SEARCH_UNREADS'      => 'Търсенето за непрочетени мнения е изключено в този форум.',
    'WORD_IN_NO_POST'        => 'Не е намерено мнение, защото думата <strong>%s</strong> не се съдържа в никъде.',
    'WORDS_IN_NO_POST'        => 'Не са намерени мнения, защото думата <strong>%s</strong> не се съдържа никъде.',

    'POST_CHARACTERS'        => 'знака на мнението',
	'PHRASE_SEARCH_DISABLED'	=> 'Търсене с точно съвпадение не се поддържа на този форум.',

    'RECENT_SEARCHES'        => 'Предишни търсения',
    'RESULT_DAYS'            => 'Лимитирай резултатите',
    'RESULT_SORT'            => 'Сортирай по',
    'RETURN_FIRST'            => 'Върни първите',
	'GO_TO_SEARCH_ADV'	=> 'Върни към разширено търсене',

    'SEARCHED_FOR'                => 'Търси термин',
    'SEARCHED_TOPIC'            => 'Търсена тема',
	'SEARCHED_QUERY'			=> 'Заявка',
    'SEARCH_ALL_TERMS'            => 'Търси за коя да е от въведените думи',
    'SEARCH_ANY_TERMS'            => 'Търси за всички въведени думи',
    'SEARCH_AUTHOR'                => 'Търси по автор',
    'SEARCH_AUTHOR_EXPLAIN'        => 'Можете да ползвайте * като маска.',
    'SEARCH_FIRST_POST'            => 'Първото мнение на тема',
    'SEARCH_FORUMS'                => 'Търси във форуми',
    'SEARCH_FORUMS_EXPLAIN'        => 'Избери форум или форуми в които искаш да търсиш. За да търсите и в под форумите трябва да маркирате "търси в под форуми".',
    'SEARCH_IN_RESULTS'            => 'Търси в резултатите',
    'SEARCH_KEYWORDS_EXPLAIN'    => 'Сложи <strong>+</strong> пред думата, която искаш да бъде намерена и <strong>-</strong> пред думата, която не искаш да бъде намерена. Сложи лист от думи разделени с <strong>|</strong> в скоби, ако само една от думите трябва да бъде намерена. Можете да ползвайте * като маска.',
    'SEARCH_MSG_ONLY'            => 'Мнения',
    'SEARCH_OPTIONS'            => 'Настройки',
    'SEARCH_QUERY'                => 'Запитване',
    'SEARCH_SUBFORUMS'            => 'Търсене в под форуми',
    'SEARCH_TITLE_MSG'            => 'Заглавия и мнения',
    'SEARCH_TITLE_ONLY'            => 'Заглавия на теми',
    'SEARCH_WITHIN'                => 'Търси в',
    'SORT_ASCENDING'            => 'Възходящ',
    'SORT_AUTHOR'                => 'Автор',
    'SORT_DESCENDING'            => 'Низходящ',
    'SORT_FORUM'                => 'Форум',
    'SORT_POST_SUBJECT'            => 'Заглавие',
    'SORT_TIME'                    => 'Време',
	'SPHINX_SEARCH_FAILED'		=> 'Грешка при търсене: %s',
	'SPHINX_SEARCH_FAILED_LOG'	=> 'За съжаление търсенето не може да бъде осъществено. За повече информация вижте лога.',

		'TOO_FEW_AUTHOR_CHARS'	=> array(
		1	=> 'Вие трябва да въведете поне %d за име на автора.',
		2	=> 'Вие трябва да въведете поне %d за име на автора.',
		3	=> 'Вие трябва да въведете поне %d за име на автора.',
	),
));