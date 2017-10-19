<?php

$db = new PDO('mysql:host=localhost;dbname=library;charset=utf8', 'root', '');

$query = "SELECT * FROM books";

$stmt = $db->query($query);

$books = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>