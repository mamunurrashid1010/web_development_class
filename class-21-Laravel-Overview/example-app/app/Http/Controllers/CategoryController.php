<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function categoryPage(){
        return view('category.category');
    }

    function categoryDetailsPage(){
        echo "category details page";
    }

    function createCategoryPage(){
        echo "create category page";
    }

    function updateCategoryPage(){
        echo "update category page";
    }

    function deleteCategory(){
        echo "delete category";
    }
}
