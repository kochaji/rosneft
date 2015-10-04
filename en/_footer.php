<div class="footer">
	<div class="announce">
		<div class="container">
			<h2 class="h2 title">
				История нефти
			</h2>
			<div class="row">
				<!-- item -->
				<div class="col-sm-9">
					<a href="chapter2.php" class="announce__link">
						<div class="announce__chapter">
							<div class="announce__chapter__bg" style="background: url(img/chapter2-announce.jpg) no-repeat 50% 50%; background-size: cover"></div>
							<div class="announce__chapter__content text-center">
								<div class="vcenter">
									<div class="vcentered">
										<h2 class="h2 title">
											Первые пятилетки и&nbsp;индустриализация
										</h2>
									</div>
								</div>
							</div>
							<div class="announce__chapter__date">
								<span class="announce__chapter__date__inner">1917-1941</span>
							</div>
						</div>
					</a>
				</div>
				<!-- end item -->
				<!-- item -->
				<div class="col-sm-9 col-sm-offset-2">
					<a href="chapter3.php" class="announce__link">
						<div class="announce__chapter">
							<div class="announce__chapter__bg" style="background: url(img/chapter3-announce.jpg) no-repeat 50% 50%; background-size: cover"></div>
							<div class="announce__chapter__content text-center">
								<div class="vcenter">
									<div class="vcentered">
										<h2 class="h2 title">
											Годы Великой Отечественной Войны
										</h2>
									</div>
								</div>
							</div>
							<div class="announce__chapter__date">
								<span class="announce__chapter__date__inner">1941-1945</span>
							</div>
						</div>
					</a>
				</div>
				<!-- end item -->
			</div>
			<div class="row">
				<!-- item -->
				<div class="col-sm-9">
					<a href="chapter4.php" class="announce__link">
						<div class="announce__chapter">
							<div class="announce__chapter__bg" style="background: url(img/chapter4/chapter4__preview.jpg) no-repeat 50% 50%; background-size: cover"></div>
							<div class="announce__chapter__content text-center">
								<div class="vcenter">
									<div class="vcentered">
										<h2 class="h2 title">
											Эра великих романтиков
										</h2>
									</div>
								</div>
							</div>
							<div class="announce__chapter__date">
								<span class="announce__chapter__date__inner">1941-1991</span>
							</div>
						</div>
					</a>
				</div>
				<!-- end item -->
				<!-- item -->
				<div class="col-sm-9 col-sm-offset-2">
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
			</div>

			<div class="row">
				<!-- item -->
				<div class="col-sm-9">
					<a href="chapter.php" class="announce__link">
						<div class="announce__chapter">
							<div class="announce__chapter__bg" style="background: url(img/test__preview.jpg) no-repeat 50% 50%; background-size: cover"></div>
							<div class="announce__chapter__content text-center">
								<div class="vcenter">
									<div class="vcentered">
										<h2 class="h2 title">
											Проверь себя
										</h2>
									</div>
								</div>
							</div>
							<div class="announce__chapter__date">
								<span class="announce__chapter__date__inner">Тест</span>
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