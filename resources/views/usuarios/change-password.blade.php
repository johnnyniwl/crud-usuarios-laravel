@extends('layouts.app')

@section('content')
<div class="container">
    <h5 class="text-success">Alterar Senha</h5>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('usuarios.update-password', $usuario->id) }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="senha_atual" class="form-label">Senha Atual</label>
            <input type="password" class="form-control" id="senha_atual" name="senha_atual" required>
        </div>
        <div class="mb-3">
            <label for="nova_senha" class="form-label">Nova Senha</label>
            <input type="password" class="form-control" id="nova_senha" name="nova_senha" required>
        </div>
        <div class="mb-3">
            <label for="nova_senha_confirmation" class="form-label">Confirme a Nova Senha</label>
            <input type="password" class="form-control" id="nova_senha_confirmation" name="nova_senha_confirmation" required>
        </div>
        <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
        <a href="{{ route('usuarios.index') }}" class="btn btn-secondary btn-sm">Voltar</a>
    </form>
</div>
@endsection
