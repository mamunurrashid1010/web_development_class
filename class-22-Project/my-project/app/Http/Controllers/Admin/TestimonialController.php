<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;

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

}
