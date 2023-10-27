<?php

    // ------------------------------- static method and properties ------------------------------
    class category{
        // properties
        public static $name = "Electronics";

        // method
        public static function message(){
            echo "test message";
        }
    }

    // object
    //$obj =new category();
    //echo $obj->name;

    //
    echo category::$name;
    echo "<br>";
    category::message();