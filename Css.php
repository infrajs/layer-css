<?php

//Свойство css	
namespace infrajs\controller\ext;

use infrajs\controller\Controller;

class css
{
	public function check(&$layer)
	{
		if (!isset($layer['css'])) {
			return;
		}
		$sotre = Controller::store();
		if (!$store['css']) {
			$store['css'] = array();
		}
		if ($store['css'][$css]) {
			return;
		}
		Each::fora($layer['css'], function ($css) use (&$layer, &$store) {
			$store['css'][$css] = true;
			$code = Load::loadTEXT($css);
			View::html('<style>'.$code.'</style>', $layer['div']);
		});
	}
}
