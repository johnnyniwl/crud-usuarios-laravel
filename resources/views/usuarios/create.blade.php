@extends('layouts.app')

@section('content')
    <h1>Cadastrar Novo Usuário</h1>

    <form action="{{ route('usuarios.store') }}" method="POST" class="mt-3">
        @csrf
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" id="nome" name="nome" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" id="email" name="email" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="senha" class="form-label">Senha</label>
            <input type="password" id="senha" name="senha" class="form-control" minlength="6" required>
        </div>

        <button type="submit" class="btn btn-success">Cadastrar</button>
        <a href="{{ route('usuarios.index') }}" class="btn btn-secondary">Voltar</a>
    </form>
@endsection
