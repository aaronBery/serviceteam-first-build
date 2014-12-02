<?php
//include the wp config
require "../../../../wp-config.php";
// Create connection
$conn = new mysqli('serv2253370273.db.2253370.hostedresource.com', DB_USER, DB_PASSWORD, DB_NAME,'3307');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT ID, boroughName, boroughLabel, postcode, wpPageId FROM " . $table_prefix . "GasByArea ORDER BY boroughName DESC";
$result = $conn->query($sql);
$conn->close();
$location = "London";
$postCode = "";
include "includes/header.php";
include "includes/content.php";
include "includes/gasListing.php";
include "includes/sidebar.php";
include "includes/footer.php";
?>


