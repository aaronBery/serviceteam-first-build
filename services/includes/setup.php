<?php

//include the wp config
require "../../../../wp-config.php";
//print_r($isDevmode);exit;

//include "includes/model.php";
// Create connection
if(IS_DEVMODE){
	$conn = new mysqli('localhost', DB_USER, DB_PASSWORD, DB_NAME);
}else{
	$conn = new mysqli('serv2253370273.db.2253370.hostedresource.com', DB_USER, DB_PASSWORD, DB_NAME,'3307');	
}
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>