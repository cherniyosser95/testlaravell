<?php
if($post->id){
    $options=['method'=>'put','url'=>action('OmarsController@update',$post)];
}else{
$options=['method'=>'post','url'=>action('OmarsController@store',$post)];
}

?>
@include('errors')

{!!   Form::model($post,$options)!!}

<div class="form-group">
    {!! Form::label('name','title') !!}

    {!! Form::text('name',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('slug','Slug') !!}

    {!! Form::text('slug',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('cat_id','categorie') !!}

    {!! Form::Select('cat_id',$categorie,null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('tags_list[]','Tags') !!}

    {!! Form::select('tags_list[]',App\Tg::pluck('name','id'),null,array('class'=>'form-control','multiple'=>true)) !!}
</div>

<div class="form-group">
    {!! Form::label('content','Contenu') !!}

    {!! Form::textarea('content',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    <label >
        {!! Form::checkbox('onLine',1,null) !!}
        en ligne ?
    </label>

</div>
<button class="btn btn-danger">
    Envoyer
</button>
{!!Form::close() !!}