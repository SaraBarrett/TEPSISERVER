@extends('layouts.fe_layout')

@section('content')
    <h6>Homepage {{ $className }}</h6>
    <p>O curso tem {{$courseInfo['classesNr']}} disciplinas, {{$courseInfo['hrs']}} e a responsável é a  {{$courseInfo['responsable']}}</p>
    <ul>
        <li><a href="{{ route('utils.home') }}">Hello</a></li>
        <li><a href="{{ route('users.add') }}">Adicionar Utilizadores</a></li>
    </ul>
@endsection
