<?php
/**
 * Created by PhpStorm.
 * User: yosser
 * Date: 1/10/2017
 * Time: 4:37 PM
 */

namespace App\Http\Controllers;
use \Request;
use \Input;

class welcomeController extends controller
{

    public  function __construct(){
        //$this->middleware('ip');
    }
public function index(){

    return view ('welcome');
}

   /* get et post mayemchiwech
   public  function postTest(){

    }*/

    /*public function getIndex(){
        return 'salut les gens';
    }*/
}