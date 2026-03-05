@extends('layouts.fe_layout')

@section('content')
    <h6>Homepage {{ $className }}</h6>
    <p>O curso tem {{ $courseInfo['classesNr'] }} disciplinas, {{ $courseInfo['hrs'] }} e a responsável é a
        {{ $courseInfo['responsable'] }}</p>
    <p>o {{ $cesaeInfo['name'] }} tem a morada {{ $cesaeInfo['address'] }} e o email é {{ $cesaeInfo['email'] }}</p>
    <ul>
        <li><a href="{{ route('utils.home') }}">Hello</a></li>
        <li><a href="{{ route('users.add') }}">Adicionar Utilizadores</a></li>
        <li><a href="{{ route('users.all') }}">Todos os Utilizadores</a></li>
        <li><a href="{{ route('tasks.all') }}">Todas as Tarefas</a></li>
    </ul>
    <h5>Lista de Tarefas</h5>
    <ul>
        @foreach ($tasks as $task)
            <li>{{ $task }}</li>
        @endforeach
    </ul>
@endsection
