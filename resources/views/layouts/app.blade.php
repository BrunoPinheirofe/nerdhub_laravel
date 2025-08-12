<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | NerdHub 🦆</title>
    {{-- incluindo assets --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Pixelify+Sans:wght@400..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap">
    <link rel="icon" href="{{ asset('assets/img/logos/logo.png') }}" type="image/png">
    @vite('resources/css/app.css')
</head>
<body class="min-h-screen flex flex-col font-['Pixelify_Sans'] bg-[#F5F4F4]">
    {{-- Navbar --}}
    @include('partials._navbar', ['bg' => '#00538A', 'text_color' => '#F5F4F4'],["links" =>[
        "Home" => "/",
        "Noticia" => "/noticia",
        "LTD" => "/ltd",
        "PodPink"=> "/podpink",
        "Sobre"=>"sobre"
    ]])

    {{-- Conteúdo principal --}}
    @yield('content')
    @include('partials._footer', ['bg' => '#00538A', 'text_color' => '#F5F4F4'])

    {{-- Scripts --}}
    <script src="{{ asset('assets/js/navbar.js') }}"></script>
</body>
</html>
