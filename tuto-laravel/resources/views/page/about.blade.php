@extends("default")
@section('content')



<h1>{!!$title!!}</h1>
<p>cherni yosser dsi302</p>

    <ul>
        @forelse($numbers as $number)
            <li>{{$number}}</li>
            @empty
        <li>Aucun chiffre</li>
            @endforelse


    </ul>
    @endsection

@section('sidebar')
    @parent
    <h3> A propos</h3>
    <p>siwar ben dhafer dsi302</p>
@endsection
@section('title',$title)