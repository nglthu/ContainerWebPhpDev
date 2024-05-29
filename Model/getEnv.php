<?php

class getEnv{
    function getEnv(){

$env = file_get_contents(".env");

$lines = explode("\n",$env);

foreach($lines as $line){
  preg_match("/([^#]+)\=(.*)/",$line,$matches);
  if(isset($matches[2])){
    putenv(trim($line));
  }
} 

$db = getenv('Database');//returns: localhost

$host = getenv('Host');
$port =getenv('Port');
$user = getenv('User');
$password = getenv('Password');

$envArray = array($db,$host, $port, $user, $password);

return $envArray;


}
}
?>