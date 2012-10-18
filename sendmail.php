<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8" />
	<title>Sending Mail ...</title>
	<style type="text/css">

		.ok{
			color:#23B3AB;
		}

		.err {
			color:#BD5B3D;
		}

	</style>
</head>
<body>

	<?php

	error_reporting(E_ALL ^ E_NOTICE);

	$admin   = 'info@zahmati.com';

	$name    = $_POST['name'];
	$mail    = $_POST['email'];
	$message = $_POST['message'];
