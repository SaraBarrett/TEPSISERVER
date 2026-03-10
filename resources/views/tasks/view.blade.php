@extends('layouts.fe_layout')
@section('content')
    <h5>Dados de User</h5>

    <p>{{ $task->name }}</p>
    <p>{{ $task->description }}</p>
    <p>{{ $task->username }}</p>
@endsection
