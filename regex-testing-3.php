<?php
	/*$string = "bluechill";
	$regex = "exit\(phpinfo\(\)\);/e\", '$0', 'exit(phpinfo());');";
	$string = preg_replace("/". $regex . "/", '$0 * $1', $string);
	echo $string;
	echo "<br />";
	echo $regex;*/

	//blue|{${phpinfo()}}#/e%00
	$string = "blue|{${phpinfo()}}#/e%00";
	echo $string;
?>