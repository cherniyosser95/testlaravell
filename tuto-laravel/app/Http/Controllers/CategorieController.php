<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cat;
use Illuminate\Support\Facades\Session;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cat= Cat::all();
        return view('omars.index_cat',compact('cat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cat=new Cat();

        return view('omars.create_cat',compact('cat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cat= Cat::create($request->all());
        return redirect(route('cats.index_cat',$cat));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cat=Cat::findOrFail($id);
        //dd($categorie);
        Session::flash('success',"mise a jour réussie");

        return view('omars.edit_cat',compact('cat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,
            [

                'name'=>'required'
            ]);

        $cat=Cat::findOrFail($id);
        $cat->update($request->all());
        //$post->tgs()->sync($request->get('tgs'));
        //return view('default');
        return redirect( route('cats.edit_cat',$id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cat=Cat::findOrFail($id);
        $cat->delete();
        return redirect()->route('cats.index_cat')->with('alert alert-success','suppression- sucess');

    }
}
