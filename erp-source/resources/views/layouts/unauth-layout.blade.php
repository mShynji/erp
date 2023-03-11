<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        {{-- info --}}
        <meta charset="utf-8"/>
        <title>@yield("titulo")</title>

        {{-- bootstrap cdn --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"/>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

        {{-- css & js (se necessário) --}}
        <link href="/css/nav.css" rel="stylesheet">
        <link href="/css/main.css" rel="stylesheet">
        @yield("imports")
    </head>

    <body>
        <header>
            <a href="/"><img src="/img/logo.png" class="logo"/></a>

            <ul>
                <li><a href="/funcionalidades" class="option">funcionalidades</a></li>
                <li><a href="/ofertas" class="option">planos</a></li>
                <li><a href="/sobre" class="option">sobre</a></li>
            </ul>

            <ul>
                <li><a href="/login" class="btn-login option">login</a></li>
                <li><a href="/cadastro" class="btn btn-outline-primary btn-cadastro">cadastro</a></li>
            </ul>
        </header>
        
        <main>
            @yield("conteudo")
        </main>

        <script type="text/javascript">
            window.addEventListener('scroll', function() {
                var header = document.querySelector('header');
                header.classList.toggle('sticky', window.scrollY > 0);
            });
        </script>

        @extends('layouts.footer')
    </body>
</html>