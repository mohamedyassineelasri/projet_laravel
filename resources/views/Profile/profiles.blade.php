

<x-master title=" Mon profil">
<h3 >Profile</h3>
<div class="row m-5">
    {{-- @foreach ($profiles as $profile) --}}
        <x-profile-card />

    {{-- @endforeach --}}
</div>


        <x-alert type="success">
            <h1>Profile .</h1>
            {{-- {{$profiles->links()}} --}}
        </x-alert>
        {{-- <a href="{{route('create')}}">ajouter</a> --}}
{{-- <x-footer/> --}}


</x-master>
