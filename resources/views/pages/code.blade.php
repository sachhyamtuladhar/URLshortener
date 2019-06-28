@extends('layouts/app')

@section('content')
    <h3>Enter Your Code</h3>
        
    <form action = '/search' mehod='get'>
        <div class='input-group''>
            <input type="search" name='search' class='form-control'  width='300px>
            <span class='input-group-prepend'>
                <button type='submit' class='btn btn-primary'>GO!</button>
            </span>

        </div>


    </form>
    <br>

    <a href="/" class="btn btn-default"><- Back</a>

@endsection