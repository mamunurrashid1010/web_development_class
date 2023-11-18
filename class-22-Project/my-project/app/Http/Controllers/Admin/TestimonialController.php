<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class TestimonialController extends Controller
{
    function index(){
       $testimonials = Testimonial::query()->get();
       return view('admin.testimonial.index',compact('testimonials'));
    }

    function create(){
       return view('admin.testimonial.create');
    }

    function store(Request $request)
    {
        $request->validate([
           'name'   => 'required',
           'title'  => 'required',
           'image'  => 'required|image|mimes:png,jpg,jpeg',
           'message' => 'required',
        ]);

        $image = null;
        if (!empty($request->image)){
            $image = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('images/testimonial'), $image);
        }

        Testimonial::query()->create([
            'name'      => $request->name,
            'title'     => $request->title,
            'message'   => $request->message,
            'image'     => $image,
        ]);
        return redirect()->route('testimonial.index')->with('success','Data added successfully!');
    }

    function edit($id){
        $testimonial = Testimonial::query()->find($id);
        return view('admin.testimonial.edit',compact('testimonial'));
    }

    function update(Request $request, $id){
        $request->validate([
            'name'      => 'required',
            'title'     => 'required',
            'image'     => 'nullable|image|mimes:png,jpg,jpeg',
            'message'   => 'required',
        ]);

        # image
        $OldImage=Testimonial::query()->where('id',$id)->pluck('image')->first();
        if(!empty($request->image))
        {
            $image = time().'.'.$request->image->extension();
            $request->image->move(public_path('images/testimonial'), $image);
            #delete old image
            if(File::exists(public_path('images/testimonial/'.$OldImage))) {
                File::delete(public_path('images/testimonial/'.$OldImage));
            }
        }
        else
            $image=$OldImage;

        Testimonial::query()->where('id',$id)->update([
            'name'   => $request->name,
            'title'  => $request->title,
            'image'  => $image,
            'message'  => $request->message,
        ]);

        return redirect()->route('testimonial.index')->with('success','Data updated successfully!');
    }

    function delete($id){
        $testimonial = Testimonial::query()->find($id);
        $OldImage = $testimonial->image;
        #delete old image
        if(File::exists(public_path('images/testimonial/'.$OldImage))) {
            File::delete(public_path('images/testimonial/'.$OldImage));
        }
        $testimonial->delete();
        return redirect()->route('testimonial.index')->with('success','Data deleted successfully!');
    }
}
