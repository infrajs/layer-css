import { Tpl } from '/vendor/infrajs/controller/src/Tpl.js'
import { Event } from '/vendor/infrajs/event/Event.js'
import { Load } from '/vendor/infrajs/load/Load.js'
import { Each } from '/vendor/infrajs/each/Each.js'

Event.handler('Layer.onshow', function (layer) {

	if (Tpl.ignoreDOM(layer)) return;
	if (!layer.css) return;
	Each.exec(layer.css, function (css) {
		Load.loadCSS(css);
	});
}, 'css:parsed');