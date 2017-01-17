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
                <th>Title</th>
                <th>content</th>
                <th>Slug</th>
                <th>Categorie Name</th>
                <th>Action</th>

            </tr>
            <a href="{{route('news.create')}}" class="btn btn-info pull-right">create new produit</a><br><br>
            <?php
            $no=1;
            ?>
    @foreach($post as $posts)
        <tr>
            <td></td>
                <td>{{$no++}}</td>

                <td>{{$posts->name}}</td>
    <td>{{$posts->content}}</td>

        <td>{{$posts->slug}}</td>
                @if($posts->cat)
                   <td>{{$posts->cat->name}}</td>
                @endif
                <td>
                    <form class="" action="{{route('news.destroy',$posts)}}" method="post">
                        <input type="hidden" name="_method" value="delete">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                       <a class="btn btn-primary" href="{{ route('news.edit',$posts)}}">Editer</a>
                        <input type="submit" class="btn btn-danger"  name="name" value="delete">

                    </form>
                </td>

                </tr>
            @endforeach
        </table>
        </div>

@stop