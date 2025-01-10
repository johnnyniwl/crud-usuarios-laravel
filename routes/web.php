<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;

// // Route::get('/', function () {
// //     // return view('welcome');
// //     //return Route::resource('/', UsuarioController::class);
// // });

// Route::resource('/', UsuarioController::class);



// Página inicial redireciona para a listagem de usuários
Route::get('/', function () {
    return redirect()->route('usuarios.index');
});

// Grupo de rotas para o CRUD de usuários
Route::prefix('usuarios')->name('usuarios.')->group(function () {
    // Listagem de usuários
    Route::get('/', [UsuarioController::class, 'index'])->name('index');

    // Página de cadastro de novo usuário
    Route::get('/create', [UsuarioController::class, 'create'])->name('create');

    // Salvar um novo usuário
    Route::post('/', [UsuarioController::class, 'store'])->name('store');

    // Página de edição de usuário
    Route::get('/{id}/edit', [UsuarioController::class, 'edit'])->name('edit');

    // Atualizar um usuário
    Route::put('/{id}', [UsuarioController::class, 'update'])->name('update');

    // Excluir um usuário
    Route::delete('/{id}', [UsuarioController::class, 'destroy'])->name('destroy');
});

Route::get('/usuarios/{id}/alterar-senha', [UsuarioController::class, 'showChangePasswordForm'])->name('usuarios.change-password');
Route::post('/usuarios/{id}/alterar-senha', [UsuarioController::class, 'updatePassword'])->name('usuarios.update-password');


