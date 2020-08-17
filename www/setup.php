<?php

require_once('database.php');

$db->query("CREATE TABLE IF NOT EXISTS `Users` (
	`id` INT PRIMARY KEY NOT NULL auto_increment,
	`username` VARCHAR(255) UNIQUE NOT NULL,
	`pass_hash` VARCHAR(255) NOT NULL,
	`email` VARCHAR(255) UNIQUE NOT NULL,
	`role_id` INT NOT NULL DEFAULT 0,
	`about` VARCHAR(255)
	)");

$db->query("CREATE TABLE IF NOT EXISTS `Images` (
	`id` INT PRIMARY KEY NOT NULL auto_increment,
	`user_id` INT NOT NULL,
	`description` VARCHAR(255) DEFAULT '',
	`create_date` DATETIME NOT NULL DEFAULT NOW
	)");

$db->query("CREATE TABLE IF NOT EXISTS 'Comments' (
	'id' INT PRIMARY KEY NOT NULL auto_increment,
	'user_id' INT NOT NULL,
	'comment' VARCHAR(255) NOT NULL,
	'create_date' DATETIME(255) NOT NULL DEFAULT NOW
	)");

$db->query("CREATE TABLE IF NOT EXISTS 'Likes' (
	'image_id' INT NOT NULL,
	'user_id' INT NOT NULL,
	CONSTRAINT Image_User UNIQUE (image_id,user_id)
	)");
