<?php

// Language definitions used in admin_groups.php
$lang_admin_groups = array(

'Must enter title message'		=>	'您必须填写一个用户组名。',
'Title already exists message'	=>	'用户组名 <strong>%s</strong> 已经存在。',
'Default group redirect'		=>	'默认用户组设置成功。正在跳转 …',
'Cannot remove default message'	=>	'默认用户组无法删除。要想删除该用户组，您必须首先设置其他用户组为默认用户组。',
'Group removed redirect'		=>	'用户组移除成功。正在跳转 …',
'Group added redirect'			=>	'用户组添加成功。正在跳转 …',
'Group edited redirect'			=>	'用户组编辑成功。正在跳转 …',

'Add groups head'				=>	'添加/设置用户组',
'Add group subhead'				=>	'添加新用户组',
'New group label'				=>	'新用户组基于',
'New group help'				=>	'选择一个用户组作为新用户组权限设置的参考。下一页将要您对其参考权限进行微调。',
'Default group subhead'			=>	'设置默认用户组',
'Default group label'			=>	'默认用户组',
'Default group help'			=>	'默认用户组是新用户注册时将会归入的用户组。出于安全考虑，不能将版主(moderator)或管理员(administrator)设置为默认用户组。',
'Existing groups head'			=>	'现有用户组',
'Edit groups subhead'			=>	'编辑/删除用户组',
'Edit groups info'				=>	'内置的用户组包括访客(Guests)，管理员(Administrators)，版主(Moderators)以及会员(Members)不允许移除。但是允许您编辑他们的权限。虽然如此，但请注意某些用户组中有些权限选项是不可用的(例如访客(Guests)组中的<em>编辑帖子</em>权限)。管理员组总是拥有全权。',
'Edit link'						=>	'编辑',
'Delete link'					=>	'删除',
'Group delete head'				=>	'删除用户组',
'Confirm delete subhead'		=>	'确认删除用户组',
'Confirm delete info'			=>	'您确信要删除用户组 <strong>%s</strong> 吗？',
'Confirm delete warn'			=>	'警告！用户组删除后将不可恢复。',
'Delete group head'				=>	'删除用户组',
'Move users subhead'			=>	'转移当前用户到用户组',
'Move users info'				=>	'用户组 <strong>%s</strong> 当前有 <strong>%s</strong> 位成员。删除时请为这些成员选择分配一个用户组。',
'Move users label'				=>	'转移用户至',
'Delete group'					=>	'删除用户组',

'Group settings head'			=>	'用户组设置',
'Group settings subhead'		=>	'设置用户组选项及权限',
'Group settings info'			=>	'下列选项和权限是该用户组的默认设置值。各版块的具体权限设置不与此处冲突时，这些设置才会生效。',
'Group title label'				=>	'用户组名',
'User title label'				=>	'用户头衔',
'User title help'				=>	'该用户组中用户获得的头衔。 留空将使用默认头衔 ("%s")。',
'Promote users label'			=>	'自动晋级',
'Promote users help'			=>	'您可开启晋级功能，使得用户在发帖量达到一定数目时自动晋级到新的用户组。选择 "%s" 关闭该功能。出于安全考虑，在此您无法选择管理员(Administrators)组。同时请注意，此处变更设置对用户组的影响将即时体现。注意这里你填写的发帖数是单个用户的发帖数，而不是该用户所在之用户组的发帖数。 ',
'Disable promotion'				=>	'禁用自动晋级',
'Mod privileges label'			=>	'允许行使版主权限',
'Mod privileges help'			=>	'要允许某用户行使版主权限，您必须分配他/她为一个或多个版块的版主。该设置在该用户的个人资料栏下的管理页面中。',
'Edit profile label'			=>	'允许版主编辑用户的个人资料',
'Edit profile help'				=>	'如果已开启该组的版主权限，该设置将允许该组成员编辑其他用户的个人资料。',
'Rename users label'			=>	'允许版主编辑用户的用户名',
'Rename users help'				=>	'如果已开启该组的版主权限，该设置将允许该组成员修改其他用户的用户名。',
'Change passwords label'		=>	'允许版主变更用户的密码',
'Change passwords help'			=>	'如果已开启该组的版主权限，该设置将允许该组成员修改其他用户的登录密码。',
'Ban users label'				=>	'允许版主封禁用户',
'Ban users help'				=>	'如果已开启该组的版主权限，该设置将允许该组成员封禁其他用户。',
'Read board label'				=>	'阅读论坛',
'Read board help'				=>	'允许该组用户阅读论坛帖子。该设置将影响论坛的所有版块，即使特定的版块设置为允许阅读权限也不能覆盖此处的禁止阅读论坛权限。当此处设置为「否」时，该组用户将只能使用论坛的登录/注销或者注册功能。',
'View user info label'			=>	'查看用户信息',
'View user info help'			=>	'允许该组用户查看用户列表及其他用户个人资料。',
'Post replies label'			=>	'发表回复',
'Post replies help'				=>	'允许该组用户在主题下发表回复。',
'Post topics label'				=>	'发表主题',
'Post topics help'				=>	'允许该组用户发表新主题。',
'Edit posts label'				=>	'编辑帖子',
'Edit posts help'				=>	'允许该组用户编辑自己发表的帖子。',
'Delete posts label'			=>	'删除帖子',
'Delete posts help'				=>	'允许该组用户删除自己发表的帖子。',
'Delete topics label'			=>	'删除主题',
'Delete topics help'			=>	'允许该组用户删除自己发表的主题(包括主题下的所有回复)。',
'Post links label'				=>	'发布链接',
'Post links help'				=>	'是否允许该组用户发表的帖子内包含链接。此设置在用户个人资料页面下的签名和个人网站的设置中也同样生效。',
'Set own title label'			=>	'自定义头衔',
'Set own title help'			=>	'允许该组用户自定义个性的头衔。',
'User search label'				=>	'使用搜索',
'User search help'				=>	'允许该组用户使用搜索功能。',
'User list search label'		=>	'搜索用户列表',
'User list search help'			=>	'允许该组用户在用户列表中使用文本搜索功能搜索用户名。',
'Send e-mails label'			=>	'发送电子邮件',
'Send e-mails help'				=>	'允许该组用户向其他用户发送电子邮件。',
'Post flood label'				=>	'发帖间隔时间',
'Post flood help'				=>	'该组用户两次发帖间必须间隔的秒数。禁用请填写0。',
'Search flood label'			=>	'搜索间隔时间',
'Search flood help'				=>	'该组用户两次搜索间必须间隔的秒数。禁用请填写0。',
'E-mail flood label'			=>	'邮件发送间隔时间',
'E-mail flood help'				=>	'该组用户两次发送电子邮件间必须间隔的秒数。禁用请填写0。',
'Report flood label'			=>	'举报间隔时间',
'Report flood help'				=>	'该组用户两次举报操作间必须间隔的秒数。禁用请填写0。',
'Moderator info'				=>	'特别提醒您要允许该组的某用户行使版主权限，您必须分配他/她为一个或多个版块的版主。该设置在该用户的个人资料栏下的管理页面中。',

);
