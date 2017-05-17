<?php
	
	$file = 'data.txt';
	if(isset(GET["alarm"])){
		
		$txt = $_GET['alarm']."\n";
		file_put_contents($file, $txt, FILE_APPEND);
	}
		
	$myfile = fopen($file, "r") or die("Unable to open file!");
	echo fread($myfile,filesize($file));
	fclose($myfile);
	
	echo "aaaa";
?>