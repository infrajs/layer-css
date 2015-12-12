<?php
namespace infrajs\layer\css;
use infrajs\controller\Layer;
use infrajs\event\Event;
use infrajs\path\Path;
use infrajs\infra\Infra;

Infra::req('controller');

Event::handler('layer.onshow', function (&$layer) {
	if (Layer::pop($layer, 'onlyclient')) return;
	Css::check($layer);
}, 'css');