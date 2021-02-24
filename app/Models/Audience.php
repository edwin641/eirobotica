<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Audience extends Model
{
    
    protected $guarded=['id'];
    
    
    
    use HasFactory;

    //relacion de uno a muchos inversa
    public function course(){
        return $this->hasMany('App\Models\Course');
    }
}
