<!doctype html>
<html class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-W9N600DNKP"></script>

    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-W9N600DNKP');
    </script>

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
{{--    <script defer src="https://cdn.tailwindcss.com"></script>--}}

    <script src="https://js.hcaptcha.com/1/api.js" async defer></script>
    <script defer !src="">
        window.onload = function(e) {
            var offset = document.getElementsByTagName('header')[0].offsetTop;
            var menu = document.getElementsByTagName('header')[0];

            document.addEventListener('scroll', function() {
                if (document.body.scrollTop > offset || document.documentElement.scrollTop > offset) {
                    menu.style.position = 'fixed';
                } else {
                    menu.style.position = 'initial';
                }
            });
        }
    </script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6001125874185977" crossorigin="anonymous"></script>
    <!-- Bloco 1 -->
    <ins class="adsbygoogle"
        style="display:block"
        data-ad-client="ca-pub-6001125874185977"
        data-ad-slot="7657402003"
        data-ad-format="auto"
        data-full-width-responsive="true"></ins>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
    </script>


    <link rel="icon" href="https://d1unuvan7ts7ur.cloudfront.net/0x826/a014fb64-2cf2-4382-bb75-77d808d5c1f4/01GWFA7AZ53Q0HKDT5PF8B08RC" type="image" sizes="16x16">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.15.1/devicon.min.css">

    <title>VitorSM</title>



    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    @livewireStyles

</head>
<body class="bg-void text-bleached-silk overflow-x-hidden">
<x-header></x-header>

<main>
    @yield('content')
</main>

<footer class="fixed bottom-0 w-full border-t-2 p-5 border-white">
    <p>© Copyright {{ now()->format('Y') }} by Vitor Maia.</p>
</footer>
@livewireScripts
</body>
</html>
