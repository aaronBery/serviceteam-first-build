<?php
//include the wp config
require "../../../../wp-config.php";
//print_r($isDevmode);exit;

//include "includes/model.php";

//get the location from url
$gasUrl = $_SERVER['REQUEST_URI'];
$locationWithPostCode = preg_replace('/^\/gas\/([^\?]+)$/','${1}',$gasUrl);
$postCode = preg_replace('/(.+)\-(\w+)$/','${2}',$gasUrl);
$location = preg_replace('/^(.+)\-(\w+)+$/','${1}',$locationWithPostCode);

// Create connection
$conn = new mysqli('serv2253370273.db.2253370.hostedresource.com', DB_USER, DB_PASSWORD, DB_NAME,'3307');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT ID, boroughName, boroughLabel, postcode, wpPageId FROM " . $table_prefix . "GasByArea WHERE boroughName='" . strToLower($location) . "' AND postcode='" . strToUpper($postCode) . "' LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
        //echo $row["boroughLabel"] . "<br>";
    }
} else {
    //echo "0 results";
}

$conn->close();

if($result->num_rows < 1){
	header('This is not the page you are looking for', true, 404);
	include "includes/header.php";
	include "includes/404.php";
}else{
	include "includes/header.php";
	include "includes/content.php";
	include "includes/sidebar.php";
	//include "includes/bottomContent.php";
}

include "includes/footer.php";

?>


