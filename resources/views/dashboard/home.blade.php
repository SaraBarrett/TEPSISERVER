@extends('layouts.fe_layout')

@section('content')
    <h6>Olá {{ Auth::user()->name }}</h6>

    @if (Auth::user()->user_type == 1)
        <div class="alert alert-sucess">
            és um admin

        </div>
    @endif
@endsection
