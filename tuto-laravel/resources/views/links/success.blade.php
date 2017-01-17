@extends('default')
@section('content')
    <h1>Bravo</h1>
   <p><a class="btn btn-primary"  href="{{action('linkController@show',['id'=>$link->id])}}">
           {{action('linkController@show',['id'=>$link->id])}}

       </a>
        </p>


    </form>
@stop