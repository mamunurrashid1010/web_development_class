<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;

    protected $fillable = ['category','name','short_desc','long_desc','fee','total_seat','schedule','trainer_id','image'];

    function totalFeature(){
        return $this->hasMany(CourseFeatures::class,'course_id','id');
    }

    function feature(){
        return $this->hasMany(CourseFeatures::class,'course_id','id');
    }

    function trainerName()
    {
        return $this->belongsTo(Trainers::class,'trainer_id','id')->select('id','name');
    }

    function trainer()
    {
        return $this->belongsTo(Trainers::class,'trainer_id','id')->select('id','name','designation','description','image');
    }
}
