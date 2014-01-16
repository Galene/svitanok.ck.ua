<?php
defined('_JEXEC') or die('Restricted access');

class modJUMenuHelper
{
	private static $loaded = false;

	public static function renderMenu()
	{
	    $menu = self::build();

		$js = 'window.addEvent(\'domready\', function(){
				var JUMenu = new Element( "li", { "class": "dropdown" } );
				JUMenu.innerHTML = \''.$menu.'\';
				$( "menu" ).adopt( JUMenu );
			 });';
		$document = JFactory::getDocument();
		$document->addScriptDeclaration($js);
	}

	private static function build()
	{
		$site = 'http://joomla-ua.org/';

		$out = '<a class="dropdown-toggle"  data-toggle="dropdown" href="#">Підтримка <span class="caret"></span></a>';
		$out .= '<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">';
		$out .= '<li><a href="'.$site.'" target="_blank">Joomla! Україна</a><li><a href="'.$site.'news" target="_blank">Новини Joomla! Україна</a></li><li><a href="http://feeds.feedburner.com/joomla-ua?format=xml" target="_blank">RSS</a></li>';

		$out .= '<li><a href="'.$site.'localization" target="_blank">Локалізація</a></li><li><a href="'.$site.'joomla" target="_blank">Завантажити Joomla</a></li><li><a href="http://demo.joomla-ua.org/3.x/" target="_blank">Демо-сайт Joomla 3.x</a></li>';

		$out .= '<li class="divider"></li>';

		$out .= '<li><a href="'.$site.'forum/" target="_blank">Підтримка Joomla! Україна</a></li><li><a href="'.$site.'forum/viewforum.php?f=188" target="_blank">Форум підтримки Joomla 3.2</a></li>';

		$out .= '<li class="divider"></li>';

		$out .= '<li><a href="'.$site.'joomla-in-ukraine" target="_blank">Проект Joomla!® в Україні</a></li>';

		$out .= '<li><a href="'.$site.'donation" target="_blank">Пожертвування проекту</a></li>';
		$out .= '</ul>';
		return $out;
	}
}