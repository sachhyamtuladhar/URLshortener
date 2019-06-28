@extends('layouts/app')

@section('content')
    <h3>URLS:</h3>
    @if(count($urls)>0)
        @foreach($urls as $url)
        <div class="well">
            <h3>{{$url->url}}</h3>
            <small> code is {{$url->code}}</small>
        </div>
        @endforeach
    @else
        <p>No posts fund.</p>
    @endif

    <a href="/submit" class="btn btn-default">New Url</a>
    <a href="/code" class="btn btn-default">Enter Code</a>
@endsection