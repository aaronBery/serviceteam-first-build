<?php
require "includes/setup.php";

$gasUrl = $_SERVER['REQUEST_URI'];
$locationWithPostCode = preg_replace('/^\/gas\-cp\-12\-gas\-safety\-certificate\-([^\?]+)$/','${1}',$gasUrl);
$postCode = preg_replace('/(.+)\-(\w+)$/','${2}',$locationWithPostCode);
$location = preg_replace('/^(.+)\-(\w+)+$/','${1}',$locationWithPostCode);
$locationLabel = $location;

$sql = "SELECT ID, boroughName, boroughLabel, postcode, wpPageId FROM " . $table_prefix . "GasByArea WHERE boroughName='" . strToLower($location) . "' AND postcode='" . strToUpper($postCode) . "' LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
        $locationLabel = $row["boroughLabel"];
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
	include "includes/content-cp12.php";
	include "includes/sidebar.php";
	//include "includes/bottomContent.php";
}

include "includes/footer.php";

?>


