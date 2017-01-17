<?php

namespace App\Http\Controllers;

use App\Link;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class linkController extends Controller
{
    public function show($id){
        $link=Link::findOrFail($id);
        return new RedirectResponse($link->url);
    }
public function create(){
    return view('links.create');
}
    public function store(){

        $url=Input::get('url');
        $link=Link::where('url',$url)->first();

if(!$link){
    $link=Link::create(['url'=>$url]);


}
      return view('links.success',compact('link'));
    }
}
