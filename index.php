<?php
	$page="home";
	$layer=0;
	include 'static_components/head.php';
?>
<div id="wrapper">
<section>
<!-- Gallery -->
<div class="gallery">
<center>
<table width="100%">
<?php
	$table = array("html", "css", "php", "python", "ruby", "ios", "android", "c", "cpp", "dotnet", "java", "javascript", " ", "snippets", " ");
	$title = array("HyperText Markup Language", "Cascading Style Sheets", "", "", "Ruby On Rails", "iPhone Operating System", "", "", "C++", ".NET", "", "", "Misc Code Snippets");
	$test=count($table)-1;
	for ($x = 0; $x <= $test; $x=$x+3) {
		if ($table[$x]== " "){
			echo '<tr><td width="33%"></td>';
		} else {
			echo '<tr><td width="33%"><a href="'.$table[$x].'.php" title="'.$title[$x].'"><img src="'.$root.'img/'.$table[$x].'.png"></a></td>';
		}
    	if ($table[$x+1]== " "){
			echo '<tr><td width="33%"></td>';
		} else {
			echo '<td width="33%"><a href="'.$table[$x+1].'.php" title="'.$title[$x+1].'"><img src="'.$root.'img/'.$table[$x+1].'.png"></a></td>';
		}
		if ($table[$x+2]== " "){
			echo '<tr><td width="33%"></td>';
		} else {
			echo '<td width="33%"><a href="'.$table[$x+2].'.php" title="'.$title[$x+2].'"><img src="'.$root.'img/'.$table[$x+2].'.png"></a></td>';
		}
	} 
?>
</table>
</center>
</div>
</section>
<?php
	include $root.'static_components/foot.php';
?>