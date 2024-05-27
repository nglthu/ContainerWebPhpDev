<?php
require './Model/Database.php';

$conn = new Database();
$conn->dBConnection();
//get api
echo $conn->dBConnection();
?>