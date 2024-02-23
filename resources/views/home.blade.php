
<x-master title="Page d'acceuil">

    <x-alert type="secondary" >

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
            <a class="navbar-brand" href="#">Accueil</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                </ul>

                <form class="d-flex"  method="GET">
                    <input class="form-control me-2" type="search" name="search" placeholder=" Name"aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>


            </div>
            </div>
        </nav>


    </x-alert>

    <div style="display: flex;justify-content: space-between">
        <a style="margin-buttom: 15px"  href="{{ route('export') }}" class="alert alert-secondary p-2 px-5">Export</a>
        <a href="{{ route('pdf') }}" class="alert alert-secondary p-2 px-5">Pdf</a>

        <form style="display: flex" action="{{ route('import') }}" enctype="multipart/form-data" method="POST">
            @csrf
            <input type="file" class="form-control  p-2 mx-5 px-2" name="file" accept=".xlsx, .csv">
            <button  href="" type="submit" class="alert alert-secondary p-2 mx-5  px-5">Import</button>
        </form>
    </div>


    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
                <th scope="col">Bio</th>
                <th scope="col">Image</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($results as $p)
                <tr>
                    <th scope="row">{{$p->id}}</th>
                    <td>{{$p->name}}</td>
                    <td>{{$p->email}}</td>
                    <td>{{$p->password}}</td>
                    <td>{{$p->bio}}</td>
                    <td>{{$p->image}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

        {{-- <a  class="alert alert-secondary" href="{{route('etat')}}">tâche terminée</a> --}}

        {{-- <a class="alert alert-secondary"  href="{{route('etatN')}}">tâche Non terminée</a><br><br> --}}
        {{$results->links()}}



</x-master>
