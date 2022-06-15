<?php 

$requestPayload = file_get_contents("php://input");
var_dump($requestPayload);
$object = json_decode($requestPayload, true);
var_dump($object);


 ?>