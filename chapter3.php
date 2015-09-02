<?php
	$app = array(
		'page_id' 		=> 'term-3',
		'page_type'		=> 'term',
		'title'			=> 'История нефти: Вода, огонь, и железные трубы',
		'description'	=> 'Вода, огонь, и железные трубы ',
		'image'			=> 'term1-img.jpg',
	);
	function renderFeature($media, $n = null, $active = null) {
		require '_feature.php';
	}
?>
	<?php require '_header.php'; ?>
	<?php require '_chapter3-content.php'; ?>



</body>
</html>