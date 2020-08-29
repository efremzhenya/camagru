<?php

try
{
	$connect = dao::initWithConfig(true);
}
catch (PDOException $e)
{
	echo "Connection to database failed: " .$e. PHP_EOL;
	die();
}

$sql = file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/config/camagru_db.sql');

dao::$conn->exec($sql);
