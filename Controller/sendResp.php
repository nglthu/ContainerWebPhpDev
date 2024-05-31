<?php
include '/workspaces/ContainerWebPhpDev/Controller/getHttpSam.php';


function sendResponse($status = 200, $body ='', $content_type = 'text/html')
{
    $code = new apiRest();
    $getCode = $code->getCodeMessage($status);

$status_header = 'HTTP/1.1 '. $status .''. $getCode;
header($status_header);
header('Content-type: '. $content_type);
echo $body;
}



?>