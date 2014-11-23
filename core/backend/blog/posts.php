<?php
/**
* Get posts from Database
* 
* This script will the post variables with the database data.
*
* @author		Marcel Radzio <info@nordgedanken.de>
* @version	0.2 17/08/2014 19:39
*/
	include('../../core/config/connect.db.inc.php');
	//Check if Database connection established
	if (mysqli_connect_errno()) {
		printf("Verbindung fehlgeschlagen: %s\n", mysqli_connect_error());
		exit();
	}

	//Check if Data in it
	if ($resultat = $connection->query('SELECT * FROM posts')) {
		 //Put database data in variables
 		 while($daten = $resultat->fetch_object() ){
 		 		$post_id = $daten->id;
				$post_title = $daten->title;
				$post_text = $daten->text;
				$post_author = $daten->author;
				$post_date = $daten->date;
				$post_categrory = $daten->category;
  			}  
  		$resultat->close();
	} else {
  		//If no data in Database give error
  		echo "Es konnten keine Daten aus der Datenbank ausgelesen werden";
	}

// Close database connection
$connection->close();

