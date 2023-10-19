<?php

    // class category
    class category{
        //properties
        public $name;
        public $description;
        public $logo;

        // methods
        public function addCategory($a){
            echo "I'm from add category<br>";
            // example-1
            $title1 = "test title 1<br>";
            //echo $title1;
            // example-2
            $this->name = $a;

        }

        public function getCategory(){
            echo "I'm from get category<br>";
            echo $this->name;
        }

    }

//--------------------------------------------------
    // object create
    $category_obj = new category();

    // value assign
    $category_obj->name = "Fruits";
    $category_obj->description = "test";

    // print
    echo "Category name: " .$category_obj->name ."<br>";
    echo "Category description: " .$category_obj->description ."<br>";

    // method call
    //$category_obj->addCategory();
    //$category_obj->getCategory();

    //
    $category_obj->addCategory("Electronics & computer");
    //echo "Category name: " .$category_obj->name ."<br>";
    $category_obj->getCategory();
//--------------------------------------------------

    // class product
    class product{
        public $product_name;
        //method
        public function allProduct(){
            echo "all product";
        }
    }
    // object
    $product_obj = new product();
