@extends('layouts.app')

@section('content')
    <h5 class="text-success">Editar Usuário</h5>

    <form action="{{ route('usuarios.update', $usuario->id) }}" method="POST" class="mt-3">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" id="nome" name="nome" class="form-control" value="{{ $usuario->nome }}" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" id="email" name="email" class="form-control" value="{{ $usuario->email }}" required>
        </div>

        <div class="mt-3">
            <a href="{{ route('usuarios.change-password', $usuario->id) }}" class="">
                Alterar Senha
            </a>
        </div>

        <br>

        <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
        <a href="{{ route('usuarios.index') }}" class="btn btn-secondary btn-sm">Voltar</a>
    </form>
@endsection
