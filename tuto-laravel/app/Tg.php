<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tg extends Model


{
public $fillable=['name'];
    public function omars(){
        return $this->belongsToMany('App\Omar','omar-tg');
    }
}
