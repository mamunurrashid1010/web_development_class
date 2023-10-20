<?php
//---------------------- constructor -------------------------------

    // class
    class message{
        public $notice;
        // constructor
        function __construct(){
            $this->notice = "You are welcome.";
            $this->classNotice();
        }

        function classNotice(){
            echo "I'm from class notice<br>";
        }
    }

    //object
    $obj = new message();
    echo $obj->notice;