<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<title>CABOT CRUISES: <?php echo $title; ?></title>
	<link href="img/apple-touch-icon.png" rel="apple-touch-icon" sizes="180x180">
	<link href="img/favicon-32x32.png" rel="icon" sizes="32x32" type="image/png">
	<link href="img/favicon-16x16.png" rel="icon" sizes="16x16" type="image/png">
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
	<link rel="icon" href="/favicon.ico" type="image/x-icon">
	<link href="/site.webmanifest" rel="manifest">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<link href="css/slick-theme.css" rel="stylesheet">
	<link href="css/slick.css" rel="stylesheet">
	<link href="css/styles.css" media="screen" rel="stylesheet" type="text/css">
	<link href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Crimson+Text" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Assistant" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">
</head>
<body>
	<header>
		<div class="header">
			<img alt="Cabot Cruises Logo" src="img/logo.png" srcset="img/logo.png 1x, img/logo-pink.png 2x, img/logo-yellow.png 3x">
			<div class="header-right">
				<a class="telephone" href="tel:18665771000">1-800-123-4567</a>
			</div>
		</div>
	</header><!-- NAVIGATION -->
	<div class="navwrap clearfix">
		<div class="topnav clearfix" id="myTopnav">
			<?php $page=$_REQUEST['page']; ?><a href="index.php?page=home">HOME</a> <a href="cruises.php?page=cruises">CRUISES</a> <a href="book.php?page=book">BOOK</a>
			<div class="dropdown">
				<button class="dropbtn">AGENTS &nbsp;&#9662;</button>
				<div class="dropdown-content">
					<a href="agentSchmoe.php?page=agentSchmoe">Joe Schmoe</a> <a href="agentSusan.php?page=agentSusan">Susan Williams</a>
				</div>
			</div><a class="icon" href="javascript:void(0);" onclick="myFunction()"><i class="fa fa-bars"></i></a>
			<div class="search">
				<input id="search" name="search" placeholder="Search..." type="search"> <button class="mySearch"><i class="fa fa-search fa-2x"></i></button>
			</div>
		</div>
	</div>
</body>
</html>