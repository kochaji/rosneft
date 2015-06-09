var $intro = $('.js-intro');
var $panel = $('.js-panel');
var $introTitle = $('.js-intro-title');
var $introParagraph = $('.js-first-paragraph');
var screenParams = {};

var fitIntro = function fitIntro() {
	var offset = $('.js-first-paragraph-header').outerHeight(true);
	$intro.height(screenParams.screenHeight - screenParams.panelHeight);
	$introParagraph.css({marginTop:  - offset})
};

var recalcScreenParams = function recalcScreenParams() {
	screenParams = {
		screenHeight: $(window).height(),
		panelHeight: $panel.outerHeight(true),
		titleHeight: $introTitle.outerHeight(true),
		titlePaddings: {
			top: $introTitle.css('padding-top'),
			bottom: $introTitle.css('padding-bottom')
		}
	}
	fitIntro();
};

var resize = function resize() {
	recalcScreenParams();
}

var initApp = function initApp(){
	recalcScreenParams();
};

initApp();

$(window).resize(function(){
	resize();
})