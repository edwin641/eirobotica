<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    // relaccion uno a uno
    public function user(){
        return $this->belongsTo('App\Moldes\User');
    }
}
