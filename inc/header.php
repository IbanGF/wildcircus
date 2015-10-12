<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Wild circus</title>
  <link href='https://fonts.googleapis.com/css?family=Sancreek' rel='stylesheet' type='text/css' />
  <link rel="stylesheet" href="./css/style.css" />
  <?php if ($current == 'act'): ?><link rel="stylesheet" href="./css/lazyYT.css" />
  	<link rel="stylesheet" href="./css/credits.css" /><?php endif ?>
  <?php if ($current == 'contact'): ?><link rel="stylesheet" href="./css/contact.css" /><?php endif ?>
  <?php if ($current == 'dates'): ?><link rel="stylesheet" href="./css/calendar.css" /><?php endif ?>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script type="text/javascript" src="js/lazyYT.js"></script>
  <script type="text/javascript" src="js/calendar.js"></script>
</head>
<body>

	<div class="rideaux">

		<header>
			<h1 class="title_shadow">Wild Circus</h1>
			<ul>
			  <li><a href="index.php">Wild circus</a></li>
			  <li><a href="acts.php">Acts</a></li>
			  <li><a href="calendar.php">Dates</a></li>
			  <li><a href="contact.php">Contact us</a></li>
			</ul>
		</header>
		<div class="rideau_gauche"></div>
		<div class="rideau_droit"></div>
