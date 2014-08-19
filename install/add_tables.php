<?php
/**
* Add Tables
* 
* This script configure the the database tables for the CMS
*
* @author	Marcel Radzio <info@nordgedanken.de>
* @version	0.2 18/08/2014 18:49
*/
//Posts erstellen
	require_once ('../core/inc/db_connect.inc.php');
	$sql = "
		 CREATE TABLE `posts` (
		`id` INT( 11 ) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
		`text` TEXT NOT NULL ,
		`title` TEXT NOT NULL ,
		`name` TEXT NOT NULL ,
		`time` DATETIME NOT NULL
		) ENGINE = MYISAM ;
		";
	$result = mysqli_query($connection, $sql)
	or die("Anfrage fehlgeschlagen: " . mysql_error());
	echo 'Erstellen erfolgreich';
//User erstellen
	require_once ('../core/inc/db_connect.inc.php');
	$sql = "
		 CREATE TABLE `users` (
		`id` INT( 11 ) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
		`name` VARCHAR( 11 ) NOT NULL ,
		`email` TEXT NOT NULL ,
		`password` VARCHAR(50) NOT NULL ,
		`registertime` TEXT NOT NULL ,
		`activationcode` INT( 11 ) NOT NULL,
		`acivated` TEXT NOT NULL
		) ENGINE = MYISAM ;
		";
	$result = mysqli_query($connection, $sql)
	or die("Anfrage fehlgeschlagen: " . mysql_error());
	echo 'Erstellen erfolgreich';
?>
