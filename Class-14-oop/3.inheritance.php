<?php

// ------------------------------ inheritance --------------------------------
    // parent/base class
    class father{
        public $bankBalance = "1 lac";
        public $land = "5 acors";
        public $loan = "20 thousand";

    }

    // child/deribe class
    class son extends father{
        public $salary = "20000";
    }
    class grandSon extends son{
    
    }

    // obj
    $son_obj = new son();
    echo "Son salary: ". $son_obj->salary . "<br>";
    echo "Father bank balance: ". $son_obj->bankBalance."<br>";
    echo "loan: ". $son_obj->loan."<br>";

    $grand_obj = new grandSon();
    echo $grand_obj->salary."<br>";
    echo $grand_obj->bankBalance."<br>";
