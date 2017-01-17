@extends('default')

@section('content')
    <div class="row">

        <div class="col-md-12">
            <h1>Liste des produits</h1>
        </div>
    </div>
    <div class="row">
        <table class="table table-striped">
            <tr>
                <th></th>
                <th>No.</th>
                <th>Name</th>
                <th>Slug</th>
                <th>Action</th>

            </tr>
            <a href="{{route('cats.create')}}" class="btn btn-info pull-right">create new produit</a><br><br>
            <?php
            $no=1;
            ?>

            @foreach($cat as $cats)
                <tr>
                    <td></td>
                    <td>{{$no++}}</td>

                    <td>{{$cats->name}}</td>

                    <td>{{$cats->slug}}</td>

                    <td>
                        <form class="" action="{{route('cats.destroy',$cats)}}" method="post">
                            <input type="hidden" name="_method" value="delete">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <a class="btn btn-primary" href="{{ route('cats.edit',$cats)}}">Editer</a>
                            <input type="submit" class="btn btn-danger"  name="name" value="delete">

                        </form>
                    </td>

                </tr>
            @endforeach
        </table>
    </div>

@stop