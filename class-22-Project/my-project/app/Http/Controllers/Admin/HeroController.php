<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Hero;

class HeroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hero = Hero::query()->first();
        return view('admin.hero.index',compact('hero'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.hero.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title1' =>'required',
            'title2' =>'required',
            //'url' =>'required',
            'image' =>'required|image|mimes:png,jpg',
            //'description' =>'required',
        ]);

        $image = null;
        if($request->file('image')){
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            //$image->move(public_path('images'), $imageName);
            $image->storeAs('images', $imageName);
            $image = $imageName;
        }

        Hero::query()->create([
            'title1' => $request->title1,
            'title2' => $request->title2,
            'url'    => $request->url,
            'image'  => $image,
            'description' => $request->description,
        ]);
        return redirect()->route('hero')->with('success','Data added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        $hero = Hero::query()->first();
        return view('admin.hero.edit',compact('hero'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
