@extends('layouts.app')
@section('content')

   <div id="cadastro" class="form-container">
        <form class="form" method="POST" action="{{ route('register') }}">
            @csrf
            <img class="entrar-img " src="./img/deliveg1.png" alt="logo">
            <div class="form-group row">
                <label for="name" class="col-md-12 col-form-label text-md-left">{{ __('Nome') }}</label>
                <div class="col-md-12">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="email" class="col-md-12 col-form-label text-md-left">{{ __('Email') }}</label>

                <div class="col-md-12">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="password" class="col-md-12 col-form-label text-md-left">{{ __('Senha') }}</label>

                <div class="col-md-12">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="password-confirm" class="col-md-12 col-form-label text-md-left">{{ __('Confirmar Senha') }}</label>
                <div class="col-md-12">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
            </div>

            <div class="form-group row">
                <label for="documento" class="col-md-12 col-form-label text-md-left">{{ __('CPF/CNPJ') }}</label>

                <div class="col-md-12">
                    <input id="documento" type="text" class="form-control" name="documento">
                </div>
            </div>

           <div class="form-group row">
                <label for="rua" class="col-md-12 col-form-label text-md-left">{{ __('Endereço') }}</label>

                <div class="col-md-12">
                    <input id="rua" type="text" class="form-control" name="rua">
                </div>
            </div>

            <div class="form-group row">
                <label for="numero" class="col-md-12 col-form-label text-md-left">{{ __('Número') }}</label>

                <div class="col-md-12">
                    <input id="numero" type="text" class="form-control" name="numero">
                </div>
            </div>

            <div class="form-group row">
                <label for="cep" class="col-md-12 col-form-label text-md-left">{{ __('CEP') }}</label>

                <div class="col-md-12">
                    <input id="cep" type="text" class="form-control" name="cep">
                </div>
            </div>

            <div class="form-group row">
                <label for="cidade" class="col-md-12 col-form-label text-md-left">{{ __('Cidade') }}</label>

                <div class="col-md-12">
                    <input id="cidade" type="text" class="form-control" name="cidade">
                </div>
            </div>

            <div class="form-group row">
                <label for="estado" class="col-md-12 col-form-label text-md-left">{{ __('Estado') }}</label>

                <div class="col-md-12">
                    <input id="estado" type="text" class="form-control" name="estado">
                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-3">
                    <button id="cadastro-btn" type="submit" class="btn btn-primary">
                        {{ __('Enviar Cadastro') }}
                    </button>
                </div>
            </div>              

        </form>

    </div>

@endsection
