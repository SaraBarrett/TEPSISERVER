@extends('layouts.fe_layout')

@section('content')
    <form method="POST" action="{{ route('password.update') }}">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input name="email" value="{{ request()->email }}" type="email" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>


        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="password" required ="password" class="form-control" id="exampleInputPassword1">
        </div>
        @error('password')
            <p>password não válida</p>
        @enderror


        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Confirmação da Pass</label>
            <input type="password" name="password_confirmation" required ="password" class="form-control"
                id="exampleInputPassword1">
        </div>
        @error('password')
            <p>password não válida</p>
        @enderror
        <input type="hidden" name="token" value="{{ request()->route('token') }}">
        <button type="submit" class="btn btn-primary">Actualizar Pass</button>


    </form>
@endsection
