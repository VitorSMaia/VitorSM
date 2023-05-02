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
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-M286PLP');</script>
    <!-- End Google Tag Manager -->
</head>
<body class="bg-[#0F172A] px-5 md:px-40  text-white font-mono">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M286PLP"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

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
