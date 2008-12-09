<?php
/*
+ ----------------------------------------------------------------------------+
|     e107 website system
|
|     �Steve Dunstan 2001-2002
|     http://e107.org
|     jalist@e107.org
|
|     Released under the terms and conditions of the
|     GNU General Public License (http://gnu.org).
|
|     $Source: /cvs_backup/e107_0.8/e107_themes/_blank/admin_template.php,v $
|     $Revision: 1.1 $
|     $Date: 2008-12-09 15:19:03 $
|     $Author: secretr $
+----------------------------------------------------------------------------+
*/

if (!defined('e107_INIT')) { exit; }

define("ADLINK_COLS",5);


$ADMIN_HEADER = "
<div class='admin-wrapper'>
	<div class='admin-header'>
		<div class='admin-header-content'>
			{ADMIN_LOGO}
			{ADMIN_LOGGED}
			{ADMIN_SEL_LAN}
			{ADMIN_USERLAN}
		</div>
		<div style='height: 20px;'><!-- --></div>
		<div class='admin-navigation'>
			{FS_ADMIN_ALT_NAV}
			<div class='clear'><!-- --></div>
		</div>
	</div>
	<div class='admin-page-body'>
		<div class='col-2-left'>
			<div class='col-left'>
				{ADMIN_LANG}
				{SETSTYLE=admin_menu}
				{ADMIN_NAV}
				{ADMIN_MENU}
				{SETSTYLE=bla}
				{ADMIN_PWORD}
				{ADMIN_STATUS=request}
				{ADMIN_LATEST=request}
				{ADMIN_LOG=request}
				{ADMIN_MSG}
				{ADMIN_PLUGINS}
				
				{ADMIN_PRESET}
				{ADMIN_UPDATE}
				{SETSTYLE=site_info}
				
				{ADMIN_HELP}
				{ADMIN_SITEINFO}
				{ADMIN_DOCS}
				{SETSTYLE=bla}
			</div>
			<div class='col-main'>
				<div class='inner-wrapper'>
";

$ADMIN_FOOTER = "
				</div>
			</div>
			<div class='clear'><!-- --></div>
		</div>
	</div>
	<div class='admin-footer'>
		{ADMIN_CREDITS}
	</div>
</div>
";

/* REEDIT

 * function show_admin_menu() in e107_admin/header.php

*/

$BUTTONS_START = '
<ul class="plugin-navigation">
';
$BUTTON = '
	<li>
		<a class="link" {ONCLICK}>&raquo;&nbsp;{LINK_TEXT}</a>
	</li>
';
$BUTTON_OVER = '
	<li>
		<a class="link-active" {ONCLICK}>&raquo;&nbsp;{LINK_TEXT}</a>
	</li>
';
$SUB_BUTTONS_START = '
<ul class="plugin-navigation">	
	<li>
		<a class="link" onclick="expandit(\'{SUB_HEAD_ID}\');" >&raquo;&nbsp;{SUB_HEAD}</a>
		<ul class="sub-nav" id="{SUB_HEAD_ID}" style="display: none">
';
$SUB_BUTTON = '
			<li>
				<a class="link" href="{LINK_URL}">&raquo;&nbsp;{LINK_TEXT}</a>
			</li>
';
$SUB_BUTTON_OVER = '
			<li>
				<a class="link-active" href="{LINK_URL}">&raquo;&nbsp;{LINK_TEXT}</a>
			</li>
';
$SUB_BUTTONS_END = '
		</ul>
	</li>
</ul>
';
$BUTTONS_END = '
</ul>
';


?>