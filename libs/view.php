<?php

class View{
    
    function __construct(){
        
    }

    public function render($viewName , $invalid=''){
        require 'views/' .$viewName .'.php';
    }
 
}