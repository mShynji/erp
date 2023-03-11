@extends("layouts.unauth-layout")

@section("titulo", "Teste ERP: login")

@section("imports")
	<link href="/css/login-style.css" rel="stylesheet"/>
@endsection

@section("conteudo")
	<section class="banner">
		<div class="conteudo">
            <h3 class="titulo">Acesse sua conta</h3>

            <form method="post" action="/login">
            	<div class="form-group row mb-2">
            		<input class="form-control col" placeholder="Usuário" />
            	</div>
            	<div class="form-group row mb-2">
            		<input type="password" class="form-control col" placeholder="Senha" />
            	</div>

            	<div class="form-group row mb-2">
	            	<input class="mt-3 btn btn-primary btn-login" type="submit" value="entrar" />
	            	<a href="/esqueci-minha-senha" class="btn-esqueci">esqueci minha senha</a>
	            </div>
            </form>        </div>
	</section>
@endsection("conteudo")