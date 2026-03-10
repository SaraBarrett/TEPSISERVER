@extends('layouts.fe_layout')

@section('content')
    <h3>Aqui podes adicionar tarefas</h3>

    <form method="POST" action="{{ route('tasks.store') }}">
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
            <label for="exampleInputName" class="form-label">Descrição</label>
            <input type="text" name="description" class="form-control" id="exampleInputName"
                aria-describedby="emailHelp">
        </div>

        <select name="user_id" required class="form-select" id="userSelect">
            <option selected disabled value="">Selecione um utilizador</option>
            @foreach ($users as $user)
                <option value="{{ $user->id }}">{{ $user->name }}</option>
            @endforeach
        </select>




        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
