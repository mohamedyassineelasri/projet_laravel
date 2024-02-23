
{{-- @extends('layouats/master')
@section('title')Mes informations @endsection

@section('main')
hy settings
@endsection --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
 <style>
    .hh:hover{
        text-shadow:none !important;
        box-sizing:border-box !important;
        cursor:pointer !important;
        transition:all 0.3s ease !important;
        -webkit-transform: scale(1.1) !important;
        -ms-transform: scale(1.1) !important;
        transform: scale(1.1) !important;
        z-index:2;
    }

 </style>
<body>

    <x-master title="Mes informations">

        <x-alert type="secondary">
            <h1>Mes informations.</h1>
        </x-alert>
        {{-- <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#">Instagram</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Profile</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Settings</a>
                </li>
            </ul>
            </div>
        </nav> --}}

    @foreach($postid as $p)
            <div class="container mt-4">
                <div class="row ">
                <div class="col-md-8 offset-md-2 wow fadeInLeft slow hh">
                    <div class="card post alert alert-secondary">
                    <h1 class="card-text text-secondary text-center"><i class="fa-solid fa-house ms-0 d-flex justify-content-start"></i>{{$p->title}}</h1>

                    <img  src="{{asset('storage/'.$p->image)}}" alt="Post Image" class="card-img-top img">
                    <div class="card-body ms-5" >
                        <p class="card-text" style="display: flex">
                            <button  id="monBouton" class="alert alert-secondary"><i class="fa-regular fa-heart"></i></button>
                            <button  id="monBouton" class="alert alert-secondary"><i class="fa-regular fa-comment"></i></button>
                            <button  id="monBouton" class="alert alert-secondary"><i class="fa-regular fa-bookmark"></i></button></p>
                        <p class="card-text">{{$p->bio}}</p>
                    </div>
                    <div style="display: flex;justify-content:space-between">
                        <p class="card-text m-3">{{$p->created_at}}</p>
                        <form action="{{route('settings.delete',$p->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">DELETE</button>

                        </form>
                    </div>

                    </div>

                    <!-- Ajoutez d'autres posts ici -->

                </div>
                </div>
            </div>
    @endforeach





        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        </body>

        <script>
            document.getElementById('monBouton').addEventListener('click', function() {
                // Code à exécuter lors du clic
                alert('Bouton cliqué!');
            });
        </script>
    </x-master>

</body>
</html>
