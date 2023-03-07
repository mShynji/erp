@extends('layouts.main')

@section('title', 'Login')

@section('content')
	<form method="post" action="/user/login">
		@csrf

		<div class="container bg-light border border-black rounded shadow-sm p-5 w-50 d-flex flex-column align-items-center">
			<h3 class="mb-5 text-center font-weight-bold">Entre em sua conta no ERP Teste!</h3>

			<div class="form-group mb-2 w-75">
				<label class="text-secondary" for="login">Subdomínio da empresa:</label>
				<input type="text" class="form-control" name="login" id="login" placeholder="Login do acesso administrativo"/>
			</div>

			<div class="form-group mb-3 w-75">
				<label class="text-secondary" for="senha">Senha:</label>
				<input type="password" class="form-control" name="senha" id="senha" placeholder="*****"/>
			</div>

			<input type="submit" class="btn btn-primary w-75 pb-3 pt-3" value="Entrar"/>
		</div>
	</form>
@endsection