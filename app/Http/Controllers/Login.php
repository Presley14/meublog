<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Login extends Controller
{
    public function login()
    {
        $data = [
            'title' => 'Login'
        ];

        return view('login', $data);
    }


    public function formLogin( Request $request)
    {
        $request->validate([
            'usuario' => 'required|min:3',
            'senha' => 'required|min:3'
        ],
        [
            'usuario.required' => 'O campo é de preenchimento obrigatório.',
            'senha.required' => 'O campo é de preenchimento obrigatório.',

            'usuario.min' => 'O campo usuário deve possuir no mínimo 3 caracteres.',
            'senha.min' => 'O campo senha deve possuir no mínimo 3 caracteres.'
        ]);

        $nome = $request->input('usuario');
        $senha = $request->input('senha');


        $userModel = new UserModel();
        $user = $userModel->where('username', '=', $nome)
                            ->whereNull('deleted_at')                      
                            ->first();

        if($user){
            if(password_verify($senha, $user->password)){
                $sessionUser = [
                    'id' => $user->id,
                    'username' => $user->username
                ];

                session()->put( $sessionUser);

                return redirect()->route('createArticle');
            }
        }

        return redirect()->route('login')
                         ->withInput()
                         ->with('login_error', 'Login inválido!');

    }

    public function logout()
    {
        session()->forget('username');
        return redirect()->route('login');
    }

    /* Cadastro */

    public function cadastro()
    {
        $dados = [
            'title' => 'Cadastrar'
        ];
        return view('cadastro', $dados);
    }

    public function formCadastro(Request $request)
    {
        $request->validate([
            'nome' => 'required|min:3|max:25',
            'senha' => 'required|min:3|max:25',
        ],
        [
            'nome.required' => 'O campo é obrigatório.',
            'senha.required' => 'O campo é obrigatorio.',

            'nome.min' => 'O campo deve conter no minímo 3 caracteres.',
            'senha.min' => 'O campo deve conter no minímo 3 caracteres.',

            'nome.max' => 'O campo deve conter no máximo 25 caracteres.',
            'senha.max' => 'O campo deve conter no máximo 25 caracteres.',

        ]);

        $countUser = UserModel::count();
        if($countUser > 1){
            return redirect()->route('cadastro')
                             ->with('error', 'Não foi possível cadastrar! Apenas um usuário pode ser cadastrado como administrador.');
        }else{
            $user = UserModel::create([
                'username' => $request->input('nome'),
                'password' => Hash::make($request->input('senha')),
            ]);
        }

        if($user){
            return redirect()->route('login')
                            ->with('success', 'Cadastro realizado com sucesso!');
        }
        
    }
}
