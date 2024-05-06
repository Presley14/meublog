@extends('templates/login_layout')
@section('content')

<div class="container_login_cadastro">
    <div class="caixa_login_cadastro">
        <h1 class="titulo_login_cadastro">Cadastro</h1>
        <form method="POST" action="{{ route('formCadastro') }}">
            @csrf
            <div class="input_login_cadastro">
                <label class="input_label_cadastro" for="nome">Usuário</label>
                <input class="input_input_cadastro" type="text" id="nome" name="nome" value="{{ old('nome') }}" required placeholder="Nome de usuário">
            </div>
            @error('nome')
                <div class="texto-erro_cadastro">{{ $errors->get('nome')[0] }}</div>
            @enderror
            <div class="input_login_cadastro">
                <label class="input_label_cadastro" for="senha">Senha</label>
                <input class="input_input_cadastro_senha" type="password" id="senha" name="senha" value="{{ old('senha') }}" required placeholder="Senha">
            </div>
            @error('senha')
                <div class="texto-erro_cadastro">{{ $errors->get('senha')[0] }}</div>
            @enderror
            <div class="caixa_btn_login_cadastro">
                <button class="btn_entrar_login_cadastro" type="submit">Cadastrar</button>
                <a class="btn_cancela_login_cadastro" href="{{ route('login') }}">Cancelar</a>
            </div>
            @if(session('error'))
                <div class="mensagem-erro_cadastro">
                    {{ session('error') }}
                </div>
            @endif
        </form> 
    </div>
</div>
    

@endsection
