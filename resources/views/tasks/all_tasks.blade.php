@extends('layouts.fe_layout')
@section('content')
    @if (session('message'))
        <div class="alert alert-success">
            <p>{{ session('message') }}</p>

        </div>
    @endif
    <h5>Aqui estará a lista de todas as tarefas</h5>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Estado</th>
                <th scope="col">Data de Conclusão</th>
                <th scope="col">User</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $task)
                <tr>
                    <th scope="row">{{ $task->id }}</th>
                    <td>{{ $task->name }}</td>
                    <td>{{ $task->status }}</td>
                    <td>{{ $task->due_at }}</td>
                    <td>{{ $task->username }}</td>
                    <td><a href="{{ route('tasks.view', $task->id) }}" class="btn btn-info">Ver</a></td>
                    <td><a href="{{ route('tasks.delete', $task->id) }}" class="btn btn-danger">Apagar</a></td>
                </tr>
            @endforeach


        </tbody>
    </table>
@endsection
