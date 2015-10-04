<?php 

	$app = array(
		'page_id' 		=> 'infographic',
		'page_type'		=> 'infographic',
		'title'			=> 'Инфографика:' ,
		'description'	=> 'История нефтедобычи в России в цифрах',
		'image'			=> 'infographic-bg.jpg',
	);

	require_once '_header.php';
	require_once '_panel.php';
?>

	<?php require '_charts.php'; ?>

</body>
</html>