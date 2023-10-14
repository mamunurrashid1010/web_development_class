<?php

    // print
    echo "Hello World";
    echo "This is test title";
    echo "<br>";

    // variable declar, assign value and datatype
    $name = "Putul"; //string
    $roll = 10;      //integer
    $gpa  = 4.5;     // float
    $pi   = 3.1416;   //double
    $letterMarks = "A"; //character
    $pass = true;  //boolian
    $phone = ['01812','01712']; //array

    // print and concatenation
    echo $name . "<br>"; //concatenation
    echo $name . $roll . "<br>";  
    echo "GPA :".$gpa;
    echo "<br>";

    // array
    $studentList = ["Putul","Zahin","Arafat","Faisal"];

    // array print by index number
    echo "Student List :<br>";
    echo $studentList[0];
    echo $studentList[1];

    // array value change
    $studentList[3] = "Salman";
    echo $studentList[3];
    echo "<br>";

    // multidimantional array
    //$putul = ['Putul',10,4.5,'A',true];
    //$zahin = ['Zahin',11,4.5,'A',true];
    $studentInfo = [
        ['Putul',10,4.5,'A',true],
        ['Zahin',11,4.5,'A',true]
    ];

    echo $studentInfo[0][0]." ".$studentInfo[0][1];

    // associative array
    $studentList1 = [
        'name' => 'Putul',
        'roll' => 10,
        'gpa'  => 4.5,
    ];
    echo $studentList1['name'];
