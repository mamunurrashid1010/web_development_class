<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageFeatures extends Model
{
    use HasFactory;

    function package(){
        return $this->belongsTo(Packages::class,'package_id');
    }

    function packageFeature(){
        return $this->belongsTo(Features::class,'feature_id');
    }
}
