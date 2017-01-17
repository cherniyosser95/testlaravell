<?php

namespace App\Http\Controllers;
use App\Omar;
use App\Cat;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
class OmarsController extends Controller
{
    public function index(){
        //User::create(['name'=>'yosser','email'=>'test@test.fr','password'=>Hash::make('0000')]);
        //Auth::attempt(['email'=>'test@test.fr','password'=>'0000','validated'=>1]);
        //$user=User::first();
        //Auth::logout();
        //dd(Auth::check());
        //le clef sera un tableau et la valeur prend a
        //session::put('clef.a','valeur');
        //dd(session::all());
        $post= Omar::with('cat')->get();
         return view('omars.index',compact('post'));

    }
    public function edit($id){
        $post=Omar::findOrFail($id);
        $categorie= Cat::pluck('name','id');
        //dd($categorie);

        return view('omars.edit',compact('post','categorie'));
    }

    public function update($id , Request $request){


        $post=Omar::findOrFail($id);
            $post->update($request->all());
            //$post->tgs()->sync($request->get('tgs'));
            //return view('default');
        Session::flash('success',"mise a jour réussie");
            return redirect( route('news.edit',$id));


       // dd($request->all());
        //pour que sa fonctionne au niveau du base de données a partir ml systeme

    }


   public function show($id){
       $post= Omar::published()->where('id',$id)->firstOrFail();
        return $post;

    }


    public function create(Request $request){
        $post=new Omar();
        $categorie=Cat::pluck('name','id');

        //$post->tgs()->sync($request->get('tgs',[]));
        return view('omars.create',compact('post','categorie'));
    }

    public function store(Request $request){
        $post= Omar::create($request->all());
        return redirect(route('news.index',$post));
    }

    public function destroy($id)
    {
        //delete produit
        $post=Omar::findOrFail($id);
        $post->delete();
        return redirect()->route('news.index')->with('alert alert-success','suppression- sucess');


    }
}
