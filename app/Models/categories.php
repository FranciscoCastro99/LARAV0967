<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
   //Relacion Uno a Muchos
   public function posts(){
    return $this->hasMany('App\Models\post');
    }
}
