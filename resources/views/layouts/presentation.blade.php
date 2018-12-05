@extends('template.template')

@section('title', 'Présentation')

@section('SousTitre', 'Association de Chiens de Traineau Gorges du Loup - C.T.G.L.')

@section('content')

    <div class="text-center">
        {{$pages->content}}
    </div>

@endsection
