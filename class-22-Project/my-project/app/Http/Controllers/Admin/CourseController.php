<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CourseFeatures;
use App\Models\Courses;
use App\Models\Trainers;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Courses::query()->withCount('totalFeature')->get();
        return view('admin.course.index',compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $trainers = Trainers::query()->select('id','name','designation')->get();
        return view('admin.course.create',compact('trainers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'category'      => 'required|string',
            'name'          => 'required',
            'short_desc'    => 'required',
            'long_desc'     => 'required',
            'fee'           => 'required',
            'total_seat'    => 'required',
            'schedule'      => 'required',
            'trainer_id'    => 'required',
            'image'         => 'required|image|mimes:png,jpg,jpeg',
        ]);

        # image
        $image = null;
        if (!empty($request->image)){
            $image = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('images/course'), $image);
        }

        # data store
        Courses::query()->create([
            'category'      => $request->category,
            'name'          => $request->name,
            'short_desc'    => $request->short_desc,
            'long_desc'     => $request->long_desc,
            'fee'           => $request->fee,
            'total_seat'    => $request->total_seat,
            'schedule'      => $request->schedule,
            'trainer_id'    => $request->trainer_id,
            'image'         => $image,
        ]);

        # message
        return redirect()->route('course.index')->with('success','Data added successfully!');
    }

    public function feature($id){
        $course = Courses::query()->find($id);
        return view('admin.course.feature.create',compact('id','course'));
    }

    public function storeFeature(Request $request,$id){
        $request->validate([
            'title'      => 'required|string',
            'name'       => 'required',
            'desc'       => 'required',
            'image'      => 'required|image|mimes:png,jpg,jpeg',
        ]);

        # image
        $image = null;
        if (!empty($request->image)){
            $image = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('images/course/feature'), $image);
        }

        # store
        CourseFeatures::query()->create([
            'course_id' => $id,
            'title'     => $request->title,
            'name'      => $request->name,
            'desc'      => $request->desc,
            'image'     => $image,
        ]);
        return redirect()->back()->with('success','Feature added successfully!');

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
       $course = Courses::query()->with('feature')->find($id);
       return view('admin.course.show',compact('course'));
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
