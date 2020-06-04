<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $guarded = [];
    
    protected $dates = [
        'birth_date',
    ];

    public function course(){
        return $this->belongsTo(Course::class);
    }
}
