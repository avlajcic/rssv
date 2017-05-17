<?php
	
	$file = 'data.txt';
	if(isset($_POST["alarm"])){
		
		$txt = "$_POST["alarm"]\n";
		file_put_contents($file, $txt, FILE_APPEND);
	}
		
	
	
	echo "aaaa";
?>