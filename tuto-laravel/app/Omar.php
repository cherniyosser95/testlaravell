<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Omar extends Model
{
    public $fillable=['name','slug','content','onLine','cat_id','tags_list'];

    public function cat(){
        //fonction pour faire l'association (on donne le nameSpace du modele dont le quel on va lui associer nos article);
        return $this->belongsTo('App\Cat');
    }
    //fonction pour recuperer tous les articles publiées
   public function scopePublished($query){
        return $query->where('onLine',true)->whereRaw('created_at < now()');

    }


    public function tgs(){
        return $this->belongsToMany('App\Tg','omar-tg');
    }

    public function getTagsListAttribute(){
        if($this->id){
return $this->tgs->pluck('id');}
    }
    public function setTagsListAttribute($value){
//dd($value);

            return $this->tgs()->sync($value);
    }

    public function scopeSearchByName($query,$n){
        return $query->where('name', 'Like' , '%' .$n.'%' );

    }
    public function setSlugAttribute($name){
        if(empty($name)){
            $this->attributes['slug']=Str::slug($this->name);


        }

    }
    public function getDates(){
        return ['created_at','updated_at','published_at'];

    }



}
