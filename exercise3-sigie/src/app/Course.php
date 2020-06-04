<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;

class Course extends Model
{
    protected $guarded = [];

    public function institution(){
        return $this->belongsTo(Institution::class);
    }

    public function students(){
        return $this->hasMany(Student::class);
    }
}