<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Features;
use App\Models\PackageFeatures;
use App\Models\Packages;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $packages = Packages::query()->with('packageFeature')->get();
        $features = Features::query()->get();
        return view('admin.package.index',compact('packages','features'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $features = Features::query()->get();
        return view('admin.package.create',compact('features'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'     => 'required',
            'price'     => 'required',
            'duration'  => 'required',
        ]);

        # package data store
        $package_id = Packages::query()->insertGetId([
            'title'     => $request->title,
            'tag'       => $request->tag,
            'price'     => $request->price,
            'duration'  => $request->duration,
            'created_at'=> Carbon::now(),
        ]);

        if($package_id){
            #package-feature data store
            $features = $request->feature;
            foreach ($features as $feature){
                PackageFeatures::query()->insert([
                    'package_id'  => $package_id,
                    'feature_id'  => $feature,
                    'created_at'=> Carbon::now(),
                ]);
            }
        }
        return redirect()->route('package.index')->with('success','Package added successfully');

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
    public function edit(string $id)
    {
        //
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
