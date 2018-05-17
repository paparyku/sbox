@extends('layouts.main')

@section('title') 
    Home 
@stop 

@section('content')
    <section class="hero is-primary is-medium">
        <div class="hero-bg" style='background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("https://files.facepunch.com/s/c7802ce14e04.png"); background-repeat: no-repeat; background-size: cover;'>
            <div class="hero-head"></div>
            <div class="hero-body">
                <div class="container">
                    <h1 class="title">
                        Welcome to <strong>SBOX</strong>!
                    </h1>
                    <h2 class="subtitle">
                        Track, discover, review and create <a class="has-text-weight-bold has-text-link" href="https://sandbox.facepunch.com" target="_blank">S&box</a> addons.
                    </h2>
                </div>
            </div>
        </div>
    </section>
@stop
