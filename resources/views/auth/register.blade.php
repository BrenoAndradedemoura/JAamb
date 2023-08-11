@extends('sistema.layout')
@section('content')


    <div class="containerCadastro">
        <div class="col-sm-12" style="background-color: #fffff" style="width: auto height: 400px">
            <div class="container" >
            <p class="h4 text-center" style="color: #2B1998; margin-top: 20px; font-size: 60px"><b>Cadastre-se </b></p>
            <form method="POST" action="{{ route('register') }}" id="bordaform">
                @csrf
                <form class="row g-5">
                    <div class="col-sm-6" id="bloco1">   
                        <div style="margin-top: 30px">
                            <label for="name" class="col-md-4 col-form-label text-md-end">
                            </label>
                            <div>
                                <label for="nome" class="">Nome:</label>
                                <input id="nome" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nome">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div>
                                <label for="sobrenome" class="">Sobrenome:</label>
                                <input id="sobrenome" type="text" class="form-control @error('sobrenome') is-invalid @enderror" name="sobrenome" value="{{ old('sobrenome') }}" required autocomplete="name" autofocus placeholder="Sobrenome">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div>
                                <label for="Telefone" class="">Telefone/Celular:</label>
                                <input id="Telefone" type="text" class="form-control @error('Telefone/Celular') is-invalid @enderror" name="Telefone/Celular" value="{{ old('sobrenome') }}" required autocomplete="name" autofocus placeholder="Telefone/Celular">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                    </div>
                    <div class="col-sm-6" id="bloco2">   
                        <div style="margin-top: 30px">
                            <label for="name" class="col-md-4 col-form-label text-md-end">
                                <i class="bi bi-person-fill">
                                    <img src="{{asset('storage/imagens/geo-alt-fill.svg')}}" />
                                </i>
                            </label>
                            <div>
                                <label for="CPF" class="">CPF:</label>
                                <input id="CPF" type="text" class="form-control @error('CPF') is-invalid @enderror" name="endereco" value="{{ old('CPF') }}" required autocomplete="Endereço" autofocus placeholder="CPF">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>{{route('register')}}
                                @enderror
                            </div>
                        </div>
                        <div>
                            <label for="email" class="col-md-4 col-form-label text-md-end">
                                <i class="bi bi-envelope-fill">
                                    <img src="{{asset('storage/imagens/envelope-fill.svg')}}" />
                                </i>
                            </label>

                            <div>
                                <label for="email" class="">E-mail:</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            </div>
                            <div>
                            <label for="password" class="col-md-4 col-form-label text-md-end">
                                <i>
                                    <img src="{{asset('storage/imagens/CPF.png')}}" />
                                </i>
                            </label>

                            <div>
                                <label for="password" class="">Senha:</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Senha (mínimo 8 caracteres)">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                        <div>
                            <label for="confirm-password" class="col-md-4 col-form-label text-md-end">
                            </label>
                        <div class="h5 text-center">
                            <p style="color: black" id="titulo"><b>Já tem uma conta? <a style="color: black" href="{{route('login')}}">Faça Login</a></b></p>
                        </div>
                        <div>
                                <button type="submit" class="btn btn-primary my-2 my-sm-0" id ="meu-botao">
                                    {{ __('Entrar') }}
                                </button>
                        </div>
            </form>
            </div>
        </div>        
    </div>
            </form>
    
@endsection
