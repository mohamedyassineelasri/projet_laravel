<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand "href="#"><img   style="height: 60px;width:80px" class="rounded-circle" src="{{asset('storage/profile/VihjaQ22Q7HAbNVSmXLaIETOWVE6sIjDxGmb6upS.png')}}" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon">

        </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                @auth

                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{route('index.post')}}" >Accueil</a>
                    </li>
                        {{-- had guest ila konti maxi connecter --}}
                        @guest
                            <li class="nav-item">
                                <a class="nav-link active" href="{{route('login.show')}}">Se connecter</a>
                            </li>
                        @endguest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('profile.index') }}">profil</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active"  href="{{ route('homepage') }}">Home</a>
                    </li>
                @endauth
                {{-- had guest ila konti maxi connecter --}}
                @guest
                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('login.show')}}">Se connecter</a>
                    </li>
                @endguest
                <li class="nav-item dropdown">
                    <a class="nav-link" href="{{ route('profile.create') }}">Ajouter profile</a>
                </li>
                @auth
                <li class="nav-item dropdown">
                    <a class="nav-link disabled" href="{{route('settings.index')}}" >Mes informations</a>
                </li>
                @endauth

            </ul>
            {{-- had auth ila konti connecter --}}
                @auth
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{auth()->user()->email}}
                        </button>
                        <div class="dropdown-menu">
                            <a href="" class="dropdown-item">Action</a>
                            <a class="dropdown-item" href="{{route('logout')}}">Déconnixion</a>
                        </div>
                    </div>
                @endauth

        </div>
        </div>
    </nav>

