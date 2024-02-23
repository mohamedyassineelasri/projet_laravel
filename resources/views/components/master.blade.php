<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>{{$title}}</title>
    <link rel="stylesheet" href="resources/css/app.css">
    {{-- @vite('resources/css/app.css') --}}
     {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}
     <link rel="stylesheet" href="{{asset('fontawesome-free-6.5.1-web\css\all.min.css')}}">
</head>
<body>
    @include('partials.nav')<br>
    <br>
    <main class="text text-secondary p-5">
        <div class="container">
            <div class="row my-3">
                {{-- flashbag ====message de compte crée--}}
                @include('partials.flashbag')
            </div>
            {{$slot}}
        </div>
    </main>
    @include('partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
