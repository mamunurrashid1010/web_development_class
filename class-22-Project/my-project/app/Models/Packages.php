<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Packages extends Model
{
    use HasFactory;

    protected $fillable = ['title','price','duration'];

    function packageFeature(){
        return $this->hasMany(PackageFeatures::class,'package_id','id');
    }
}
