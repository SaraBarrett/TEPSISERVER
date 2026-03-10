@extends('layouts.fe_layout')
@section('content')
    <h5>Dados de Tarefa</h5>

    <form method="POST" action="{{ route('tasks.update') }}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="exampleInputName" class="form-label">Nome</label>
            <input type="text" value="{{ $task->name }}" required name="name" class="form-control" id="exampleInputName"
                aria-describedby="emailHelp">
        </div>
        @error('name')
            <p>Nome não válido</p>
        @enderror

        <div class="mb-3">
            <label for="exampleInputName" class="form-label">Descrição</label>
            <input value="{{ $task->description }}" type="text" name="description" class="form-control"
                id="exampleInputName" aria-describedby="emailHelp">
        </div>

        <select name="user_id" required class="form-select" id="userSelect">
            <option selected disabled value="">Selecione um utilizador</option>
            @foreach ($users as $user)
                <option @if ($user->id == $task->user_id) selected @endif value="{{ $user->id }}">{{ $user->name }}
                </option>
            @endforeach
        </select>

        <input type="hidden" name="id" value="{{ $task->id }}">


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
