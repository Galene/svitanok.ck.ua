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
defined( '_JEXEC' ) or die( 'Restricted index access' );
//$custom1   					     = $this->params->get("custom1");
/* K2 CSS */
if (JFactory::getApplication()->input->get( 'option' ) == 'com_k2' 
	|| JModuleHelper::getModule( 'k2_content' )
	|| JModuleHelper::getModule( 'k2_tools' )
	|| JModuleHelper::getModule( 'k2_comments' )
	){
		$document->addStyleSheet($yj_site.'/css/customk.css');
}
/*responsive layout*/
$document->addScript($yj_site.'/src/yjresponsive.js');
$document->addCustomTag('<link rel="stylesheet" href="'.$yj_site.'/css/yjresponsive.css" type="text/css" />');
$document->addCustomTag('<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>');
$document->addCustomTag('<meta name="HandheldFriendly" content="true" />');
$document->addCustomTag('<meta name="apple-touch-fullscreen" content="YES" />');


//TOP MENU LOCATION
$topMenuLocation 	 =1; // 1 = inside the header block next to logo

/* Portfisimo JS */
$document->addScript($yj_site."/src/styles.js");


// GRID3 MODS
$grid3 = false;
for( $i=1; $i<=5; $i++ ){
	$mod_user = $this->countModules('user'.$i);
	if( $mod_user){
		$grid3 = true;
		break;
	}
}
// GRID5 GRID6 MODS
$yjsg6 = false;
for( $i=11; $i<=20; $i++ ){
	$mod_user = $this->countModules('user'.$i);
	if( $mod_user){
		$yjsg6 = true;
		break;
	}
}
// GRID7 MODS
$yjsg7 = false;
for( $i=21; $i<=25; $i++ ){
	$mod_user = $this->countModules('user'.$i);
	if( $mod_user){
		$yjsg7 = true;
		break;
	}
}
?>