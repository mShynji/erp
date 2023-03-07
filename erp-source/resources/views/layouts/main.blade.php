<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8"/>
        <title>@yield('title')</title>

        {{-- bootstrap --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </head>

    <body class="bg-white">
        <header>
            <nav class="bg-light">
                <div class="d-flex justify-content-between align-items-center p-3 ps-5 pe-5 shadow-sm">
                    <h3 class="text-primary"><a class="text-decoration-none" href="/">ERP Teste</a></h3>
                    <div class="d-flex justify-content-center">
                        <a class="btn btn-outline-primary me-2" href="/user/login">Login</a>
                        <a class="btn btn-primary ms-2" href="/user/new">Cadastro</a>
                    </div>
                </div>
            </nav>
        </header>

        <main>
            <div class="container mt-5 mb-5">
                @yield('content')
            </div>
        </main>

        <footer></footer>
    </body>
</html>