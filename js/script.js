
var path = '';
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

var mobWidth = 1024

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

var detectPage = function() {
	var pageId = $('body').data('page-id');
	var pageType = $('body').data('page-type');
	console.log(pageId, pageType);
	$('.timeline').find('[data-nav-id='+pageId+']').addClass('active');
}

var initApp = function initApp(){
	recalcScreenParams();
	fitSidebar();
	detectPage();
};

var changeItem = function changeItem(item) {
	var $item = $(item);
	$item.closest('.js-items').find('.js-item').removeClass('active');
	$item.addClass('active');
};

function videoControl(controls, action) {
	var $feature = $(controls).closest('.feature');
	var video = $feature.find('video').get(0);
	var action = action ? action : (video.paused ? 'play' : 'pause');
	video[action]();
	$feature[ action == 'pause' ? 'removeClass' : 'addClass' ]('playing');
	if ($(window).width() > mobWidth ) return;
	$('.js-panel')[ action == 'pause' ? 'removeClass' : 'addClass']('top'); //hide top panel on mobile devices when play video
}


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
			if ( $(window).width() < mobWidth) return;
			videoControl(this, dir == 'down' ? 'play' : 'pause');
		}, offset: $.waypoints('viewportHeight')/2
	})

	$('.js-feature-video').waypoint({
		handler: function(dir) {
			if ( $(window).width() < mobWidth) return;
			videoControl(this, dir == 'up' ? 'play' : 'pause');
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

	$('.js-feature-video').waypoint({
		handler: function(dir) {
			//$('.js-feature-video').find('video')[dir=='up' ? 'addClass' : 'removeClass']('hidden');
			$(this).find('video')[dir=='up' ? 'addClass' : 'removeClass']('hidden');
		}, offset: $.waypoints('viewportHeight')
	})

};


$('.loader').imgloader({
	resources: [
		path + 'img/mendeleev.jpg',
		path + 'img/young-shuhov.jpg',
		path + 'img/1.jpg',
		path + 'img/2.jpg',
		path + 'img/3.jpg',
		path + 'img/4.jpg',
		path + 'img/pipes.jpg',
		path + 'img/ships.jpg',
		path + 'img/horizon.jpg',
		path + 'img/horizon-2.jpg',
		path + 'img/epilogue.jpg',
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


$('.feature__controls').click(function(){
	if ( $(window).width() > mobWidth) return;
	videoControl(this)
})


document.createElement('figure');
document.createElement('figcaption');
