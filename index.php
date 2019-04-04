<?php 
include_once 'inc/header.inc.php';

include('classes/dbconn.class.php');

$dbconn = new DbConnect();

$dbconn->openConnection();


echo "<h1> Hello World! </h1>";

$dbconn->closeConnection();



include_once 'inc/footer.inc.php' 
?>