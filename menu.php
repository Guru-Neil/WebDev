<?php
	$menu = array("About", "Contact", "HTML", "CSS", "PHP", "Python", "Ruby", "IOS", "Android", "C", "CPP", "DotNet", "Java", "JavaScript", "Snippets");
	foreach ($menu as $item) {
   	 	echo '<li><a href="'.$mroot.strtolower($item).'.php"';
   	 	if (strtolower($item) == $page){
   	 		echo ' class="selected"';
   	 	}
   	 	echo '>'.$item.'</a></li>';
   	 }
?>