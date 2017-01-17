<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('salut',function(){
   return 'salut les geans';
});*/
/*debuger la résultat de cette fonction on stock la fonction dans une variable
- ['as'=>'salut']: aatina nom lel route li howa(salut)
- lien: ".route('salut',['slug'=>$slug,'id'=>$id]): ta3tik lien kemel avec les parametres li 3tithom*/
/*Route::get('salut/{slug}-{id}',['as'=>'salut',function($slug,$id){
 return "lien: ".route('salut',['slug'=>$slug,'id'=>$id]);
}])->where('slug','[a-z0-9\-]+')->where('id','[0-9]+');*/
/*creer un systeme de chainage*/
/*focntion dd: diendebug couper le script et debuger la variable*/
/*dd($route);*/
/*la partie login n'existe pas parce qu'il n'ya pas le route concerné*/
/*route::group(['prefix'=>'admin','middleware'=>'ip'],function(){
    /*route qui se trouve dans l'admin*/
/*route::get('salut',function(){
    return 'salut les gens';
});/*
});/*

});/*
//Route::get('/salut/{name}','welcomeController@index');
//Route::controller('welcome','welcomeController');
//uses: c-a-d je suis la je voulais utilise la fonction about
Route::get('page',['as'=>'about','uses'=>'pageController@about']);*/
//Route::get('/','welcomeController@index');
Route::get('link/create','linkController@create');
//Route::post('link/create','linkController@store');
//Route::get('/r{id}','linkController@show')->where('id','[0-9]+');
Route::resource('link','linkController',['only'=>['create','store']]);
Route::resource('news','OmarsController');
Auth::routes();
Route::get('/','pageController@home');


Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::group(['namespace'=>'admin','prefix'=>'admin'],function(){
   Route::resource('posts','PostController');
});
Route::resource('cats','CategorieController');
