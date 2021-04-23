<?php 		/*procedural connection to DB*/
	//For Local Host
	$host = 'localhost';
	$database = 'restaurant_codinglab';
	$user = 'root';
	$pass = 'root';

	//For Remote Host
	// $host = 'eu-cdbr-west-01.cleardb.com';
	// $name = 'heroku_11219bb6d274632';
	// $user = 'b791ecf6946e63';
	// $pass = 'fbcf8801';


	$connect = mysqli_connect($host, $user, $pass, $database);	/*connect with build-in function*/

	if (mysqli_connect_error()) {	/*check for errors(connection)*/
		echo mysqli_connect_error();	
	} else {
		// successful connection!
	}
?>
