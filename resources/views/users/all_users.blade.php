@extends('layouts.fe_layout')
@section('content')
    @if (session('message'))
        <div class="alert alert-success">
            <p>{{ session('message') }}</p>

        </div>
        @endsession
        <h5>Aqui estará a lista de todos os users</h5>
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
                        <td><a href="{{ route('users.view', $user->id) }}" class="btn btn-info">Ver / Editar</a></td>
                        <td><a href="{{ route('users.delete', $user->id) }}" class="btn btn-danger">Apagar</a></td>
                    </tr>
                @endforeach


            </tbody>
        </table>
    @endsection
