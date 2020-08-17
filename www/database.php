<?php

$dsn = 'mysql:host=localhost;dbname=camagru_db';
$username = 'root';
$password = 'root';
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
);
try {
	$db = new PDO($dsn, $username, $password, $options);
	$db ->query("CREATE DATABASE IF NOT EXISTS camagru_db CHARACTER SET utf8; USE camagru_db;");

} catch (PDOException $e) {
	echo "Connection to database failed" . PHP_EOL;
}

?>
