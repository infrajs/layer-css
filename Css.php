<?php

//Свойство css	
namespace infrajs\layer\css;

use infrajs\controller\Controller;
use infrajs\each\Each;
use infrajs\load\Load;
use infrajs\view\View;

class Css
{
	public static $ready=array();
	public static function check(&$layer)
	{
		if (!isset($layer['css'])) return;
		Each::exec($layer['css'], function &($css) use (&$layer) {
			if (!empty(static::$ready[$css])) return;
			Css::$ready[$css] = true;
			$code = Load::loadTEXT($css);
			View::html('<style>'.$code.'</style>', $layer['div']);
			$r=null; return $r;
		});
	}
}
