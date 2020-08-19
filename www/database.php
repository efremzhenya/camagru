<?php

$dsn = 'mysql:host=db:3306';
$username = 'root';
$password = 'root';

try {
	$db = new PDO($dsn, $username, $password);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$db->query("CREATE DATABASE IF NOT EXISTS camagru_db CHARACTER SET utf8; USE camagru_db;");
	echo "Looking good, php connect to mysql successfully.";

} catch (PDOException $e) {
	echo "Connection to database failed" .$e. PHP_EOL;
}

?>
