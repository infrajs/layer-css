Event.handler('layer.onshow', function (layer){
	//css
	if(infrajs.ignoreDOM(layer))return;
	infrajs.csscheck(layer);
},'css:parsed');