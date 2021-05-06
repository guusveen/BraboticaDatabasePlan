<?php
define( 'DB_HOST', 'localhost' );
define( 'DB_NAME','braboticadb' );
define( 'DB_USER', 'root' );
define( 'DB_PASS', '' );


function connectDB(){
	$conn = 'mysql:host=' . DB_HOST . ';DB_NAME= '. DB_NAME;
	try 
	{
		return new PDO( $conn, DB_USER, DB_PASS );
	}
	catch (PDOException $e ) 
	{
		return NULL;
	}
}
$db = connectDB();
if( is_null( $db ))
{
	die('<h1>Database-verbinding mislukt</h1>' );
}
?>