@extends('template')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            <h2 class="panel-title">Resultats du formulaire</h2>
        </div>
            <p> Titre : {{ $news['title'] }}</p>
            <p> Contenu : {{ $news['content'] }}</p>

    </div>

@endsection
