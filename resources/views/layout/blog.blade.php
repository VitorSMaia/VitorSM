<!doctype html>
<html class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script src="https://cdn.tailwindcss.com"></script>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    @livewireStyles
</head>
<body class="bg-[#0F172A] px-5 md:px-40  text-white font-mono ">
<div class="flex justify-between items-center pt-5">
    <a href="/">VitorSM Blog</a>
    <div class="hidden lg:flex gap-x-5">
        <a href="/post">Blogs</a>
        <a target="_blank" href="https://github.com/VitorSMaia/">GitHub</a>
        <a href="">Twitter</a>
        <a href="#contact">Contate-me</a>
        @if(Auth::check())
            {{--                <a href="{{ Auth::logout() }}">Sair</a>--}}
        @else
            <a href="{{ route('login') }}">Login</a>
{{--            <a href="{{ route('register') }}">Cadastre-se</a>--}}
        @endif

    </div>
</div>
@yield('content')
<div>
    Subcribe to my newslater
</div>
<footer class="border-t-2 py-2 border-white">
    <p>© Copyright {{ now()->format('Y') }} by Vitor Maia.</p>
</footer>
@livewireScripts
</body>
</html>
