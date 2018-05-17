@extends('layouts.main')

@section('title') 
    {{ str_plural($user->name) }} profile
@stop 

@section('content')
    <div class="container">
        <div class="columns">
            <div class="column is-3">
                <article class="card">
                    <div class="card-content">
                        <center>
                            <img width="90" height="90" style="border-radius: 50%; box-shadow: 4px 0 10px -2px rgba(0,0,0,0.4);" src="{{ $user->avatar }}" alt="{{ str_plural($user->name) }} avatar image">
                            <h1 class="is-size-4">{{ $user->name }}</h1>
                            <p class="has-text-centered is-size-7">{{ $user->bio ? $user->bio : $user->name . ' needs to set their bio.' }}</p>
                        </center>
                    </div>
                </article>
            </div>
            <div class="column is-9">

            </div>
        </div>
    </div>
@stop
