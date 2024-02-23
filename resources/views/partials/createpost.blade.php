<x-master title="Mon profile">
    <h3>Ajouter Post</h3>
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
    <form action="{{route('settings.store')}}" method="post" enctype="multipart/form-data">

        @csrf
        <div class="mb-3">
            {{-- <label>profile_id </label> --}}
            <input type="text" value="{{$id}}" hidden  name="profile_id" value="{{old('profile_id')}}" class="form-control" />
            @error('profile_id')
                <h6 class="text-danger">{{$message}}</h6>
            @enderror
        </div>
        <div class="mb-3">
            <label>bio </label>
            <input type="text" name="bio" value="{{old('bio')}}" class="form-control"/>
            @error('bio')
                <h6 class="text-danger">{{$message}}</h6>
            @enderror
        </div>
        <div class="mb-3">
            <label>title</label>
            <input type="text" name="title" value="{{old('title')}}" class="form-control"/>
            @error('title')
            <h6 class="text-danger">{{$message}}</h6>
            @enderror
        </div>
        <div class="mb-3">
            <label>Image</label>
            <input type="file" name="image" id=""  class="form-control">
        </div>
        <div class="d-grid my-2">
            <button type="submit" class="btn btn-primary" >Ajouter</button>
        </div>
    </form>
</x-master>
