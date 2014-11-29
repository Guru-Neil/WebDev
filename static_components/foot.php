<footer>
	<a href="http://twitter.com/GuruComputersUK">
	<?php
		echo '<img src="'.$root.'img/twitter-wrap.png" alt="Twitter Logo" class="social-icon">';
	?>
	</a>
	<a href="http://facebook.com/RobotixMaster">
	<?php
		echo '<img src="'.$root.'img/facebook-wrap.png" alt="Facebook Logo" class="social-icon">';
	?>
	</a>
	<?php
		$start=2014;
		$current=date("Y");
		$cy="";
		if ($current=$start) {
			$cy=$start;
		}
		if ($current>$start) {
			$cy=$start."-".$current;
		}
		echo "<p>&copy;"." ".$cy." Neil Wakely.</p>"."\n";
	?>
</footer>
</div>
</body>
</html>