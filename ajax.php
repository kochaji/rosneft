<?php 

	if(!isset($_GET['action']) || $_GET['action'] == '') exit;

	$action = (string)$_GET['action'];

	switch ($action) {
		case 'getQuestions':
			$result = require_once 'questions.php';
			echo json_encode($result);
			exit;
			break;
		
		default:
			# code...
			break;
	}