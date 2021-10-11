<?php

define('URL','http://localhost/project/');
define('APPROOT',dirname(__FILE__));

function redirect($page){
    header('location: ' . URL . $page);
}


?>