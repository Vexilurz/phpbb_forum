<?php
/**
*
* acp_permissions [Russian]
*
* @package language
* @version $Id$
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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
	'ACP_PERMISSIONS_EXPLAIN'		=> '
<p>Права доступа чрезвычайно детализированы и сгруппированы в четыре основных раздела:</p>

<h2>Глобальные права доступа</h2>
<p>Эти права используются для управления доступом на глобальном уровне и применяются ко всему форуму в целом. Далее они разделены на права пользователей, групп, администраторов и главных модераторов.</p>

<h2>Локальные права доступа</h2>
<p>Эти права используются для управления доступом на уровне форумов. Далее они разделены на Доступ к форумам, Модераторы форумов, Форумные права пользователей, Форумные права групп.</p>

<h2>Роли</h2>
<p>Они используются для создания различных типовых наборов прав доступа, чтобы в дальнейшем можно было назначать права, основанные на ролевом доступе. Набор ролей по умолчанию должен целиком удовлетворять потребности администрирования больших и малых форумов, тем не менее, в каждом из четырех разделов Вы можете добавлять, изменять и удалять роли так, как считаете целесообразным.</p>

<h2>Маски прав доступа</h2>
<p>Маски прав доступа используются для просмотра действующих прав доступа, назначенных для пользователей, модераторов (локальных и главных модераторов), администраторов и форумов.</p>

<br />

<p>Для получения более подробной информации по настройке и управлению правами доступа на Вашем форуме phpBB3 смотрите <a href="http://www.phpbb.com/support/documentation/3.0/quickstart/quick_permissions.html">Раздел 1.5 нашего руководства</a>.</p>
	',

	'ACL_NEVER'					=> 'Никогда',
	'ACL_SET'					=> 'Настройка прав доступа',
	'ACL_SET_EXPLAIN'			=> 'Права доступа основаны на простой системе <samp>ДА</samp>/<samp>НЕТ</samp>. Установление значения <samp>НИКОГДА</samp> для пользователя или группы означает игнорирование любых иных значений, установленных по данной опции. Если Вы не хотите назначать право по опции для данного пользователя или группы выберите <samp>НЕТ</samp>. Если значения по этой опции установлены где-нибудь еще, они будут иметь более высокий приоритет, если не установлено <samp>НИКОГДА</samp>. Все отмеченные объекты (с установленным флажком) отображают установленные значения прав доступа.',
	'ACL_SETTING'				=> 'Настройки',

	'ACL_TYPE_A_'				=> 'Права администратора',
	'ACL_TYPE_F_'				=> 'Доступ к форумам',
	'ACL_TYPE_M_'				=> 'Права модератора',
	'ACL_TYPE_U_'				=> 'Права пользователя',

	'ACL_TYPE_GLOBAL_A_'		=> 'Права администратора',
	'ACL_TYPE_GLOBAL_U_'		=> 'Права пользователя',
	'ACL_TYPE_GLOBAL_M_'		=> 'Права главного модератора',
	'ACL_TYPE_LOCAL_M_'			=> 'права модератора форума',
	'ACL_TYPE_LOCAL_F_'			=> 'доступ к форумам',

	'ACL_NO'					=> 'Нет',
	'ACL_VIEW'					=> 'Просмотр прав доступа',
	'ACL_VIEW_EXPLAIN'			=> 'Здесь Вы можете видеть действующие права пользователя или группы. Красный цвет указывает на отсутствие права у пользователя или у группы, а зеленый — на наличие права у пользователя или у группы.',
	'ACL_YES'					=> 'Да',

	'ACP_ADMINISTRATORS_EXPLAIN'					=> 'Здесь Вы можете назначать администраторские права пользователям и группам. Все пользователи с администраторскими правами могут просматривать администраторский раздел.',
	'ACP_FORUM_MODERATORS_EXPLAIN'					=> 'Здесь Вы можете назначать пользователей и группы пользователей модераторами форумов. Для назначения пользователям прав доступа к форумам, а также для определения прав главного модератора и администратора, используйте соответствующий раздел.',
	'ACP_FORUM_PERMISSIONS_EXPLAIN'					=> 'Здесь Вы можете изменять для каждого пользователя и группы доступ к каждому форуму. Для назначения модераторов или определения прав администратора используйте соответствующий раздел.',
	'ACP_FORUM_PERMISSIONS_COPY_EXPLAIN'			=> 'Здесь вы можете копировать форумные права доступа из одного форума в другой форум или сразу в несколько других форумов.',
	'ACP_GLOBAL_MODERATORS_EXPLAIN'					=> 'Здесь Вы можете назначать права главного модератора пользователям и группам. Главные модераторы подобны обычным модераторам, за исключением того, что они имеют доступ ко всем форумам.',
	'ACP_GROUPS_FORUM_PERMISSIONS_EXPLAIN'			=> 'Здесь Вы можете назначать форумные права групп.',
	'ACP_GROUPS_PERMISSIONS_EXPLAIN'				=> 'Здесь Вы можете назначать глобальные права доступа для групп — права пользователей, права главных модераторов и права администраторов. Права пользователей включают такие возможности, как использование аватара, отправка личных сообщений и так далее; права главного модератора такие, как одобрение сообщений, управление темами, управление блокировкой и так далее, и, наконец, права администратора такие, как изменение прав доступа, определение новых BBCodes, управление форумами и так далее. Индивидуально права доступа пользователей следует изменять в крайних случаях. Преимущественный метод заключается в помещении пользователей в группы и в назначении прав группам.',
	'ACP_ADMIN_ROLES_EXPLAIN'						=> 'Здесь Вы можете управлять администраторскими ролями. Роли содержат действующие права доступа, если Вы измените содержание роли, то изменятся права доступа всех для пользователей и групп, которым назначена данная роль.',
	'ACP_FORUM_ROLES_EXPLAIN'						=> 'Здесь Вы можете управлять форумными ролями. Роли содержат действующие права доступа, если Вы измените содержание роли, то изменятся права доступа всех для пользователей и групп, которым назначена данная роль.',
	'ACP_MOD_ROLES_EXPLAIN'							=> 'Здесь Вы можете управлять модераторскими ролями. Роли содержат действующие права доступа, если Вы измените содержание роли, то изменятся права доступа всех для пользователей и групп, которым назначена данная роль.',
	'ACP_USER_ROLES_EXPLAIN'						=> 'Здесь Вы можете управлять пользовательскими ролями. Роли содержат действующие права доступа, если Вы измените содержание роли, то изменятся права доступа всех для пользователей и групп, которым назначена данная роль.',
	'ACP_USERS_FORUM_PERMISSIONS_EXPLAIN'			=> 'Здесь Вы можете назначать пользователям права доступа к форумам.',
	'ACP_USERS_PERMISSIONS_EXPLAIN'					=> 'Здесь Вы можете назначать глобальные права доступа для пользователей — права пользователей, права главных модераторов и права администраторов. Права пользователей включают такие возможности, как использование аватара, отправка личных сообщений и так далее; права главного модератора такие, как одобрение сообщений, управление темами, управление блокировкой и так далее, и, наконец, права администратора такие, как изменение прав доступа, определение новых BBCodes, управление форумами и так далее. Индивидуально права доступа пользователей следует изменять в крайних случаях. Преимущественный метод заключается в помещении пользователей в группы и в назначении прав группам.',
	'ACP_VIEW_ADMIN_PERMISSIONS_EXPLAIN'			=> 'Здесь Вы можете просмотреть действующие администраторские права доступа для выбранных пользователей и групп.',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS_EXPLAIN'		=> 'Здесь Вы можете просмотреть действующие права доступа главного модератора для выбранных пользователей и групп.',
	'ACP_VIEW_FORUM_PERMISSIONS_EXPLAIN'			=> 'Здесь Вы можете просмотреть действующие локальные права доступа для выбранных форумов, пользователей и групп.',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS_EXPLAIN'		=> 'Здесь Вы можете просмотреть действующие модераторские права доступа для выбранных форумов, пользователей и групп.',
	'ACP_VIEW_USER_PERMISSIONS_EXPLAIN'				=> 'Здесь Вы можете просмотреть действующие пользовательские права доступа для выбранных пользователей и групп.',

	'ADD_GROUPS'					=> 'Добавить группы',
	'ADD_PERMISSIONS'				=> 'Добавить права',
	'ADD_USERS'						=> 'Добавить пользователей',
	'ADVANCED_PERMISSIONS'			=> 'Расширенные права',
	'ALL_GROUPS'					=> 'Выбрать все группы',
	'ALL_NEVER'						=> 'Все <samp>НИКОГДА</samp>',
	'ALL_NO'						=> 'Все <samp>НЕТ</samp>',
	'ALL_USERS'						=> 'Выбрать всех пользователей',
	'ALL_YES'						=> 'Все <samp>ДА</samp>',
	'APPLY_ALL_PERMISSIONS'			=> 'Применить все права',
	'APPLY_PERMISSIONS'				=> 'Применить права',
	'APPLY_PERMISSIONS_EXPLAIN'		=> 'Права и роль, указанные для этого элемента, будут применены к этому элементу и к отмеченным элементам.',
	'AUTH_UPDATED'					=> 'Права доступа обновлены.',

	'COPY_PERMISSIONS_CONFIRM'				=> 'Вы действительно хотите выполнить данную операцию? Помните, что данная операция перезапишет все имеющиеся права выбранных форумов.',
	'COPY_PERMISSIONS_FORUM_FROM_EXPLAIN'	=> 'Исходный форум, из которого Вы хотите скопировать права доступа.',
	'COPY_PERMISSIONS_FORUM_TO_EXPLAIN'		=> 'Конечные форумы, к которым вы хотите применить скопированные права доступа.',
	'COPY_PERMISSIONS_FROM'					=> 'Копировать права доступа из',
	'COPY_PERMISSIONS_TO'					=> 'Применить права доступа к',
	
	'CREATE_ROLE'					=> 'Создать роль',
	'CREATE_ROLE_FROM'				=> 'Использовать настройки роли…',
	'CUSTOM'						=> 'Другое…',

	'DEFAULT'						=> 'По умолчанию',
	'DELETE_ROLE'					=> 'Удаление роли',
	'DELETE_ROLE_CONFIRM'			=> 'Вы уверены, что хотите удалить эту роль? Объекты с данной ролью <strong>не</strong> потеряют определенные ею настройки прав доступа.',
	'DISPLAY_ROLE_ITEMS'			=> 'Просмотреть объекты с данной ролью',

	'EDIT_PERMISSIONS'				=> 'Редактировать права',
	'EDIT_ROLE'						=> 'Редактировать роль',

	'GROUPS_NOT_ASSIGNED'			=> 'Нет групп с данной ролью',

	'LOOK_UP_GROUP'					=> 'Выбор группы',
	'LOOK_UP_USER'					=> 'Выбор пользователя',

	'MANAGE_GROUPS'			=> 'Управление группами',
	'MANAGE_USERS'			=> 'Управление пользователями',

	'NO_AUTH_SETTING_FOUND'			=> 'Настройки прав доступа не определены.',
	'NO_ROLE_ASSIGNED'				=> 'Роль не назначена…',
	'NO_ROLE_ASSIGNED_EXPLAIN'		=> 'Этот выбор не изменяет назначенных прав доступа (справа). Если Вы хотите сбросить или удалить все права доступа, то необходимо использовать ссылку «Все <samp>НЕТ</samp>».',
	'NO_ROLE_AVAILABLE'				=> 'Роли недоступны',
	'NO_ROLE_NAME_SPECIFIED'		=> 'Введите имя роли.',
	'NO_ROLE_SELECTED'				=> 'Роль не найдена.',
	'NO_USER_GROUP_SELECTED'		=> 'Вы не выбрали пользователя или группу.',

	'ONLY_FORUM_DEFINED'		=> 'Вы определили только форумы. Выберите, по крайней мере, одного пользователя или группу.',

	'PERMISSION_APPLIED_TO_ALL'			=> 'Права доступа и роль будут применены для всех отмеченных объектов',
	'PLUS_SUBFORUMS'					=> '+подфорумы',

	'REMOVE_PERMISSIONS'				=> 'Удалить права',
	'REMOVE_ROLE'						=> 'Удалить роль',
	'RESULTING_PERMISSION'				=> 'Результирущие права',
	'ROLE'								=> 'Роль',
	'ROLE_ADD_SUCCESS'					=> 'Роль успешно добавлена.',
	'ROLE_ASSIGNED_TO'					=> 'Кому назначена роль «%s»',
	'ROLE_DELETED'						=> 'Роль успешно удалена.',
	'ROLE_DESCRIPTION'					=> 'Описание роли',

	'ROLE_ADMIN_FORUM'				=> 'Администратор форума',
	'ROLE_ADMIN_FULL'				=> 'Главный администратор',
	'ROLE_ADMIN_STANDARD'			=> 'Стандартный администратор',
	'ROLE_ADMIN_USERGROUP'			=> 'Администратор пользователей и групп',
	'ROLE_FORUM_BOT'				=> 'Доступ для бота',
	'ROLE_FORUM_FULL'				=> 'Полный доступ',
	'ROLE_FORUM_LIMITED'			=> 'Ограниченный доступ',
	'ROLE_FORUM_LIMITED_POLLS'		=> 'Ограниченный доступ с голосованиями',
	'ROLE_FORUM_NOACCESS'			=> 'Нет доступа',
	'ROLE_FORUM_ONQUEUE'			=> 'С предварительным одобрением',
	'ROLE_FORUM_POLLS'				=> 'Стандартный доступ с голосованиями',
	'ROLE_FORUM_READONLY'			=> 'Доступ только для чтения',
	'ROLE_FORUM_STANDARD'			=> 'Стандартный доступ',
	'ROLE_FORUM_NEW_MEMBER'			=> 'Права доступа вновь зарегистрированного пользователя',
	'ROLE_MOD_FULL'					=> 'Главный модератор',
	'ROLE_MOD_QUEUE'				=> 'Премодератор',
	'ROLE_MOD_SIMPLE'				=> 'Простой модератор',
	'ROLE_MOD_STANDARD'				=> 'Стандартный модератор',
	'ROLE_USER_FULL'				=> 'Все возможности',
	'ROLE_USER_LIMITED'				=> 'Ограниченные возможности',
	'ROLE_USER_NOAVATAR'			=> 'Без аватара',
	'ROLE_USER_NOPM'				=> 'Без личных сообщений',
	'ROLE_USER_STANDARD'			=> 'Стандартные возможности',
	'ROLE_USER_NEW_MEMBER'			=> 'Возможности вновь зарегистрированного пользователя',
	
	'ROLE_DESCRIPTION_ADMIN_FORUM'				=> 'Имеет доступ к управлению форумом и к настройкам прав доступа к форуму.',
	'ROLE_DESCRIPTION_ADMIN_FULL'				=> 'Имеет доступ ко всем администраторским возможностям форума.<br />Не рекомендуется.',
	'ROLE_DESCRIPTION_ADMIN_STANDARD'			=> 'Имеет доступ к большинству администраторских возможностей, но не может использовать системные и серверные настройки.',
	'ROLE_DESCRIPTION_ADMIN_USERGROUP'			=> 'Может управлять пользователями и группами: изменять права доступа, настройки, управлять блокировкой и званиями.',
	'ROLE_DESCRIPTION_FORUM_BOT'				=> 'Эта роль рекомендована для ботов и поисковых машин.',
	'ROLE_DESCRIPTION_FORUM_FULL'				=> 'Доступ к использованию всех возможностей на форуме, включая создание объявлений и прикрепленных тем. Также доступна возможность игнорирования флуд-интервала.<br />Не рекомендуется для обычных пользователей.',
	'ROLE_DESCRIPTION_FORUM_LIMITED'			=> 'Доступ к обычным возможностям на форуме, за исключением прикрепления вложений или использования значков сообщений.',
	'ROLE_DESCRIPTION_FORUM_LIMITED_POLLS'		=> 'Аналогично ограниченному доступу, но с возможностью создания голосований.',
	'ROLE_DESCRIPTION_FORUM_NOACCESS'			=> 'Полное отсутствие доступа, в том числе возможности видеть форум.',
	'ROLE_DESCRIPTION_FORUM_ONQUEUE'			=> 'Доступ к большинству возможностей на форуме, включая прикрепление вложений, но размещаемые сообщения и темы требуют предварительного одобрения модератором.',
	'ROLE_DESCRIPTION_FORUM_POLLS'				=> 'Аналогично стандартному доступу, но с возможностью создания голосований.',
	'ROLE_DESCRIPTION_FORUM_READONLY'			=> 'Имеется доступ к чтению форума, но без возможности создавать новые темы или отвечать на сообщения.',
	'ROLE_DESCRIPTION_FORUM_STANDARD'			=> 'Доступ к большинству возможностей на форуме, включая прикрепление вложений и удаление своих тем, но без права закрытия своих тем и создания голосований.',
	'ROLE_DESCRIPTION_FORUM_NEW_MEMBER'			=> 'Роль для членов специальной группы «Новые пользователи», которая используется для ограничения возможностей вновь зарегистрированных пользователей.',
	'ROLE_DESCRIPTION_MOD_FULL'					=> 'Может использовать все модераторские возможности, включая блокировку пользователей.',
	'ROLE_DESCRIPTION_MOD_QUEUE'				=> 'Может осуществлять только предварительное одобрение и правку сообщений.',
	'ROLE_DESCRIPTION_MOD_SIMPLE'				=> 'Может выполнять только основные операции в темах. Не может выносить предупреждения или использовать отложенную модерацию.',
	'ROLE_DESCRIPTION_MOD_STANDARD'				=> 'Может использовать большинство модераторских возможностей, но не имеет доступа к блокировке пользователей или смене автора сообщений.',
	'ROLE_DESCRIPTION_USER_FULL'				=> 'Может использовать все доступные на форуме возможности для пользователя, включая смену имени или игнорирование флуд-интервала.<br />Не рекомендуется.',
	'ROLE_DESCRIPTION_USER_LIMITED'				=> 'Имеет доступ к обычным возможностям пользователя. Прикрепление вложений, а также отправка электронных и мгновенных сообщений недоступны.',
	'ROLE_DESCRIPTION_USER_NOAVATAR'			=> 'Имеет набор ограниченных возможностей, и, кроме этого, не может использовать аватар.',
	'ROLE_DESCRIPTION_USER_NOPM'				=> 'Имеет набор ограниченных возможностей, и, кроме этого, не имеет доступа к личным сообщениям.',
	'ROLE_DESCRIPTION_USER_STANDARD'			=> 'Имеет доступ к большинству, но не ко всем возможностям пользователя. Например, не может изменять свое имя или игнорировать флуд-интервал.',
	'ROLE_DESCRIPTION_USER_NEW_MEMBER'			=> 'Роль для членов специальной группы «Новые пользователи», которая используется для ограничения возможностей вновь зарегистрированных пользователей.',

	'ROLE_DESCRIPTION_EXPLAIN'			=> 'Вы можете ввести краткое описание роли. Указанный текст будет отображен в виде описания в перечне ролей.',
	'ROLE_DESCRIPTION_LONG'				=> 'Описание роли слишком длинное. Ограничьте описание до 4000 символов.',
	'ROLE_DETAILS'						=> 'Сведения о роли',
	'ROLE_EDIT_SUCCESS'					=> 'Роль успешно изменена.',
	'ROLE_NAME'							=> 'Название роли',
	'ROLE_NAME_ALREADY_EXIST'			=> 'Название роли <strong>%s</strong> уже существует для данного набора прав доступа.',
	'ROLE_NOT_ASSIGNED'					=> 'Роль не назначена.',

	'SELECTED_FORUM_NOT_EXIST'			=> 'Выбранных форумов не существует.',
	'SELECTED_GROUP_NOT_EXIST'			=> 'Выбранных групп не существует.',
	'SELECTED_USER_NOT_EXIST'			=> 'Выбранных пользователей не существует.',
	'SELECT_FORUM_SUBFORUM_EXPLAIN'		=> 'Выбранный здесь форум будет включать все подфорумы.',
	'SELECT_ROLE'						=> 'Выбор роли…',
	'SELECT_TYPE'						=> 'Выберите тип',
	'SET_PERMISSIONS'					=> 'Установить права',
	'SET_ROLE_PERMISSIONS'				=> 'Установить права для роли',
	'SET_USERS_PERMISSIONS'				=> 'Установить пользовательские права',
	'SET_USERS_FORUM_PERMISSIONS'		=> 'Установить локальные права',

	'TRACE_DEFAULT'						=> 'По умолчанию значение каждого права доступа <samp>НЕТ</samp> (сброшено). Таким образом, права доступа могут быть переопределены другими параметрами настроек.',
	'TRACE_FOR'							=> 'Результат для',
	'TRACE_GLOBAL_SETTING'				=> '%s (глобально)',
	'TRACE_GROUP_NEVER_TOTAL_NEVER'		=> 'Значение права для этой группы <samp>НИКОГДА</samp> соответствует результирующему, поэтому сохранено ранее заданное значение.',
	'TRACE_GROUP_NEVER_TOTAL_NEVER_LOCAL'		=> 'Значение права группы для этого форума <samp>НИКОГДА</samp> соответствует результирующему, поэтому сохранено ранее заданное значение.',
	'TRACE_GROUP_NEVER_TOTAL_NO'		=> 'Значение права для этой группы <samp>НИКОГДА</samp> становится новым результирующим, так как ранее не было задано (было задано <samp>НЕТ</samp>).',
	'TRACE_GROUP_NEVER_TOTAL_NO_LOCAL'		=> 'Значение права группы для этого форума <samp>НИКОГДА</samp> становится новым результирующим, так как ранее не было задано (было задано <samp>НЕТ</samp>).',
	'TRACE_GROUP_NEVER_TOTAL_YES'		=> 'Значение права для этой группы <samp>НИКОГДА</samp> заменяет результирующее <samp>ДА</samp> на <samp>НИКОГДА</samp> для данного пользователя.',
	'TRACE_GROUP_NEVER_TOTAL_YES_LOCAL'		=> 'Значение права группы для этого форума <samp>НИКОГДА</samp> заменяет результирующее <samp>ДА</samp> на <samp>НИКОГДА</samp> для этого пользователя.',
	'TRACE_GROUP_NO'					=> 'Значение права для этой группы <samp>НЕТ</samp>, поэтому сохранено ранее заданное результирующее право.',
	'TRACE_GROUP_NO_LOCAL'				=> 'Значение права для этой группы в этом форуме <samp>НЕТ</samp>, поэтому сохранено ранее заданное значение.',
	'TRACE_GROUP_YES_TOTAL_NEVER'		=> 'Значение права для этой группы <samp>ДА</samp>, но результирующее право <samp>НИКОГДА</samp> не может быть заменено.',
	'TRACE_GROUP_YES_TOTAL_NEVER_LOCAL'		=> 'Значение права группы для этого форума <samp>ДА</samp>, но результирующее право <samp>НИКОГДА</samp> не может быть заменено.',
	'TRACE_GROUP_YES_TOTAL_NO'			=> 'Значение права для этой группы <samp>ДА</samp> становится новым результирующим, так как ранее не было задано (было задано <samp>НЕТ</samp>).',
	'TRACE_GROUP_YES_TOTAL_NO_LOCAL'		=> 'Значение права группы для этого форума <samp>ДА</samp> становится новым результирующим, так как ранее не было задано (было задано <samp>НЕТ</samp>).',
	'TRACE_GROUP_YES_TOTAL_YES'			=> 'Значение права для этой группы <samp>ДА</samp>, результирующим правом также является <samp>ДА</samp>, поэтому сохранено ранее заданное значение.',
	'TRACE_GROUP_YES_TOTAL_YES_LOCAL'		=> 'Значение права группы для этого форума <samp>ДА</samp>, результирующим правом также является <samp>ДА</samp>, поэтому сохранено ранее заданное значение.',
	'TRACE_PERMISSION'					=> 'Отследить право доступа — %s',
	'TRACE_RESULT'						=> 'Отследить результат',
	'TRACE_SETTING'						=> 'Отследить настройки',

	'TRACE_USER_GLOBAL_YES_TOTAL_YES'			=> 'Независимо от форума значение права этого пользователя <samp>ДА</samp>, результирующее право также равно <samp>ДА</samp>, таким образом, сохранено результирующее значение. %sОтследить глобальное право%s',
	'TRACE_USER_GLOBAL_YES_TOTAL_NEVER'			=> 'Независимо от форума значение права для этого пользователя <samp>ДА</samp>, которое заменяет текущее локальное значение <samp>НИКОГДА</samp>. %sОтследить глобальное право%s',
	'TRACE_USER_GLOBAL_NEVER_TOTAL_KEPT'		=> 'Независимо от форума значение права этого пользователя <samp>НИКОГДА</samp>, которое не влияет на локальное значение. %sОтследить глобальное право%s',

	'TRACE_USER_FOUNDER'						=> 'Пользователь является основателем форума, поэтому значения администраторских прав всегда установлены в значение <samp>ДА</samp>.',
	'TRACE_USER_KEPT'							=> 'Значение права для этого пользователя <samp>НЕТ</samp>, таким образом, сохранено ранее заданное результирующее значение.',
	'TRACE_USER_KEPT_LOCAL'						=> 'Значение права для этого пользователя на данном форуме <samp>НЕТ</samp>, таким образом, сохранено ранее заданное результирующее значение.',
	'TRACE_USER_NEVER_TOTAL_NEVER'				=> 'Значение права для этого пользователя <samp>НИКОГДА</samp>, результирующим правом также является <samp>НИКОГДА</samp>, поэтому изменения не производятся.',
	'TRACE_USER_NEVER_TOTAL_NEVER_LOCAL'		=> 'Значение права для этого пользователя на данном форуме <samp>НИКОГДА</samp>, результирующим правом также является <samp>НИКОГДА</samp>, поэтому изменения не производятся.',
	'TRACE_USER_NEVER_TOTAL_NO'					=> 'Значение права для этого пользователя <samp>НИКОГДА</samp> становится новым результирующим правом, так как ранее было задано <samp>НЕТ</samp>.',
	'TRACE_USER_NEVER_TOTAL_NO_LOCAL'			=> 'Значение права для этого пользователя на данном форуме <samp>НИКОГДА</samp> становится новым результирующим правом, так как ранее было задано <samp>НЕТ</samp>.',
	'TRACE_USER_NEVER_TOTAL_YES'				=> 'Значение права для этого пользователя <samp>НИКОГДА</samp> заменяет ранее заданное значение <samp>ДА</samp>.',
	'TRACE_USER_NEVER_TOTAL_YES_LOCAL'			=> 'Значение права для этого пользователя на данном форуме <samp>НИКОГДА</samp> заменяет ранее заданное значение <samp>ДА</samp>.',
	'TRACE_USER_NO_TOTAL_NO'					=> 'Значение права для этого пользователя <samp>НЕТ</samp>, результирующим правом также является <samp>НЕТ</samp>, поэтому установлено значение по умолчанию <samp>НИКОГДА</samp>.',
	'TRACE_USER_NO_TOTAL_NO_LOCAL'				=> 'Значение права для этого пользователя в данном форуме <samp>НЕТ</samp>, результирующим правом также является <samp>НЕТ</samp>, поэтому установлено значение по умолчанию <samp>НИКОГДА</samp>.',
	'TRACE_USER_YES_TOTAL_NEVER'				=> 'Значение права для этого пользователя <samp>ДА</samp>, но результирующе право <samp>НИКОГДА</samp> не может быть заменено.',
	'TRACE_USER_YES_TOTAL_NEVER_LOCAL'			=> 'Значение права для этого пользователя в данном форуме <samp>ДА</samp>, но результирующе право <samp>НИКОГДА</samp> не может быть заменено.',
	'TRACE_USER_YES_TOTAL_NO'					=> 'Значение права для этого пользователя <samp>ДА</samp> становится новым результирующим правом, так как ранее было задано <samp>НЕТ</samp>.',
	'TRACE_USER_YES_TOTAL_NO_LOCAL'				=> 'Значение права для этого пользователя в данном форуме <samp>ДА</samp> становится новым результирующим правом, так как ранее было задано <samp>НЕТ</samp>.',
	'TRACE_USER_YES_TOTAL_YES'					=> 'Значение права для этого пользователя <samp>ДА</samp>, результирующим правом также является <samp>ДА</samp>, поэтому изменения не производятся.',
	'TRACE_USER_YES_TOTAL_YES_LOCAL'			=> 'Значение права для этого пользователя в данном форуме <samp>ДА</samp>, результирующим правом также является <samp>ДА</samp>, поэтому изменения не производятся.',
	'TRACE_WHO'									=> 'В качестве',
	'TRACE_TOTAL'								=> 'Итог',

	'USERS_NOT_ASSIGNED'				=> 'Нет пользователей с этой ролью',
	'USER_IS_MEMBER_OF_DEFAULT'			=> 'состоит в следующих группах по умолчанию',
	'USER_IS_MEMBER_OF_CUSTOM'			=> 'состоит в следующих созданных группах',

	'VIEW_ASSIGNED_ITEMS'		=> 'Просмотр назначенных элементов',
	'VIEW_LOCAL_PERMS'			=> 'Посмотреть локальные права',
	'VIEW_GLOBAL_PERMS'			=> 'Посмотреть глобальные права',
	'VIEW_PERMISSIONS'			=> 'Посмотреть права',

	'WRONG_PERMISSION_TYPE'		=> 'Выбран неправильный тип.',
	'WRONG_PERMISSION_SETTING_FORMAT'		=> 'Права установлены в неверном формате, их обработка невозможна.',
));

?>