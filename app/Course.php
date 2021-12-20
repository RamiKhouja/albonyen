<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function specialities()
    {
        return $this->belongsToMany(Speciality::class, 'course_speciality','course_id','speciality_id');
    }

    public function lessons()
    {
        return $this->hasMany('App\Lesson', 'lesson_id', 'id');
    }
}
