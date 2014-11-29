<?php
	$page="home";
	include $root.'static_components/head.php'
?>
<div id="wrapper">
<section>
<div class="code">
<center>
<table width="100%">
<?php
	$prow=3;
	$table = array("ul_menu", "table", "copyright");
	$title = array("Un-ordered list Menu", "", "Auto Updating Copyright");

	$test=count($table);
	$percentage=100/$prow;
	$rows=ceil($test / $prow);
	for ($x = 0; $x < $test; $x=$x+$prow) {
		echo '<tr>';
		for ($y=0; $y < $prow; $y++){
			echo '<td width="'.$percentage.'%"><a href="./neils_code/'.$table[($x+$y)].'.php" title="'.$title[($x+$y)].'")>'.$table[($x+$y)].'</a></td>';
		}
		echo '</tr>';
	}
?>
</table>
</center>
</div>
</section>
<?php
	include $root.'static_components/foot.php';
?>