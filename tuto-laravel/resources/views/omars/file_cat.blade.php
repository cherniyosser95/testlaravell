<?php
if($cat->id){
    $options=['method'=>'put','url'=>action('CategorieController@update',$cat)];
}else{
    $options=['method'=>'post','url'=>action('CategorieController@store',$cat)];
}

?>
@include('errors')

{!!   Form::model($cat,$options)!!}

<div class="form-group">
    {!! Form::label('name','title') !!}

    {!! Form::text('name',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('slug','Slug') !!}

    {!! Form::text('slug',null,['class'=>'form-control']) !!}
</div>

<button class="btn btn-danger">
    Envoyer
</button>
{!!Form::close() !!}