<?php

class getEnvLocal{
    function getEnvLocal(){


$env = file_get_contents('/workspaces/ContainerWebPhpDev/Model/.env');


$lines = explode("\n",$env);

foreach($lines as $line){
  preg_match("/([^#]+)\=(.*)/",$line,$matches);
  if(isset($matches[2])){
    putenv(trim($line));
  }
} 

$host = getenv('hostLocal');

$user = getenv('userLocal');
$password = getenv('passwordLocal');

$envArrayLocal = array($host, $user, $password);


return $envArrayLocal;


}
}
?>