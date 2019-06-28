@extends('layouts/app')

@section('content')
    
    <h3>Submit URL:</h3>
    
    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('url', 'URL') }}
            {{Form::text('url', '', ['class'=>'form-control','placeholder'=>'Enter the URL'])}}
        </div>
        {{Form::submit('Submit', ['class'=>'btn btn-primary']) }}
    {!! Form::close() !!}
<br>

<a href="/" class="btn btn-default"><- Back</a>

@endsection

