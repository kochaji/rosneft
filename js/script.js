
var $intro = $('.js-intro');
var $introContent = $('.js-intro-content');
var $introBg = $('.js-intro-bg');
var $panel = $('.js-panel');
var $introTitle = $('.js-intro-title');
var $prefaceHeader = $('.js-preface-header');
var $introTitleScreen = $('.js-intro-title-screen') 

var $stickyWrap = $('.js-sticky-wrap');
var $stickyRails = $('.js-sticky-rails');
var $stickySidebar = $('.js-sticky-sidebar')

var screenParams = {};

var scrollTo = function scrollTo(pos) {
	$('html,body').animate({
		scrollTop: pos - screenParams.panelHeight - 30
	})
};

var fitIntro = function fitIntro() {
	var introHeight = screenParams.screenHeight - screenParams.panelHeight - $prefaceHeader.outerHeight(true); 
	var bgHeight = (screenParams.screenHeight - screenParams.panelHeight) * 1.2;
	$intro.height(introHeight);
	$introBg.height(bgHeight);
};

var fitSidebar = function fitSidebar() {
	$stickyRails.css({
		height: $stickyWrap.outerHeight()
	})
	$stickySidebar.css({
		width: $stickyRails.width() - 15
	})
	$stickySidebar.addClass('visible');
}

var recalcScreenParams = function recalcScreenParams() {
	screenParams = {
		screenHeight: $(window).height(),
		panelHeight: $panel.outerHeight(true),
		titleHeight: $introTitle.outerHeight(true),
		titlePaddings: {
			top: $introTitle.css('padding-top'),
			bottom: $introTitle.css('padding-bottom')
		}
	};
	fitIntro();
	$.waypoints('refresh');

};

var resize = function resize() {
	recalcScreenParams();
}

var initApp = function initApp(){
	recalcScreenParams();
	fitSidebar();
};

var changeItem = function changeItem(item) {
	var $item = $(item);
	$item.closest('.js-items').find('.js-item').removeClass('active');
	$item.addClass('active');
};


var initWaypoints = function initWaypoints() {
	$stickyRails.waypoint({
		handler: function(dir) {
			if (dir == 'down') {
				$stickySidebar.addClass('fixed').removeClass('top');
			} else {
				$stickySidebar.removeClass('fixed').addClass('top');
			}
		},
		offset: screenParams.panelHeight + 50
	})

	$('.js-support-waypoint').waypoint({
		handler: function(dir) {
			if (dir == 'down') {
				$stickySidebar.addClass('bottom').removeClass('fixed');
			} else {
				$stickySidebar.removeClass('bottom').addClass('fixed');
			}

		},
		offset: 120/1 + $stickySidebar.outerHeight(true) /* 120 = topPanelHeight + sidbar.fixed top */
	})

	$('.js-title').waypoint({
		handler: function(dir) {
			var id = $(this).attr('id');
			var $link = $('[href="#'+id+'"]').parent();
			if (dir == 'up') {
				if (!$link.index()) return;
				$link = $('.js-item').eq($link.index()-1);
			}
			changeItem($link);
		},
		offset: $.waypoints('viewportHeight')/2 + screenParams.panelHeight
	})


	/* Video */

	/* change video background */
	$('.js-feature-video').waypoint({
		handler: function(dir) {
			$('.js-feature-video').removeClass('active');
			var curr = $('.js-feature-video').index(this);
			var next = curr + 1;
			var ix = dir == 'down' ? next : curr;
			$('.js-feature-video').eq(ix).addClass('active');
		}, offset: - $(this).outerHeight(true)
	})

	/* stop or play video */
	$('.js-feature-video').waypoint({
		handler: function(dir) {
			var video = this.getElementsByTagName('video')[0];
			console.log(video)
			video[ dir == 'down' ? 'play' : 'pause' ]();
		}, offset: $.waypoints('viewportHeight')/2
	})

	$('.js-feature-video').waypoint({
		handler: function(dir) {
			var video = this.getElementsByTagName('video')[0];
			console.log(video)
			video[ dir == 'up' ? 'play' : 'pause' ]();
		}, offset: - $(this).outerHeight(true)/2
	})

	/* show or hide nav */
	$('.js-feature-video').waypoint({
		handler: function(dir) {
			$stickySidebar[dir == 'up' ? 'addClass' : 'removeClass']('visible');
		}, offset: $.waypoints('viewportHeight') - (screenParams.panelHeight + $stickySidebar.outerHeight(true))
	})

	$('.js-feature-video').waypoint({
		handler: function(dir) {
			$stickySidebar[dir == 'down' ? 'addClass' : 'removeClass']('visible');
		}, offset: - $(this).outerHeight(true) + screenParams.panelHeight
	})

	/*
	$('.js-video-featue').waypoint({
		handler: function(dir) {
			this[ dir=='down' ? 'play' : 'pause' ]();
		},
		offset: $.waypoints('viewportHeight')/2
	})

	$('.js-video-featue').waypoint({
		handler: function(dir) {
			this[ dir=='up' ? 'play' : 'pause' ]();
		},
		offset: $(this).height() * -0.4 //- ($(this).height() - 200)  //- $(this).height()*0.7 // + $.waypoints('viewportHeight')/2
	})
	*/

};


$('.loader').imgloader({
	resources: [
		'../img/mendeleev.jpg',
		'../img/young-shuhov.jpg',
		'../img/1.jpg',
		'../img/2.jpg',
		'../img/3.jpg',
		'../img/4.jpg',
		'../img/pipes.jpg',
		'../img/ships.jpg',
		'../img/horizon.jpg',
		'../img/horizon-2.jpg',
		'../img/epilogue.jpg',
	],
	waiting: 12000,
	callback: function() {
		$('.loader-overlay').remove();
		$('body').removeClass('fixed');
		$('.js-panel').removeClass('top');
		initApp();
		initWaypoints();
	}
});


$('.js-item').click(function(e){
	e.preventDefault();
	var $this = $(this);
	//changeItem($this);
	var position = $($this.find('a').attr('href')).offset().top
	scrollTo(position);
})

$(window).resize(function(){
	resize();
	$.waypoints('refresh');
});


window.v = $('.js-video-featue')

