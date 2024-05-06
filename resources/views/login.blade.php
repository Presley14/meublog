@extends('templates/login_layout')

@section('content')
    <div class="container_login">
        <div class="caixa_login">
            <h1 class="titulo_login">Login</h1>
            <form action="{{ route('formLogin') }}" method="POST">
                @csrf
                <div class="input_login">
                    <label class="input_label" for="usuario">Usuário:</label>
                    <input class="input_input" name="usuario" type="text" required placeholder="Nome" value="{{ old('usuario') }}">
                </div>
                @error('usuario')
                    <div class="texto-erro">{{ $errors->get('usuario')[0] }}</div>
                @enderror
                <div class="input_login">
                    <label class="input_label" for="senha">Senha:</label>
                    <input class="input_input_senha" name="senha" type="password" required placeholder="Senha" value="{{ old('senha') }}">
                </div>
                @error('senha')
                    <div class="texto-erro">{{ $errors->get('senha')[0] }}</div>
                @enderror
                <div class="caixa_btn_login">
                    <button class="btn_entrar_login" type="submit">Entrar</button>
                    <a class="btn_cancela_login" href="{{ asset('/') }}">Cancelar</a>
                </div>
                @if(session()->has('login_error'))
                    <div class="login_error">
                        {{session()->get('login_error')}}
                    </div>
                @endif
                <div>
                    <a class="cadastro" href="{{ asset("cadastro") }}">Cadastre-se</a>
                </div>
            </form>
        </div>
    </div>
@endsection
