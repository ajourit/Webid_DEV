<?php
/***************************************************************************
 *   copyright				: (C) 2008 - 2013 WeBid
 *   site					: http://www.webidsupport.com/
 ***************************************************************************/

/***************************************************************************
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version. Although none of the code may be
 *   sold. If you have been sold this script, get a refund.
 ***************************************************************************/
include 'common.php';

if (!$user->is_logged_in())
{
	//if your not logged in you shouldn't be here
	header("location: user_login.php");
	exit;
}

$template->assign_vars(array(
		'SITENAME' => $system->SETTINGS['sitename'],
		'SITEURL' => $system->SETTINGS['siteurl'],
		'THEME' => $system->SETTINGS['theme'],
		'MAXDOCS' => sprintf($MSG['CM_2026_0036'], $system->SETTINGS['maxtermsandconditions'], $system->SETTINGS['maxuploadsize']),
		));
$template->set_filenames(array(
		'body' => 'upldtermsandconditions.tpl'
		));
$template->display('body');
?>