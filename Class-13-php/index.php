<?php

    // function definition
    function message(){
        echo "I'm calling from message funtion";
        echo "<br>";
    }
    function title(){
        echo "Test Title<br>";
    }

    // function with parameters
    function title2($titleName){
        echo $titleName . "<br>";
    }
    function summation($value1,$value2){
        $sum;
        $sum = $value1 + $value2;
        echo "The summation is : " . $sum;
        echo "<br>";
        //single line
        //echo "The summation is : ". $value1+$value2 . "<br>";
    }
    

    // funtion calling
    message();
    title();

    // function call with parameters
    title2("Electronic product");

    $grocery_title = "Grocery product";
    $computer_title = "Computer product";

    title2($grocery_title);
    title2($computer_title);

    summation(10,20);
    summation(50,20);

    // conditional statement
    $putul_marks   = 50;
    $faisal_marks  = 50;

    // example -1
    if($putul_marks >= 30 ){
        echo "Pass";
    }

    // example -2
    if($putul_marks >= 30 ){
        echo "Pass";
    }
    else{
        echo "Fail";
    }

    // example -3
    echo "<br><h3>Example - 3</h3>";
    if($putul_marks < 0){
        echo "Please enter valid marks";
    }
    elseif($putul_marks > 100){
        echo "Please enter valid marks 1 to 100";
    }
    elseif($putul_marks == 0){
        echo "Fail";
    }
    elseif($putul_marks > 30){
        echo "Pass";
    }
    else{
        echo "Fail";
    }

    // example-4
    echo "<br><h3>Example - 4</h3>";
    function resultCalculation($name,$marks){
        echo "Name: ". $name."<br>";
        if($marks < 0){
            echo "Please enter valid marks";
        }
        elseif($marks > 100){
            echo "Please enter valid marks 1 to 100";
        }
        elseif($marks == 0){
            echo "Fail";
        }
        elseif($marks > 30){
            echo "Pass";
        }
        else{
            echo "Fail";
        }
        echo "<br>";
    }
    // function call
    resultCalculation("Salman",50);
    resultCalculation("Faisal",20);

    // for loop
    echo "<br><h3>For loop example</h3>";
    for( $i=1;   $i<=10;    $i++ )
    {
        echo $i." hello" . "<br>";
    }

    //foreach loop
    echo "<br><h3>Foreach loop example</h3>";
    
    $marks = [10,50,80,40];

    foreach($marks as $valu){
        echo $valu."<br>";
    }

