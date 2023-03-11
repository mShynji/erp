@extends("layouts.unauth-layout")

@section("titulo", "Teste ERP: ofertas")

@section("imports")
	<link href="/css/ofertas-style.css" rel="stylesheet"/>
@endsection

@section("conteudo")
	<section class="banner">
        <div class="conteudo">
            <h3 class="titulo">Ofertas e planos</h3>
            <h5 class="subtitulo">os melhores planos pelos melhores preços do mercado</h5>
            <div class="planos">
                <div class="card-plano">
                    <div class="card-titulo">
                        <h3>básico</h3>
                    </div>
                    <div class="d-flex flex-column align-items-center">
                    	<p class="preco">R$ XX,XX</p>
                    	<a href="#" class="btn btn-dark btn-preco">assinar</a>
                    </div>
                    <ul>
                    	<li>01 usuário</li>
                    	<li>100 MB de armazenamento</li>
                    	<li>Perfeito para microempreendedores individuais</li>
                    </ul>
                    <div class="d-flex flex-column align-items-center">
                   		<a href="#" class="mais-info">mais informações</a>
                   	</div>
                </div>
                <div class="card-plano">
                    <div class="card-titulo">
                        <h3>médio</h3>
                    </div>
                    <div class="d-flex flex-column align-items-center">
                    	<p class="preco">R$ XXX,XX</p>
                    	<a href="#" class="btn btn-primary btn-preco">assinar</a>
                    </div>
                    <ul>
                    	<li>10 usuários</li>
                    	<li>500 MB de armazenamento</li>
                    	<li>Perfeito para pequenas empresas</li>
                   	</ul>
                    <br>
                   	<div class="d-flex flex-column align-items-center">
                   		<a href="#" class="mais-info">mais informações</a>
                   	</div>
                </div>
                <div class="card-plano">
                    <div class="card-titulo">
                        <h3>avançado</h3>
                    </div>
                    <div class="d-flex flex-column align-items-center">
                    	<p class="preco">R$ XXX,XX</p>
                    	<a href="#" class="btn btn-dark btn-preco">assinar</a>
                    </div>
                    <ul>
                    	<li>20 usuários</li>
                    	<li>1.000 MB de armazenamento</li>
                    	<li>Perfeito para grandes negócios</li>
                    </ul>
                    <br>
                    <div class="d-flex flex-column align-items-center">
                   		<a href="#" class="mais-info">mais informações</a>
                   	</div>
                </div>
            </div>
        </div>
    </section>
@endsection