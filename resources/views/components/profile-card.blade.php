<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
</head>
<body>

    <div class="col-sm-4  w-75">
        <div class="card w-100 hh">
            <img  style="max-height: 550px"  src="{{asset('storage/'.auth()->user()->image)}}" class="card-img-top " alt="...">
            <a class="alert alert-secondary" href="{{ route("settings.create",auth()->user()->id)}}">Add post</a>
            <a class="alert alert-secondary" href="{{ route("settings.edit",auth()->user()->id)}}">Publication de profile</a>
            <div class="card-body">
                <ul >
                    <div>
                        <li><h5 class="card-title">{{auth()->user()->name}}</h5></li>
                        <li><h5 class="card-title">{{auth()->user()->email}}</h5></li>
                        <li><h5 class="card-text">{{Str::limit(auth()->user()->bio,50)}}</h5></li><br>

                    </div>


                </ul>
                <div style="display: flex; justify-content: space-between">
                    <a class="btn btn-primary" href="{{ route("profile.show",auth()->user()->id)}}">Afficher plus</a>

                    <form  action="{{route('profile.destroy',auth()->user()->id)}}" method="post">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger">Supprimer</button>
                    </form>
                    <form action="{{route('profile.edit',auth()->user()->id)}}" method="get">
                        @csrf
                        @method('PUT')
                        <button class="btn btn-success">Modifier</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
    <div class="container">
    </div>


</body>
</html>
