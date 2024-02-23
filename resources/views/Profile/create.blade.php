<x-master title="Mon profile">
    <h3>Ajouter profile</h3>
    @if($errors->any())
        <x-alert type="danger">
            <h5>Errors : </h5>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </x-alert>
    @endif
    <form method="POST" action="{{ route('profile.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label>Nom complet </label>
            <input type="text" name="name" value="{{old('name')}}" class="form-control"/>
            @error('name')
                <h6 class="text-danger">{{$message}}</h6>
            @enderror
        </div>
        <div class="mb-3">
            <label>Email </label>
            <input type="text" name="email" value="{{old('email')}}" class="form-control"/>
            @error('email')
                <h6 class="text-danger">{{$message}}</h6>
            @enderror
        </div>
        <div class="mb-3">
            <label>Mot de passe </label>
            <input type="password" name="password" value="{{old('password')}}" class="form-control"/>
        </div>
        <div class="mb-3">
            <label>confirmation du mot de passe </label>
            <input type="password" name="password_confirmation" class="form-control"/>
        </div>
        <div class="mb-3">
            <label>Description</label>
            <textarea class="form-control" name="bio">{{old('bio')}}</textarea>
        </div>
        <div class="mb-3">
            <label>Image</label>
            <input type="file" name="image" id=""  class="form-control">
        </div>
        <div class="d-grid my-2">
            <button type="submit"  class="btn btn-primary" >Ajouter</button>
        </div>
    </form>
</x-master>
