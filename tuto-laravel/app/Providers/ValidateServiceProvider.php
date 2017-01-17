<?php
namespace App\Providers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;

class ValidateServiceProvider extends ServiceProvider{

    public function boot(){
        Validator::extend('aaaa',function($attribute,$value,$parameters){
     return $value=='aaaa';

        });
    }

}
?>