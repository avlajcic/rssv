<?php
	
	$file = 'data.txt';
	if(isset(GET["alarm"])){
		
		$txt = $_GET['alarm']."\n";
		file_put_contents($file, $txt, FILE_APPEND);
	}
		
	if ($content = file_get_contents($file, FILE_USE_INCLUDE_PATH))
		echo $content;
	
	echo "aaaa";
?>