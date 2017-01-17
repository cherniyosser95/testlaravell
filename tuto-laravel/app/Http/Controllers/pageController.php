<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
    public function about(){
        $title="a propos";
        $numbers=[];
        //deux ecritures yraj3ou la mm chose
        return view ('page/about',compact('title','numbers'));

    }


    public function home(){
        return view('pages.home');
    }
}
