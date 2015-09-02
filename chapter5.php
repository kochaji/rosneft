<?php
	$app = array(
		'page_id' 		=> 'term-5',
		'page_type'		=> 'term',
		'title'			=> 'История нефти: современность и перспективы российской нефтяной отрасли',
		'description'	=> 'Что дальше: современность и перспективы российской нефтяной отрасли',
		'image'			=> 'term1-img.jpg',
	);
	function renderFeature($media, $n = null, $active = null) {
		require '_feature.php';
	}
?>
	<?php require '_header.php'; ?>
	<?php require '_chapter5-content.php'; ?>



</body>
</html>