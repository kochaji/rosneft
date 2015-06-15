<div class="loader-overlay">
	<div class="imgloader-wrap">
		<div class="imgloader-progress loader">
		</div>
	</div>
	<div class="vcenter text-center">
		<div class="vcentered">
			Загрузка...
		</div>
	</div>
</div>

<script>
	/* preloader */
	$('.loader').imgloader({
		resources: [
			'http://lorempixel.com/100/200/abstract/',
			'http://lorempixel.com/1920/1080/abstract/',
			'http://lorempixel.com/1920/1080/city/',
			'http://lorempixel.com/1920/1080/people/',
			'http://lorempixel.com/1920/1080/transport/',
			'http://lorempixel.com/1920/1080/animals/',
			'http://lorempixel.com/1920/1080/food/'
		],
		waiting: 12000,
		callback: function() {
			$('.loader-overlay').remove();
			$('body').removeClass('fixed');
			$('.js-panel').removeClass('top');
		}
	});
</script>