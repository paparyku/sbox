<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SBOX @yield('title')</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
        crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    @include('partials.navbar')

    <div id="root">
        <section class="hero is-primary">
            <div class="hero-body">
                <p class="title">
                    Documentation
                </p>
                <p class="subtitle">
                    Everything you need to
                    <strong>create a website</strong> with Bulma
                </p>
            </div>
        </section>
    </div>


    @include('partials.footer')
    <script src="{{ asset('js/app.js')}}"></script>
</body>

</html>
