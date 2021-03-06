<?php
/**
 * @version    $Id$
 * @package    JSN.ImageShow
 * @author     JoomlaShine Team <support@joomlashine.com>
 * @copyright  Copyright (C) 2012 JoomlaShine.com. All Rights Reserved.
 * @license    GNU/GPL v2 or later http://www.gnu.org/licenses/gpl-2.0.html
 *
 * Websites: http://www.joomlashine.com
 * Technical Support:  Feedback - http://www.joomlashine.com/contact-us/get-support.html
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

// Import Joomla view library
jimport('joomla.application.component.view');

/**
 * Upgrader view of JSN ImageShow component
 *
 * @package  JSN.ImageShow
 * @since    2.5
 *
 */
class ImageShowViewUpgrade extends JSNUpgradeView
{
	/**
	 * Display method
	 *
	 * @return	void
	 */
	function display($tpl = null)
	{
		// Get config parameters
		$config = JSNConfigHelper::get();

		// Set the toolbar
		JToolBarHelper::title(JText::_('JSN_SAMPLE_UPDATE_PRODUCT'));

		// Add assets
		$this->_document = JFactory::getDocument();

		// Get messages
		$msgs = '';
		if ( ! $config->get('disable_all_messages'))
		{
			$msgs = JSNUtilsMessage::getList('CONFIGURATION');
			$msgs = count($msgs) ? JSNUtilsMessage::showMessages($msgs) : '';
		}

		$this->assignRef('msgs', $msgs);
		$this->_addAssets();
		$this->addToolbar();
		// Display the template
		parent::display($tpl);
	}

	/**
	 * Add the page title and toolbar.
	 *
	 * @return void
	 */

	protected function addToolbar()
	{
		jimport('joomla.html.toolbar');

		JToolBarHelper::title(JText::_('JSN_IMAGESHOW').': '.JText::_('UPGRADER_UPGRADER'));

		$path		= JPATH_COMPONENT_ADMINISTRATOR . DS . 'helpers';
		$toolbar 	= JToolBar::getInstance('toolbar');
		$toolbar->addButtonPath($path);
		$toolbar->appendButton('JSNHelpButton', '', '', 'index.php?option=com_imageshow&controller=help&tmpl=component', 960, 480);
		JToolBarHelper::divider();
		$toolbar->appendButton('JSNMenuButton');
	}

	/**
	 * Add nesscessary JS & CSS files
	 *
	 * @return void
	 */

	private function _addAssets()
	{
		$objJSNMedia = JSNISFactory::getObj('classes.jsn_is_media');
		
		! class_exists('JSNBaseHelper') OR JSNBaseHelper::loadAssets();

		$objJSNMedia = JSNISFactory::getObj('classes.jsn_is_media');
		$objJSNMedia->addStyleSheet(JURI::root(true) . '/administrator/components/com_imageshow/assets/css/imageshow.css');
		$objJSNMedia->addScript(JURI::root(true) . '/administrator/components/com_imageshow/assets/js/joomlashine/imageshow.js');
	}
}
