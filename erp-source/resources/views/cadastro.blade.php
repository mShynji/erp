@extends("layouts.unauth-layout")

@section("titulo", "Teste ERP: cadastro")

@section("imports")
	<link href="/css/cadastro-style.css" rel="stylesheet"/>
@endsection

@section("conteudo")
	<section class="banner">
		<div class="conteudo">
            <h3 class="titulo">Crie sua conta no Teste ERP</h3>
            <h5 class="subtitulo">preencha os dados abaixo para realizar seu cadastro.</h5>

            <form method="post" action="/cadastro">
            	<h5 class="info-form">informações básicas</h5>
            	<div class="form-group row mb-2">
            		<input class="form-control col me-2" placeholder="Nome" />
            		<input class="form-control col ms-2" placeholder="E-mail" />
            	</div>
            	<div class="form-group row mb-2">
            		<input class="form-control col" placeholder="Número de telefone (com DDD)" />
            	</div>
            	<div class="form-group row mb-2">
            		<input class="form-control col" placeholder="Nome da empresa" />
            	</div>
            	<div class="form-group row mb-5">
            		<input class="form-control col" placeholder="CNPJ" />
            	</div>
            	
            	<hr>

            	<h5 class="mt-5 info-form">informações de acesso</h5>
            	<div class="form-group row mb-2">
            		<input class="form-control col me-2" placeholder="Nome do contador" />
            		<input class="form-control col ms-2" placeholder="E-mail do contador" />
            	</div>
            	<div class="form-group row mb-2">
            		<input class="form-control col" placeholder="Usuário" />
            	</div>
            	<div class="form-group row mb-2">
            		<input type="password" class="form-control col" placeholder="Senha" />
            	</div>

            	<div class="d-flex justify-content-center">
            		<input class="mt-3 btn btn-primary btn-cadastro" type="submit" value="criar minha conta" />
            	</div>
            </form>
        </div>
	</section>
@endsection("conteudo")