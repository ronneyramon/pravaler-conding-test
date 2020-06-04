<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
    protected $guarded = [];

    public function courses(){
        return $this->hasMany(Course::class);
    }

    public function students(){
        return $this->hasManyThrough( Student::class, Course::class);
    }
}
