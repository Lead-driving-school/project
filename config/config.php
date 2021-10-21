<?php

define('URL','http://localhost/project/');
define('APPROOT',dirname(__FILE__));

function redirect($page){
    header('location: ' . URL . $page);
}
function getLink(){
    $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    return $actual_link;
}

?>