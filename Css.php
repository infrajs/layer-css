<?php

//Свойство css	
namespace infrajs\controller;

use infrajs\controller\Controller;

class Css
{
	public static $ready=array();
	public static function check(&$layer)
	{
		if (!isset($layer['css'])) return;
		if (static::$ready[$css]) return;
		Each::fora($layer['css'], function ($css) use (&$layer) {
			Css::$ready[$css] = true;
			$code = Load::loadTEXT($css);
			View::html('<style>'.$code.'</style>', $layer['div']);
			$r=null; return $r;
		});
	}
}
