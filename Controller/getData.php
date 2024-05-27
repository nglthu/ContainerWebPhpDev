<?php
$db = require './Model/Database.php';

$conn = new $db->Database();
$conn->dBConnection();
//get api
echo $conn->dBConnection();
?>