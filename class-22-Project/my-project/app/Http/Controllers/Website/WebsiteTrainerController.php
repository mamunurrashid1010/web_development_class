<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Trainers;
use Illuminate\Http\Request;

class WebsiteTrainerController extends Controller
{
    function index(){
        $trainers = Trainers::query()->get();
        return view('website.trainer.index',compact('trainers'));
    }
}
