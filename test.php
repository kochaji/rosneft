<?php require_once '_header.php' ?>

<link rel="stylesheet" href="css/test.css">
<script src="js/test.js"></script>

<?php require_once '_panel.php' ?>

<div class="test-screen js-test-screen">
	<div class="test-screen__bg">
		<video autoplay class="test-screen__bg__video" loop muted>
			<source src="video/1.webm" type="video/webm; codecs=&quot;vp8, vorbis&quot;">
			<source src="video/1.webm"  type="video/mp4; codecs=&quot;avc1.42E01E, mp4a.40.2&quot;">
			<source src="video/1.webm"  type="video/ogg; codecs=&quot;theora, vorbis&quot;">
		</video>
	</div>
	<div class="vcenter">
		<div class="vcentered">
			<div class="container">
				<div class="row">
					<div class="col-md-16 col-md-offset-2">
						<div class="test js-test in-progress" id="testApp">
							<div class="test__inner">
								<div class="test__header row">
									<h3 class="title test__result__header pull-left for-results">
										Вы правильно ответили на
										<span class="h2 title test__result__header__scores js-test-scores">
											
										</span>
										из
										<span class="test__result__header__total js-test-scores-total">
											
										</span>
										вопросов
									</h3>
									<div class="test__header__numbers for-progress">
										<div class="h1 test__header__numbers__current js-test-current">5</div>
										/
										<div class="h2 test__header__numbers__total js-test-total">21</div>
									</div>
								</div>
								<h2 class="h2 title calc__title js-test-question for-progress"></h2>
								<div class="test__answer__list js-test-answers for-progress">
									<a href="#%answer%" class="test__answer__list__item js-test-answer" data-answer="%data%">
										<span class="h5">%answer%</span>
									</a>
								</div>
							</div>
							<div class="test__results for-results">
								<div class="test__inner">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. In fugit porro repellat excepturi, eius tempore, error, minima doloribus laboriosam molestias cupiditate! Ratione id, sed itaque rem quisquam natus non hic.
								</div>
							</div>
							<div class="test__text test__inner for-progress">
								<div class="js-test-text">
								</div>
								<div class="test__btn test__btn--next js-test-next">
									Следующий вопрос <span>>></span>
								</div>
								<div class="test__btn test__btn--to-results js-test-next">
									Результат >>
								</div>
							</div>
							<div class="test__footer for-results test__inner">
								<div class="row">
									<div class="pull-left">
										<span>Поделиться</span>
										<div class="social-likes" data-zeroes="yes">
											<div class="vkontakte"></div>
											<div class="facebook"></div>
											<div class="twitter"></div>
										</div>
									</div>
									<div class="pull-right">
										<a href="#" class="js-test-start">
											Пройти заново
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



<?php require_once '_support.php' ?>
<?php require_once '_footer.php' ?>