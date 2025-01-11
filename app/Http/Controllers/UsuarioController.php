<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuarios = Usuario::orderBy('id', 'DESC')->get();
        return view('usuarios.index', compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $customMessages = [
            'nome.required' => 'O campo nome é obrigatório.',
            'email.required' => 'O campo email é obrigatório.',
            'email.email' => 'Por favor, insira um email válido.',
            'email.unique' => 'Este email já está em uso. Por favor, escolha outro.',
            'senha.required' => 'O campo senha é obrigatório.',
            'senha.min' => 'A senha deve ter pelo menos :min caracteres.',
        ];

        $request->validate([
            'nome' => 'required',
            'email' => 'required|email|unique:usuarios',
            'senha' => 'required|min:6',
        ], $customMessages);

        try {

            Usuario::create([
                'nome' => $request->nome,
                'email' => $request->email,
                'senha' => Hash::make($request->senha),
            ]);

            return redirect()->route('usuarios.index')->with('success', 'Usuário cadastrado com sucesso!');
        } catch (\Exception $e) {
            return redirect()->route('usuarios.index')->with('error', 'Ocorreu um erro ao cadastrar o usuário.');
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $usuario = Usuario::findOrFail($id);
        return view('usuarios.show', compact('usuario'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $usuario = Usuario::findOrFail($id);
        return view('usuarios.edit', compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nome' => 'required',
            'email' => 'required|email|unique:usuarios,email,' . $id,
        ]);

        $usuario = Usuario::findOrFail($id);
        $usuario->update($request->all());

        return redirect()->route('usuarios.index')->with('success', 'Usuário atualizado com sucesso!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Usuario::findOrFail($id)->delete();
        return redirect()->route('usuarios.index')->with('success', 'Usuário excluído com sucesso!');

    }

    public function showChangePasswordForm($id)
    {
        $usuario = Usuario::findOrFail($id);
        return view('usuarios.change-password', compact('usuario'));
    }

    public function updatePassword(Request $request, $id)
    {
        $request->validate([
            'senha_atual' => 'required',
            'nova_senha' => 'required|min:6|confirmed',
        ]);

        $usuario = Usuario::findOrFail($id);

        if (!Hash::check($request->senha_atual, $usuario->senha)) {
            return back()->withErrors(['senha_atual' => 'A senha atual está incorreta.']);
        }

        $usuario->senha = Hash::make($request->nova_senha);
        $usuario->save();

        return redirect()->route('usuarios.index')->with('success', 'Senha alterada com sucesso!');
    }


}
