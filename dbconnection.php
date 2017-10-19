<?php 
	$db = new PDO('mysql:host=localhost;dbname=library;charset=utf8', 'root', '');

	if ($db)
		echo "Works";
	else
		echo "Does not work";
?>