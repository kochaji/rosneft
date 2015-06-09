
var $intro = $('.js-intro');
var $introContent = $('.js-intro-content');
var $introBg = $('.js-intro-bg');
var $panel = $('.js-panel');
var $introTitle = $('.js-intro-title');
var $prefaceHeader = $('.js-preface-header');
var $introTitleScreen = $('.js-intro-title-screen') 
var screenParams = {};

var fitIntro = function fitIntro() {
	var introHeight = screenParams.screenHeight - screenParams.panelHeight - $prefaceHeader.outerHeight(true); 
	$intro.height(introHeight)//(screenParams.screenHeight - screenParams.panelHeight - $prefaceHeader.outerHeight(true));
	$introBg.height( introHeight + introHeight*.3  );
	console.log( Math.ceil(screenParams.screenHeight + screenParams.screenHeight*0.001))
	//var offset = $('.js-first-paragraph-header').outerHeight(true);
	//$intro.height(screenParams.screenHeight - screenParams.panelHeight);
	//$introParagraph.css({marginTop:  - offset})
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