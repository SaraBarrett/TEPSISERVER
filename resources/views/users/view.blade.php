@extends('layouts.fe_layout')
@section('content')
    <h5>Dados de User</h5>

    <p>{{ $user->name }}</p>
    <p>{{ $user->nif }}</p>
    <p>{{ $user->address }}</p>
@endsection
