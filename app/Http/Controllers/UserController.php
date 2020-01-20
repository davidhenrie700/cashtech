<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index()
    {
        return view('register.user.user');
    }

    public function edit(User $user)
    {
        return view('register.user.editUser');
    }

    public function store(Request $request, User $user)
    {
        $request->validate([
            'cpf' => 'required|unique:users',
            'nome' => 'required:users',
            'senha_user' => 'required:users',
            'area' => 'required:users',
            'nivel' => 'required:users'
        ]);

            $user->nome = $request->nome;
            $user->cpf = $request->cpf;
            $user->area = $request->area;
            $user->empresa = $request->empresa;
            $user->nivel = $request->nivel;
            $user->senha_user = Hash::make($request->nivel);
            $user->save(); 

            return redirect()->route('user.index')->with('message', 'Usuário cadastrado com sucesso!');

    }
}
