<?php
require_once './workspaces/ContainerWebPhpDev/Model/Database.php';


$conn = new Database();
$conn->dBConnection();
//get api
echo $conn->dBConnection();
?>