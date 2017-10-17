<?php

$db = new PDO('mysql:host=localhost;dbname=library;charset=utf8', 'root', 'arnryd123');
if ($db)
    echo "works";
else 
    echo "didn't work";
?>