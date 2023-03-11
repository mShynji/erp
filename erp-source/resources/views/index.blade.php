@extends("layouts.unauth-layout")

@section("titulo", "Teste ERP: o sistema de gestão mais completo do mercado")

@section("imports")
    <link href="/css/index-style.css" rel="stylesheet"/>
@endsection

@section("conteudo")
    <section class="banner">
        <div class="conteudo">
            <h3 class="titulo">O sistema ERP mais<br>completo do mercado!</h3>
            <a href="/cadastro" class="btn btn-primary btn-cadastro">experimente</a>
            <a href="/ofertas" class="btn-ofertas">ver ofertas</a>
        </div>
    </section>

    <section class="funcionalidades">
        <div class="conteudo">
            <h3 class="titulo">O Teste ERP oferece<br>diversas soluções e ferramentas<br>para seu negócio</h3>

            <div class="solucoes">
                <div class="card-solucao">
                    <div class="card-titulo">
                        <h3>lorem ipsum</h3>
                    </div>
                    <div class="card-descricao">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eu dignissim felis. Phasellus faucibus ante ut tellus feugiat varius. Nam dictum diam tortor, non elementum ipsum semper quis. Proin non interdum augue.</p>
                    </div>
                </div>
                <div class="card-solucao">
                    <div class="card-titulo">
                        <h3>lorem ipsum</h3>
                    </div>
                    <div class="card-descricao">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eu dignissim felis. Phasellus faucibus ante ut tellus feugiat varius. Nam dictum diam tortor, non elementum ipsum semper quis. Proin non interdum augue.</p>
                    </div>
                </div>
                <div class="card-solucao">
                    <div class="card-titulo">
                        <h3>lorem ipsum</h3>
                    </div>
                    <div class="card-descricao">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eu dignissim felis. Phasellus faucibus ante ut tellus feugiat varius. Nam dictum diam tortor, non elementum ipsum semper quis. Proin non interdum augue.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection