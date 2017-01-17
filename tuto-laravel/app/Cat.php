<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    protected $fillable=['name','slug'];

    //public function Posts(){
        //return $this->hasMany('App\Omar');
   // }
}
