@extends('layouts/app')

@section('content')
 <h3>For the code {{$search}} your website is:</h3>
    @if(count($urls)>0)
    @foreach($urls as $url)
        @if($url->code==$search)
        <div class="well">

        <h3>{{$url->url}}</h3>
        @endif
    </div>
    @endforeach
@else
    <p>No posts in database.</p>
@endif  

    <a href="/submit" class="btn btn-default">New Url</a>
    <a href="/code" class="btn btn-default">Enter Code</a>
@endsection