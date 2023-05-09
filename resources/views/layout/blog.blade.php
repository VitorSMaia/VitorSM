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

    <script defer>
        window.onload = function(e) {
            var offset = document.getElementsByTagName('header')[0].offsetTop;
            var menu = document.getElementsByTagName('header')[0];

            document.addEventListener('scroll', function() {
                if (document.body.scrollTop > offset || document.documentElement.scrollTop > offset) {
                    menu.style.position = 'fixed';
                    menu.classList.add('bg-darth-torus');
                    menu.classList.add('bg-opacity-70');
                } else {
                    menu.classList.remove('bg-darth-torus');
                    menu.classList.remove('bg-opacity-70');
                    menu.style.position = 'initial';

                }
            });
        }
    </script>


    <link rel="icon" href="https://d1unuvan7ts7ur.cloudfront.net/0x826/a014fb64-2cf2-4382-bb75-77d808d5c1f4/01GWFA7AZ53Q0HKDT5PF8B08RC" type="image" sizes="16x16">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.15.1/devicon.min.css">

    <title>VitorSM</title>

<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6001125874185977"
     crossorigin="anonymous"></script>
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

    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    @livewireStyles

</head>
<body class="bg-void text-bleached-silk overflow-x-hidden">

    <x-header></x-header>
    <main>
        @yield('content')
    </main>
    <footer class="absolute z-1 w-full border-t-2 p-5 border-white">
        <p>© Copyright {{ now()->format('Y') }} by Vitor Maia.</p>
    </footer>
    @livewire('components.modal-info')
    @livewireScripts
</body>

<script>

var div = document.getElementById('title');
var textos = ["Front-End Developer", "Back-End Developer", "FullStack Developer"];

function escrever(str, done) {
    var char = str.split('').reverse();
    var typer = setInterval(function() {
        if (!char.length) {
            clearInterval(typer);
            return setTimeout(done, 500); // só para esperar um bocadinho
        }
        var next = char.pop();
        div.innerHTML += next;
    }, 100);
}

function limpar(done) {
    var char = div.innerHTML;
    var nr = char.length;
    var typer = setInterval(function() {
        if (nr-- == 0) {
            clearInterval(typer);
            return done();
        }
        div.innerHTML = char.slice(0, nr);
    }, 100);
}

function rodape(conteudos, el) {
    var atual = -1;
	function prox(cb){
		if (atual < conteudos.length - 1) atual++;
		else atual = 0;
		var str = conteudos[atual];
		escrever(str, function(){
			limpar(prox);
		});
	}
	prox(prox);
}
rodape(textos);

</script>
</html>
