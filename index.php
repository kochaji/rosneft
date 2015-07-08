<?php 

	$app = array(
		'page_id' 		=> 'term-1',
		'page_type'		=> 'term',
		'title'			=> 'История нефти: Чудеса инженера Шухова',
		'description'	=> 'Чудеса инженера Шухова.',
		'image'			=> 'term1-img.jpg',
	);

	function renderFeature($media, $n = null, $active = null) {
		require '_feature.php';
	}
?>

	<?php require '_header.php'; ?>
	<?php require '_fixxx.php'; ?>


	<?php //require '_panel.php'; ?>
	<?php //require '_intro.php'; ?>
	<?php //require '_preloader.php'; ?>
	<?php //require '_preface.php'; ?>
	<?php //require '_content.php'; ?>
	<?php //require '_support.php'; ?>
	<?php //require '_footer.php'; ?>

</body>
</html>