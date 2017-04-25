<?php
namespace infrajs\layer\css;
use infrajs\controller\Layer;
use infrajs\event\Event;

Event::handler('Layer.onshow', function (&$layer) {
	if (Layer::pop($layer, 'onlyclient')) return;
	Css::check($layer);
}, 'css');