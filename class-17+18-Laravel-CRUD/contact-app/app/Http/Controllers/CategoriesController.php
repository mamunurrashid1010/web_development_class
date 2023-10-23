<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index(){
        $categories = Categories::all();
        return view('category.index',compact('categories'));
    }

    public function create(){
        return view('category.create');
    }

    public function store(Request $request){
        Categories::query()->create([
            'name'        => $request->name,
            'description' => $request->description,
        ]);

        return redirect()->back()->with('success','Data added successfully!');
        //return redirect()->route('category.index')->with('success','Data added successfully!');

    }
}

