<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class WebsiteAboutController extends Controller
{
    function index(){
        $about = About::query()->first();
        return view('website.about.index',compact('about'));
    }
}
