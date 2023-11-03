<?php
/*
 * This is example of php constant.
 */

class car{
    const modelNumber="AB12555";
    public static function carInfo(){
        echo "<br>Car Info:<br>";
        echo "BMW, AB12555, dark-blue";
    }

    public static function model(){
        echo "<br>Model:<br>";
        echo self::modelNumber;
    }
}

# method-1
echo "<br>------------------ Method 1 ------------------<br>";
echo car::modelNumber;
 car::carInfo();
 car::model();

 echo "<br>------------------ Method 2 ------------------<br>";
# method-2, create object
$obj=new car();
$obj->carInfo();
$obj->model();