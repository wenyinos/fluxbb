<?php

// Language definitions used in admin_users.php
$lang_admin_users = array(

'Non numeric message'		=>	'您在一个仅接受数值的列中填写了非数值字符。',
'Invalid date time message'	=>	'日期/时间格式不正确。',
'Not verified'				=>	'未验证',

// Actions: mass delete/ban etc.
'No users selected'			=>	'未选择用户。',
'No move admins message'	=>	'出于安全原因，不允许移动多位管理员到另一个组。如果您确实需要移动这些管理员，请前往他们各自的用户资料页面移动。',
'No delete admins message'	=>	'管理员不能被删除。如果您需要删除管理员，您必须先将其移动到另一个组。',
'No ban admins message'		=>	'管理员不能被阻止。如果您需要阻止管理员，您必须先将其移动到另一个组。',
'No ban mods message'		=>	'版主不能被阻止。如果您需要阻止版主，您必须先将其移动到另一个组。',
'Move users'				=>	'更改用户组',
'Move users subhead'		=>	'选择新的用户组',
'New group label'			=>	'新的用户组',
'New group help'			=>	'为所选的用户选择将要移往的用户组。出于安全原因，不允许同时将多位用户移动到管理员组。',
'Invalid group message'		=>	'无效的组名。',
'Users move redirect'		=>	'用户组已更改。正在跳转 …',
'Delete users'				=>	'删除用户',
'Confirm delete legend'		=>	'重要：删除用户前请仔细阅读',
'Confirm delete info'		=>	'请确认您准备删除这些用户。',
'Delete posts'				=>	'删除这些用户所发表的所有主题和帖子。',
'Delete warning'			=>	'警告！删除用户和/或帖子将无法恢复。如果您选择了不删除这些用户所发表的帖子，这些帖子以后将只能被手动删除。',
'Users delete redirect'		=>	'用户已删除。正在跳转 …',
'Ban users'					=>	'阻止用户',
'Message expiry subhead'	=>	'阻止说明及撤销',
'Ban message label'			=>	'阻止说明',
'Ban message help'			=>	'当被阻止的用户来访时将会看到的一条信息。',
'Expire date label'			=>	'撤销日期',
'Expire date help'			=>	'阻止操作自动撤销的日期 (格式: yyyy-mm-dd)。留空则需要手动撤销。',
'Ban IP label'				=>	'阻止IP地址',
'Ban IP help'				=>	'同时阻止被阻止用户所使用的IP地址以防止他们注册新账户。',
'Invalid date message'		=>	'您填写了一个无效的撤销日期。',
'Invalid date reasons'		=>	'日期的格式是 YYYY-MM-DD 并且必须设为至少一天后的未来。',
'Users banned redirect'		=>	'用户已阻止。正在跳转 …',

'User search head'			=>	'用户搜索',
'User search subhead'		=>	'填写搜索条件',
'User search info'			=>	'在数据库中搜索用户。您可填写一个或多个条件进行搜索。搜索条件中允许使用通配符 * 模糊匹配。',
'Username label'			=>	'用户名',
'E-mail address label'		=>	'电子信箱地址',
'Title label'				=>	'头衔',
'Real name label'			=>	'真实姓名',
'Website label'				=>	'个人网站',
'Jabber label'				=>	'Jabber',
'ICQ label'					=>	'ICQ',
'MSN label'					=>	'Microsoft Account',
'AOL label'					=>	'AOL IM',
'Yahoo label'				=>	'Yahoo Messenger',
'Location label'			=>	'所在地',
'Signature label'			=>	'签名',
'Admin note label'			=>	'管理员注',
'Posts more than label'		=>	'发帖数大于',
'Posts less than label'		=>	'发帖数小于',
'Last post after label'		=>	'最新帖子晚于',
'Date help'					=>	'(yyyy-mm-dd hh:mm:ss)',
'Last post before label'	=>	'最新帖子早于',
'Last visit after label'	=>	'最后访问时间晚于',
'Last visit before label'	=>	'最后访问时间早于',
'Registered after label'	=>	'注册时间晚于',
'Registered before label'	=>	'注册时间早于',
'Order by label'			=>	'排列依据',
'Order by username'			=>	'用户名',
'Order by e-mail'			=>	'电子信箱',
'Order by posts'			=>	'发帖数',
'Order by last post'		=>	'最后发表',
'Order by registered'		=>	'注册时间',
'Order by last visit'		=>	'最后访问时间',
'Ascending'					=>	'升序',
'Descending'				=>	'降序',
'User group label'			=>	'用户组',
'All groups'				=>	'所有组',
'Unverified users'			=>	'未验证用户',
'Submit search'				=>	'提交搜索',
'IP search head'			=>	'IP搜索',
'IP search subhead'			=>	'填写IP进行搜索',
'IP address label'			=>	'IP地址',
'IP address help'			=>	'在发帖数据库中搜索IP地址。',
'Find IP address'			=>	'查找IP地址',

'Results head'				=>	'搜索结果',
'Results username head'		=>	'用户名',
'Results e-mail head'		=>	'电子信箱',
'Results title head'		=>	'头衔/身份',
'Results posts head'		=>	'发帖',
'Results admin note head'	=>	'管理员注',
'Results actions head'		=>	'操作',
'Results IP address head'	=>	'IP地址',
'Results last used head'	=>	'最后使用',
'Results times found head'	=>	'发现次数',
'Results action head'		=>	'操作',
'Results find more link'	=>	'查找该IP的更多用户',
'Results no posts found'	=>	'当前该版块尚无该用户的帖子。',
'Select'					=>	'选择',
'Select all'				=>	'全选',
'Unselect all'				=>	'全不选',
'Ban'						=>	'阻止',
'Delete'					=>	'删除',
'Change group'				=>	'更改用户组',
'Bad IP message'			=>	'所提供的IP地址格式不正确。',
'Results view IP link'		=>	'查看IP统计信息',
'Results show posts link'	=>	'显示帖子',
'Results guest'				=>	'访客',
'Results no IP found'		=>	'数据库中找不到所提供的IP地址。',
'No match'					=>	'无匹配项'

);
