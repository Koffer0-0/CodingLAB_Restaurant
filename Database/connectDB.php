<?php 		/*procedural connection to DB*/
require ('libs/rb.php');
R::setup( 'mysql:host=127.0.0.1;dbname=restaurant_codinglab','root', 'root' ); 

if ( !R::testconnection() )
{
		exit ('Connection ERROR');
}

session_start();
