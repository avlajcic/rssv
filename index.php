<?php
	
	$file = 'data.txt';
	if(isset(GET["alarm"])){
		
		$txt = $_GET['alarm']."\n";
		file_put_contents($file, $txt, FILE_APPEND);
	}
		
	
	
	echo "aaaa";
?>