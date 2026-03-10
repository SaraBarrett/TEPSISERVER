@extends('layouts.fe_layout')

@section('content')
    <img width="250px" height="200px" src="{{ asset('images/5ea9a2c7-bd2e-46b0-b858-701f9cfbd7b1.png') }}" alt="">
    {{-- lista de users de simulação da bd --}}
    <ul>
        @foreach ($usersNotFromDB as $user)
            <li>{{ $user['name'] }}</li>
        @endforeach
    </ul>


    <h3>Aqui podes adicionar utilizadores</h3>
    @if ($classDelegate)
        <h6>Se tiver esclarecimentos acerca da app, consulte o {{ $classDelegate }}</h6>
    @endif


    <form method="POST" action="{{ route('users.store') }}">
        @csrf
        <div class="mb-3">
            <label for="exampleInputName" class="form-label">Nome</label>
            <input type="text" required name="name" class="form-control" id="exampleInputName"
                aria-describedby="emailHelp">
        </div>
        @error('name')
            <p>Nome não válido</p>
        @enderror

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input name="email" required type="email" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        @error('email')
            <p>email não válido</p>
        @enderror

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="password" required ="password" class="form-control" id="exampleInputPassword1">
        </div>
        @error('password')
            <p>password não válida</p>
        @enderror
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
