<x-master title="Se Connecter">
    <div class="container w-75 my-2 bg-light p-5">
        <h3>Authentification</h3>
        <form method="POST" action="{{route('login')}}">
            @csrf
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="text" name="login" class="form-control" value="{{old('login')}}">
                @error('login')
                    <h6 class="text-danger">{{$message}}</h6>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Mot de passe</label>
                <input type="password" name="password" class="form-control">

            </div>
            <div class="d-grid">
                <button class="btn btn-primary">Se connecter</button>
            </div>
        </form>
    </div>
</x-master>
