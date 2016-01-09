(function () {
	//Свойство css
	infrajs.csscheck=function(layer){
		if(!layer.css)return;
		infra.fora(layer.css,function(css){
			infra.loadCSS(css);
		});
	}
})();