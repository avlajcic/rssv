<?php
	//$file = 'data.txt';
	if(isset($_POST["alarm"])){
		
		$txt = "$_POST["alarm"]\n";
		file_put_contents($file, $txt, FILE_APPEND);
	}
		
	//$fileContent = file_get_contents($file, FILE_USE_INCLUDE_PATH);

	//echo $fileContent;
	echo "aaa";
?>