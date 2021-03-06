@extends('templates.template1')

@section('content')

    @auth
        <h1>MES PLAYLISTS</h1>

        <ul>
            @foreach($playlists as $playlist)
            <li><a href='/playlist/{{$playlist->id}}'>{{$playlist->titre}}</a></li>
            @endforeach
        </ul>
    @endauth

    @guest
        Pour avoir accès à toutes les fonctionnalités du site et pouvoir créer vos playlists, <b><a href='login'>Connectez-vous</a></b> ou <b><a href='register'>Créez un compte</a></b>
    @endguest

@endsection