<?php
	$page="about";
	$layer=0;
	include $root.'static_components/head.php'
?>
	<div id="wrapper">
		<section>
		<?php
			echo '<img src="'.$root.'img/neil.jpg" alt="Photograph of Neil Wakely" class="profile-photo">';
		?>
			<h3>About</h3>
			<p>Hi I am Neil Wakely this is a showcase of some of my work.</p>
			<p>You can contact me via twitter <a href="http://twitter.com/GuruComputersUK">@GuruComputersUK.</a></p>
		</section>
<?php
	include $root.'static_components/foot.php';
?>