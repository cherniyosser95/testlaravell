
@include('layouts.app')


<div class="container">
@include('layouts.nav')
    {!! Form::open(['id'=>'create']) !!}
    {!! Form::label('name','title') !!}

    {!! Form::text('name',null,['class'=>'form-control']) !!}
        {!! Form::label('content','Content') !!}
        {!! Form::textarea('content',null,['class'=>'form-control']) !!}
        {!! Form::label('category','Category') !!}
        <select class="form-control">
        @foreach($categories as $category)
            <option value{{$category->id}}>
                {{$category->name}}
            </option>
        @endforeach
            </select>
    <br>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Post</button>
    {!! Form::close() !!}
</div>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
