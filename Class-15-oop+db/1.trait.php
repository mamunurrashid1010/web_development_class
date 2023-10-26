<?php
    
    // trait class
    trait category{
        public $name = "Electronics";

        public function messsage(){
            echo "<br>test message";
        }
    }
    trait subCategory{
        public $subName = "Computer";
    }

    // product class
    class product{
        use category,subCategory;
        public $product_name = "Dell";
    }

    // product object
    $product_obj = new product();

    // print
    echo "Product name: ".$product_obj->product_name;
    echo "<br>";
    echo "Category name: ".$product_obj->name;
    echo "<br>";
    echo "Sub-Category name: ".$product_obj->subName;
    echo $product_obj->messsage();