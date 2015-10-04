<?php

	$app = array(
		'page_id' 		=> 'term-1',
		'page_type'		=> 'term',
		'title'			=> 'История нефти: Чудеса инженера Шухова',
		'description'	=> 'Чудеса инженера Шухова',
		'image'			=> 'term1-img.jpg',
	);

	function renderFeature($media, $n = null, $active = null) {
		require '_feature.php';
	}
?>

	<?php require '_header.php'; ?>
	<?php require '_fixxx.php'; ?>


</body>
</html>