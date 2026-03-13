@extends('layouts.fe_layout')
@section('content')
    @if (session('message'))
        <div class="alert alert-success">
            <p>{{ session('message') }}</p>

        </div>
        @endsession
        <h5>Aqui estará a lista de todos os users</h5>
        <form>
            <input type="text" placeholder="pesquisa" name="search" id="">
            <button class="btn btn-secondary">Procurar</button>
        </form>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Nif</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($usersFromDB as $user)
                    <tr>
                        <th scope="row">{{ $user->id }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->nif }}</td>
                        @auth


                            <td><a href="{{ route('users.view', $user->id) }}" class="btn btn-info">Ver / Editar</a></td>

                            @if (Auth::user()->email == 'admin@gmail.com')
                                <td><a href="{{ route('users.delete', $user->id) }}" class="btn btn-danger">Apagar</a></td>
                            @endif
                        @endauth
                    </tr>
                @endforeach


            </tbody>
        </table>
    @endsection
