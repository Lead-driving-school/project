<?php

define('URL','http://localhost/project/');
function redirect($page){
    header('location: ' . URL . $page);
}

?>