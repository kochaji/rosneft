<?php
	$app = array(
		'page_id' 		=> 'term-4',
		'page_type'		=> 'term',
		'title'			=> 'История нефти: Индустриализация и ее кровь',
		'description'	=> 'Эра великих романтиков',
		'image'			=> 'term1-img.jpg',
	);
	function renderFeature($media, $n = null, $active = null) {
		require '_feature.php';
	}
?>
	<?php require '_header.php'; ?>
	<?php require '_chapter4-content.php'; ?>



</body>
</html>