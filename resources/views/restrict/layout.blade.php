<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reuse</title>
    <link rel="stylesheet" href="public/css/restrict/estilo.css">
</head>
<body>
    <header>
        <picture>
            <img src="{{asset('img/logo.svg')}}" alt="Logo">
        </picture>
        <nav>
            <ul>
                <li>
                    <a href="{{url('/mensagem')}}">Mensagens</a>
                </li>
                <li>
                    <a href="{{url(/dashboard)}}">Usuários</a>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>