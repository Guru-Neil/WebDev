<?php
	if ($layer==0){
		$root='./';
	}else{
		$root='../';
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Neil Wakely | Developer</title>
<?php
	echo '<link rel="stylesheet" href="'.$root.'css/normalize.css">';
?>
<link href='http://fonts.googleapis.com/css?family=Lobster|Open+Sans' rel='stylesheet' type='text/css'>
<?php
	echo '<link rel="stylesheet" href="'.$root.'css/main.css">';
?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<header>
<?php
	echo '<a href="'.$root.'" id="logo">';
?>
	<h1 class="name">Rev Neil Wakely</h1>
	<h2 class="developer">Developer</h2>
</a>
<nav>
<ul>
	<?php 
		include $root.'menu.php';
	?>
</ul>
</nav>
</header>