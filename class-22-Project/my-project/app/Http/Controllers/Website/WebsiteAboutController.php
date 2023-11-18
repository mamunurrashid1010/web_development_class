<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class WebsiteAboutController extends Controller
{
    function index(){
        $about = About::query()->first();
        $testimonials = Testimonial::query()->get();
        return view('website.about.index',compact('about','testimonials'));
    }
}
