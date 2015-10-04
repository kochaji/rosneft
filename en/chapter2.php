<?php
	$app = array(
		'page_id' 		=> 'term-2',
		'page_type'		=> 'term',
		'title'			=> 'История нефти: Индустриализация и ее кровь',
		'description'	=> 'Как сын бурлака стал академиком и обеспечил страну нефтью',
		'image'			=> 'term1-img.jpg',
	);
	function renderFeature($media, $n = null, $active = null) {
		require '_feature.php';
	}
?>
	<?php require '_header.php'; ?>
	<?php require '_chapter2-content.php'; ?>



</body>
</html>