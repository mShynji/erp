@extends('layouts.main')

@section('title', 'Cadastro')

@section('content')
	<form method="post" action="/user/new">
		@csrf
		<div class="container bg-light border border-black rounded shadow-sm p-5 w-50 d-flex flex-column align-items-center">
			<h3 class="mb-5 text-center font-weight-bold">Crie sua conta no ERP Teste!</h3>

			<div class="form-group mb-2 w-75">
				<label class="text-secondary" for="email">E-mail:</label>
				<input type="text" class="form-control" name="email" id="email" placeholder="nome@minhaempresa.com.br"/>
			</div>

			<div class="form-group mb-2 w-75">
				<label class="text-secondary" for="nome">Nome:</label>
				<input type="text" class="form-control" name="nome" id="nome" placeholder="nome da pessoa responsável pelo processo administrativo"/>
			</div>

			<div class="form-group mb-2 w-75">
				<label class="text-secondary" for="cnpj">CNPJ:</label>
				<input type="text" class="form-control" name="cnpj" id="cnpj" placeholder="00.000.000/0000-00"/>
			</div>

			<div class="form-group mb-2 w-75">
				<label class="text-secondary" for="razaoSocial">Razão social:</label>
				<input type="text" class="form-control" name="razaoSocial" id="razaoSocial" placeholder="Minha empresa Ltda."/>
			</div>

			<div class="form-group mb-2 w-75">
				<label class="text-secondary" for="telefone">Telefone:</label>
				<input type="text" class="form-control" name="telefone" id="telefone" placeholder="Número de celular com DDD"/>
			</div>

			<div class="form-group mb-2 w-75">
				<label class="text-secondary" for="login">Subdomínio da empresa:</label>
				<input type="text" class="form-control" name="login" id="login" placeholder="Login do acesso administrativo"/>
			</div>

			<div class="form-group mb-3 w-75">
				<label class="text-secondary" for="senha">Senha:</label>
				<input type="password" class="form-control" name="senha" id="senha" placeholder="*****"/>
			</div>

			<input type="submit" class="btn btn-primary w-75 pb-3 pt-3" value="Criar minha conta"/>
		</div>
	</form>
@endsection