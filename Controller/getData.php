<?php

include '/workspaces/ContainerWebPhpDev/Model/Database.php';


$conn = new Database();
$test = $conn->dBConnection();

//get api
echo $test;
?>