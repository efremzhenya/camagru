<?php

dao::init(true);

if (dao::$PDOErrorCode == null)
{
	$sql = file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/config/camagru_db.sql');
	if (isset($sql))
	{
		dao::$connection->exec($sql);
	}
}
