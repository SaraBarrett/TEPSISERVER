@extends('layouts.fe_layout')
@section('content')
    <h5>Dados de User {{ $user->name }}</h5>

    <form method="POST" action="{{ route('users.update') }}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="exampleInputName" class="form-label">Nome</label>
            <input value="{{ $user->name }}" type="text" required name="name" class="form-control" id="exampleInputName"
                aria-describedby="emailHelp">
        </div>
        @error('name')
            <p>Nome não válido</p>
        @enderror

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input disabled name="email" value="{{ $user->email }}" type="email" class="form-control"
                id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputName" class="form-label">Nif</label>
            <input value="{{ $user->nif }}" type="text" name="nif" class="form-control" id="exampleInputName"
                aria-describedby="emailHelp">
        </div>
        <input type="hidden" name="id" value="{{ $user->id }}">
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
@endsection
