@extends('layouts.fe_layout')

@section('content')
    <img width="250px" height="200px" src="{{ asset('images/5ea9a2c7-bd2e-46b0-b858-701f9cfbd7b1.png') }}" alt="">
    <h3>Aqui podes adicionar utilizadores</h3>
    @if ($classDelegate)
        <h6>Se tiver esclarecimentos acerca da app, consulte o {{ $classDelegate }}</h6>
    @endif
@endsection
