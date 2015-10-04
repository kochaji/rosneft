<?php 
	function renderFeature($media, $n=null) {
		$type = gettype($media);
		require '_feature.php';
	}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>История нефти</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<meta property="og:type"        content="website" />
	<meta property="og:url"         content="" />
	<meta property="og:title"       content="" />
	<meta property="og:description" content="" />
	<meta property="og:image" content="" />

	<link href='http://fonts.googleapis.com/css?family=PT+Sans+Caption:400,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=PT+Serif&subset=latin,cyrillic' rel='stylesheet' type='text/css'>

	<link rel="shortcut icon" href="favicon.ico"></link>
	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../css/style.css">

	<script src="//use.typekit.net/dnu0aez.js"></script>
	<script>try{Typekit.load();}catch(e){}</script>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script>
		window.jQuery || document.write('<scr'+'ipt src="../assets/js/jquery-1.11.1.min.js"></scr'+'ipt>');
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.5/waypoints.min.js"></script>
	<script src="../js/imgloader.js"></script>
	

</head>
<body class="">


	<?php require '_fixxx.php'; ?>


	<?php //require '_panel.php'; ?>
	<?php //require '_intro.php'; ?>
	<?php //require '_preloader.php'; ?>
	<?php //require '_preface.php'; ?>
	<?php //require '_content.php'; ?>
	<?php //require '_support.php'; ?>
	<?php //require '_footer.php'; ?>

	<script src="../js/script.js"></script>
</body>
</html>