@extends('layouts.fe_layout')

@section('content')
    <h6>Homepage</h6>
    <ul>
        <li><a href="{{ route('utils.home') }}">Hello</a></li>
        <li><a href="{{ route('users.add') }}">Adicionar Utilizadores</a></li>
    </ul>
@endsection
