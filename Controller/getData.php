<?php
//require_once './workspaces/ContainerWebPhpDev/Model/Database.php';
include __DIR__. './Model/Database.php';

//$test =getcwd();
/*
/workspaces/ContainerWebPhpDev/Controller */

$conn = new Database();
$test = $conn->dBConnection();
//get api
echo $test;
?>