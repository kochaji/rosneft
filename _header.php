<?php


	switch ($app['page_type']) {
		case 'main':
			$a = 'main';
			break;
		case 'test':
			$a = 'test';
			break;
		case 'infographic':
			$a = 'infographic';
			break;
		default:
			# code...
			break;
	}

?>


<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title><?= $app['title'] ?></title>
	<meta name="description" content="<?= $app['description'] ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<meta property="og:type"        content="website" />
	<meta property="og:url"         content="http://<?= $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ?>" />
	<meta property="og:title"       content="<?= $app['title'] ?>" />
	<meta property="og:description" content="<?= $app['description'] ?>" />
	<meta property="og:image" 		content=" http://<?= $_SERVER['HTTP_HOST'].'/img/'.$app['image'].'.jpg' ?>" />

	<link href='http://fonts.googleapis.com/css?family=PT+Sans+Caption:400,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=PT+Serif&subset=latin,cyrillic' rel='stylesheet' type='text/css'>

	<link rel="shortcut icon" href="favicon.ico">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/social-likes/3.0.14/social-likes_flat.css">
	<link rel="stylesheet" href="css/style.css">
	<?php if ($app['page_type'] == 'test') : ?>
	<link rel="stylesheet" href="css/test.css">
	<?php elseif ($app['page_type'] == 'infographic') : ?>
	<link rel="stylesheet" href="css/infographic.css">
	<?php endif; ?>

	<script src="//use.typekit.net/dnu0aez.js"></script>
	<script>try{Typekit.load({ async: true });}catch(e){}</script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script>
		window.jQuery || document.write('<scr'+'ipt src="assets/js/jquery-1.11.1.min.js"></scr'+'ipt>');
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.5/waypoints.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/social-likes/3.0.14/social-likes.min.js"></script>
	<script src="js/imgloader.js"></script>

</head>
<body class="" data-page-type="<?= $app['page_type'] ?>" data-page-id="<?= $app['page_id'] ?>">
