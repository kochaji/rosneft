

<?php
	$app = array(
		'page_id' 		=> 'test',
		'page_type'		=> 'test',
		'title'			=> 'История нефти: проверь себя',
		'description'	=> 'Хорошо ли вы знаете историю российской нефти?',
		'image'			=> 'test-img.jpg',
	);

	require_once '_header.php';
	require_once '_panel.php';
?>

<div class="test-screen js-test-screen">
	<div class="test-screen__bg">
		<video autoplay class="test-screen__bg__video" loop muted>
			<source src="video/1.webm" type="video/webm; codecs=&quot;vp8, vorbis&quot;">
			<source src="video/1.mp4"  type="video/mp4; codecs=&quot;avc1.42E01E, mp4a.40.2&quot;">
			<source src="video/1.ogv"  type="video/ogg; codecs=&quot;theora, vorbis&quot;">
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
									<p>
										&laquo;Вам, господа русские капиталисты, предстоит осветить и&nbsp;смазать Россию и&nbsp;Европу, разделить эту службу с&nbsp;Америкой да&nbsp;по&nbsp;пути превратить четырехкопеечный продукт в&nbsp;пятирублевый, отчего пристанет кое-что и&nbsp;к&nbsp;вашим рукам, и&nbsp;к&nbsp;рукам тысяч рабочих, которые потребуются для того, чтобы поворотить эти миллионы пудов, втуне лежащие под землей&raquo;
									</p>
									<p style="margin: 0">
										Д.&nbsp;И.&nbsp;Менделеев
									</p>
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
									<div class="col-lg-14">
										<span style='margin-right: 15px'>Поделиться</span>
										<div class="social-likes" data-zeroes="yes" data-counters="no">
											<div class="facebook" title="Поделиться на Facebook">Facebook</div>
											<div class="vkontakte" title="Поделиться Вконтакте">Вконтакте</div>
											<div class="twitter" title="Ретвитнуть">Twitter</div>
										</div>
									</div>
									<div class="col-lg-6">
										<a href="#" class="test__start js-test-start">
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



<div class="white-block">
  <?php require '_support.php'; ?>
    <div class="footer">
     <div class="announce">
        <div class="container">
          <h2 class="h2 title">
            История нефти
          </h2>
          <div class="row">
          	<!-- item -->
          	<div class="col-sm-9">
          	  <a href="chapter5.php" class="announce__link">
          	    <div class="announce__chapter">
          	      <div class="announce__chapter__bg" style="background: url(img/chapter5/chapter5__preview.jpg) no-repeat 50% 50%; background-size: cover"></div>
          	      <div class="announce__chapter__content text-center">
          	        <div class="vcenter">
          	          <div class="vcentered">
          	            <h2 class="h2 title">
          	              Что дальше
          	            </h2>
          	          </div>
          	        </div>
          	      </div>
          	      <div class="announce__chapter__date">
          	        <span class="announce__chapter__date__inner">После 1991</span>
          	      </div>
          	    </div>
          	  </a>
          	</div>
          	<!-- end item -->
          	<!-- item -->
          	<div class="col-sm-9 col-sm-offset-2">
          	  <a href="chapter.php" class="announce__link">
          	    <div class="announce__chapter">
          	      <div class="announce__chapter__bg" style="background: url(img/infographic/infographic__preview.png) no-repeat 50% 50%; background-size: cover"></div>
          	      <div class="announce__chapter__content text-center">
          	        <div class="vcenter">
          	          <div class="vcentered">
          	            <h2 class="h2 title">
          	              История нефтедобычи в России
          	            </h2>
          	          </div>
          	        </div>
          	      </div>
          	      <div class="announce__chapter__date">
          	        <span class="announce__chapter__date__inner">Инфографика</span>
          	      </div>
          	    </div>
          	  </a>
          	</div>
          	<!-- end item -->


          </div>
        </div>
    </div>
    <div class="container">
      <div class="copyright">
        © Интерфакс
      </div>
    </div>
  </div>

  <script src="js/script.js"></script>
  <?php if ($app['page_type'] == 'test') : ?>
  <script src="js/test.js"></script>
  <?php elseif ($app['page_type'] == 'infographic') : ?>
  <script src="js/animate.js"></script>
  <?php endif ?>
</div>

