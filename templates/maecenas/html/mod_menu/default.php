<?php
/*======================================================================*\
|| #################################################################### ||
|| # Package - Joomla Template based on YJSimpleGrid Framework          ||
|| # Copyright (C) 2010  Youjoomla LLC. All Rights Reserved.            ||
|| # license - PHP files are licensed under  GNU/GPL V2                 ||
|| # license - CSS  - JS - IMAGE files  are Copyrighted material        ||
|| # bound by Proprietary License of Youjoomla LLC                      ||
|| # for more information visit http://www.youjoomla.com/license.html   ||
|| # Redistribution and  modification of this software                  ||
|| # is bounded by its licenses                                         ||
|| # websites - http://www.youjoomla.com | http://www.yjsimplegrid.com  ||
|| #################################################################### ||
\*======================================================================*/
// No direct access.
defined('_JEXEC') or die;
$getapps= & JFactory::getApplication();
$template = $getapps->getTemplate();
$menu_path = JPATH_SITE.DIRECTORY_SEPARATOR."templates".DIRECTORY_SEPARATOR.$template.DIRECTORY_SEPARATOR."html".DIRECTORY_SEPARATOR."mod_menu";
require($menu_path.DIRECTORY_SEPARATOR."yjsg_menuswitch.php");

/*yjmega*/ 
if ($params->get('class_sfx') =='nav' || $params->get('class_sfx') =='navd' || $params->get('class_sfx') =='split') {
		
		require( $menu_path.DIRECTORY_SEPARATOR."yjsgmega".DIRECTORY_SEPARATOR."default.php");
		
/*bootstrap pill*/ 
}elseif($params->get('class_sfx') =='nav nav-pills'){
		
		require( $menu_path.DIRECTORY_SEPARATOR."bootstrappill".DIRECTORY_SEPARATOR."default.php");
		
/*bootstrap navbar*/ 		
}elseif($params->get('class_sfx') =='navbar' || $params->get('class_sfx') == 'navbar navbar-inverse'){
		
		require( $menu_path.DIRECTORY_SEPARATOR."bootstrapnavbar".DIRECTORY_SEPARATOR."default.php");
		
/*joomla default*/ 		
}else{
		
		require( $menu_path.DIRECTORY_SEPARATOR."joomladefault".DIRECTORY_SEPARATOR."default.php");
}
?>