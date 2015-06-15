/*
*
* Imgloader
*
*/

jQuery.fn.imgloader = function(params) {
	var waiting = params.waiting ? params.waiting : 8000;
	var callback = params.callback;
	var loaded = 0; /* Загружено ресурсов*/
	var _this = this;
	var successText = 'Loading complete!';
	var failText = 'Imgloader: Warning! Resource loading interrupt!';
	var error = false;
	var styles = '<style type="text/css">.imgloader-wrap{height: 10px;}.imgloader-progress{position: relative; width: 100%; height: 100%;}</style>';
	var $tmpl = '<div class="imgloader-wrap"><div class="imgloader-progress"></div></div>';

	var setProgress = function(val) {
		val = Math.ceil(val);
		_this.css({width: val+'%'});
		console.log('Imgloader: '+val+'% loaded.');
		(val >= 100) && finish();
	};

	setProgress(0);

	var finish = function() {
		clearTimeout(timer);
		if (error) {console.warn(failText)} else {console.log(successText)};
		setTimeout(function(){
			callback();
		}, 500);
	}

	$.each(params.resources, function(i, src){
		var img = document.createElement('img');
		img.onload = function() {
			loaded++;
			var percents = loaded / params.resources.length * 100;
			setProgress(percents);
		}
		img.src = src;
	})

	var timer = setTimeout(function(){
		error = true;
		setProgress(100);
	}, waiting); 
	
}	