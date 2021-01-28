<?php
session_start();
require_once('Facebook/autoload.php');

$FBobject = new \Facebook\Facebook([
    
    'app_id' => '964644387075963',
    'app_secret' => 'e7708548d7bf6bf27c7984019ec4a726',
    'default_graph_version' => 'v2.10'
   
]);

$handler = $FBobject -> getRedirectLoginHelper();



?>