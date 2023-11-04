<?php
/*
 * This is example of php abstract classes.
 * Abstract Class:
    Abstract classes and methods are when the parent class has a named method, but need its child class(es) to fill out the tasks.
    An abstract class is a class that contains at least one abstract method. An abstract method is a method that is declared, but not implemented in the code.
    An abstract class or method is defined with the abstract keyword
 */

# abstract parent class
abstract class car{
    abstract function carInfo();
}

# child class
class audi extends car{
    function carInfo(){
        echo "<br>I'm from audi child class<br>";
    }
}

# child class
class volvo extends car{
    function carInfo(){
        echo "<br>I'm from volvo child class<br>";
    }
}

# child class
class toyota extends car{
    function carInfo(){
        echo "<br>I'm from toyota child class<br>";
    }
}

# child class
class bmw extends car{
    function carInfo(){
        echo "<br>I'm from BMW child class<br>";
    }
}

class Bike{
     function bikeInfo(){
         echo "<br>I'm from Bike class<br>";
     }
}

echo "<h3>Abstract class example:</h3>";

# create object
$audiObject=new audi();
$audiObject->carInfo();

# create object
$audiObject=new volvo();
$audiObject->carInfo();

# create object
$audiObject=new toyota();
$audiObject->carInfo();

# create object
$bmwObject=new bmw();
$bmwObject->carInfo();

# create object
$bikeObject=new Bike();
$bikeObject->bikeInfo();



