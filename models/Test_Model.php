<?php

class Test_Model extends Model{
    function __construct()
    {
        parent::__construct();
    }

    function printSomethis(){
        echo "Hello from test model";
    }
}