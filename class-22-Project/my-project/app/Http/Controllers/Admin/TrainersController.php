<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Trainers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class TrainersController extends Controller
{
    public function index(){
        $trainers = Trainers::query()->get();
        return view('admin.trainer.index',compact('trainers'));
    }

    public function create(){
        return view('admin.trainer.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'          => 'required',
            'designation'   => 'required',
            'image'         => 'required|image|mimes:png,jpg,jpeg',
            'description'   => 'required',
        ]);

        $image = null;
        if (!empty($request->image)){
            $image = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('images/trainer'), $image);
        }

        Trainers::query()->create([
            'name'            => $request->name,
            'designation'     => $request->designation,
            'description'     => $request->description,
            'image'           => $image,
        ]);
        return redirect()->route('trainer.index')->with('success','Data added successfully!');
    }

    function edit($id){
        $trainer = Trainers::query()->find($id);
        return view('admin.trainer.edit',compact('trainer'));
    }

    function update(Request $request, $id){
        $request->validate([
            'name'            => 'required',
            'designation'     => 'required',
            'image'           => 'nullable|image|mimes:png,jpg,jpeg',
            'description'     => 'required',
        ]);

        # image
        $OldImage=Trainers::query()->where('id',$id)->pluck('image')->first();
        if(!empty($request->image))
        {
            $image = time().'.'.$request->image->extension();
            $request->image->move(public_path('images/trainer'), $image);
            #delete old image
            if(File::exists(public_path('images/trainer/'.$OldImage))) {
                File::delete(public_path('images/trainer/'.$OldImage));
            }
        }
        else
            $image=$OldImage;

        Trainers::query()->where('id',$id)->update([
            'name'          => $request->name,
            'designation'   => $request->designation,
            'image'         => $image,
            'description'   => $request->description,
        ]);

        return redirect()->route('trainer.index')->with('success','Data updated successfully!');
    }

    function delete($id){
        $trainer = Trainers::query()->find($id);
        $OldImage = $trainer->image;
        #delete old image
        if(File::exists(public_path('images/trainer/'.$OldImage))) {
            File::delete(public_path('images/trainer/'.$OldImage));
        }
        $trainer->delete();
        return redirect()->route('trainer.index')->with('success','Data deleted successfully!');
    }
}
