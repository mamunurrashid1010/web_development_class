<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Features;
use App\Models\Packages;
use Illuminate\Http\Request;

class WebsitePricingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $packages = Packages::query()->with('packageFeature')->get();
        $features = Features::query()->get();
        return view('website.pricing.index',compact('packages','features'));
    }
}
