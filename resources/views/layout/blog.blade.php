<!doctype html>
<html class="scroll-smooth">
<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-W9N600DNKP"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-W9N600DNKP');
    </script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="icon" href="https://d1unuvan7ts7ur.cloudfront.net/0x826/a014fb64-2cf2-4382-bb75-77d808d5c1f4/01GWFA7AZ53Q0HKDT5PF8B08RC" type="image" sizes="16x16">
    <title>VitorSM Blog</title>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    @livewireStyles
    <script !src="">
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
</head>
<body class="bg-void text-bleached-silk overflow-x-hidden">
    <header class="flex justify-center items-center w-full p-3">
        <nav  x-data="{ link: false, git: false, blog: false, contact: false }" class="flex bg-opacity-70 bg-darth-torus w-3/4 p-2 rounded-full">

            <a href="/" class="flex justify-center items-center cursor-pointer flex-1 md:gap-1 lg:gap-2 text-white">
                <p>VitorSM</p>
            </a>

            <a target="_blank" href="https://www.linkedin.com/in/vitorsmaia/" x-on:mouseleave="link = false;" x-on:mouseenter="link = true;" class=" hover:scale-120 flex justify-center items-center  cursor-pointer flex-1 md:gap-1 lg:gap-2 text-white">
                <svg class="fill-white h-10 animate-pulse"  xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 32 32"  stroke="rgb(1, 10, 38)" fill="rgb(255, 255, 255)"   height="96px"><path d="M 7.5 5 C 6.132813 5 5 6.132813 5 7.5 L 5 24.5 C 5 25.867188 6.132813 27 7.5 27 L 24.5 27 C 25.867188 27 27 25.867188 27 24.5 L 27 7.5 C 27 6.132813 25.867188 5 24.5 5 Z M 7.5 7 L 24.5 7 C 24.785156 7 25 7.214844 25 7.5 L 25 24.5 C 25 24.785156 24.785156 25 24.5 25 L 7.5 25 C 7.214844 25 7 24.785156 7 24.5 L 7 7.5 C 7 7.214844 7.214844 7 7.5 7 Z M 10.4375 8.71875 C 9.488281 8.71875 8.71875 9.488281 8.71875 10.4375 C 8.71875 11.386719 9.488281 12.15625 10.4375 12.15625 C 11.386719 12.15625 12.15625 11.386719 12.15625 10.4375 C 12.15625 9.488281 11.386719 8.71875 10.4375 8.71875 Z M 19.46875 13.28125 C 18.035156 13.28125 17.082031 14.066406 16.6875 14.8125 L 16.625 14.8125 L 16.625 13.5 L 13.8125 13.5 L 13.8125 23 L 16.75 23 L 16.75 18.3125 C 16.75 17.074219 16.996094 15.875 18.53125 15.875 C 20.042969 15.875 20.0625 17.273438 20.0625 18.375 L 20.0625 23 L 23 23 L 23 17.78125 C 23 15.226563 22.457031 13.28125 19.46875 13.28125 Z M 9 13.5 L 9 23 L 11.96875 23 L 11.96875 13.5 Z" /></svg>
                <p x-show="link"
                   x-transition:enter="transition ease-out duration-300"
                   x-transition:enter-start="opacity-0 scale-90"
                   x-transition:enter-end="opacity-100 scale-100"
                   x-transition:leave="transition ease-in duration-300"
                   x-transition:leave-start="opacity-100 scale-100"
                   x-transition:leave-end="opacity-0 scale-90"
                >Linkedin</p>
            </a>
            <a target="_blank" href="https://github.com/VitorSMaia" x-on:mouseleave="git = false;" x-on:mouseenter="git = true;" class="hover:scale-120 flex justify-center items-center cursor-pointer flex-1 md:gap-1 lg:gap-2 text-white">
                <svg class="fill-white h-10 animate-pulse"
                     xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                     viewBox="0 0 24 24">
                    <path stroke="rgb(1, 10, 38)" fill="rgb(255, 255, 255)" d="M10.9,2.1c-4.6,0.5-8.3,4.2-8.8,8.7c-0.5,4.7,2.2,8.9,6.3,10.5C8.7,21.4,9,21.2,9,20.8v-1.6c0,0-0.4,0.1-0.9,0.1 c-1.4,0-2-1.2-2.1-1.9c-0.1-0.4-0.3-0.7-0.6-1C5.1,16.3,5,16.3,5,16.2C5,16,5.3,16,5.4,16c0.6,0,1.1,0.7,1.3,1c0.5,0.8,1.1,1,1.4,1 c0.4,0,0.7-0.1,0.9-0.2c0.1-0.7,0.4-1.4,1-1.8c-2.3-0.5-4-1.8-4-4c0-1.1,0.5-2.2,1.2-3C7.1,8.8,7,8.3,7,7.6c0-0.4,0-0.9,0.2-1.3 C7.2,6.1,7.4,6,7.5,6c0,0,0.1,0,0.1,0C8.1,6.1,9.1,6.4,10,7.3C10.6,7.1,11.3,7,12,7s1.4,0.1,2,0.3c0.9-0.9,2-1.2,2.5-1.3 c0,0,0.1,0,0.1,0c0.2,0,0.3,0.1,0.4,0.3C17,6.7,17,7.2,17,7.6c0,0.8-0.1,1.2-0.2,1.4c0.7,0.8,1.2,1.8,1.2,3c0,2.2-1.7,3.5-4,4 c0.6,0.5,1,1.4,1,2.3v2.6c0,0.3,0.3,0.6,0.7,0.5c3.7-1.5,6.3-5.1,6.3-9.3C22,6.1,16.9,1.4,10.9,2.1z"></path>
                </svg>
                <p x-show="git"
                      x-transition:enter="transition ease-out duration-300"
                      x-transition:enter-start="opacity-0 scale-90"
                      x-transition:enter-end="opacity-100 scale-100"
                      x-transition:leave="transition ease-in duration-300"
                      x-transition:leave-start="opacity-100 scale-100"
                      x-transition:leave-end="opacity-0 scale-90"
                >GitHub</p>
            </a>
{{--            <a target="_blank" href="https://github.com/VitorSMaia" x-on:mouseleave="blog = false;" x-on:mouseenter="blog = true;" class="flex justify-center items-center cursor-pointer flex-1 md:gap-1 lg:gap-2 text-white">--}}
{{--                <svg class="fill-whiter hover:-rotate-45 h-10 scale-120 hover:scale-150"--}}
{{--                     xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"--}}
{{--                     viewBox="0 0 24 24">--}}
{{--                    <path stroke="rgb(1, 10, 38)" fill="rgb(255, 255, 255)" d="M10.9,2.1c-4.6,0.5-8.3,4.2-8.8,8.7c-0.5,4.7,2.2,8.9,6.3,10.5C8.7,21.4,9,21.2,9,20.8v-1.6c0,0-0.4,0.1-0.9,0.1 c-1.4,0-2-1.2-2.1-1.9c-0.1-0.4-0.3-0.7-0.6-1C5.1,16.3,5,16.3,5,16.2C5,16,5.3,16,5.4,16c0.6,0,1.1,0.7,1.3,1c0.5,0.8,1.1,1,1.4,1 c0.4,0,0.7-0.1,0.9-0.2c0.1-0.7,0.4-1.4,1-1.8c-2.3-0.5-4-1.8-4-4c0-1.1,0.5-2.2,1.2-3C7.1,8.8,7,8.3,7,7.6c0-0.4,0-0.9,0.2-1.3 C7.2,6.1,7.4,6,7.5,6c0,0,0.1,0,0.1,0C8.1,6.1,9.1,6.4,10,7.3C10.6,7.1,11.3,7,12,7s1.4,0.1,2,0.3c0.9-0.9,2-1.2,2.5-1.3 c0,0,0.1,0,0.1,0c0.2,0,0.3,0.1,0.4,0.3C17,6.7,17,7.2,17,7.6c0,0.8-0.1,1.2-0.2,1.4c0.7,0.8,1.2,1.8,1.2,3c0,2.2-1.7,3.5-4,4 c0.6,0.5,1,1.4,1,2.3v2.6c0,0.3,0.3,0.6,0.7,0.5c3.7-1.5,6.3-5.1,6.3-9.3C22,6.1,16.9,1.4,10.9,2.1z"></path>--}}
{{--                </svg>--}}
{{--                <p x-show="blog" x-transition.duration.500ms>Blog</p>--}}
{{--            </a>--}}

            <div class="flex justify-between items-center w-64">
                <a href="#contact" class="flex h-full justify-center items-center cursor-pointer flex-1 md:gap-1 lg:gap-2 text-white">
                    <p>Contact Me</p>
                </a>
                @if(Auth::check())
                    <a href="{{ route('dashboard') }}" class="flex h-full justify-center items-center cursor-pointer flex-1 md:gap-1 lg:gap-2 text-white">
                        <p>Dashboard</p>
                    </a>
                @else
                    <a href="{{ route('login') }}" class="flex h-full justify-center items-center cursor-pointer flex-1 md:gap-1 lg:gap-2 text-white">
                        <p>Login</p>
                    </a>
                @endif
            </div>

            <div class="flex items-end justify-end flex-1 md:gap-1 lg:gap-2">
                <div  x-data="{ lang: false }" @click.outside="lang = false" title="Change Language" class="dropdown dropdown-end">
                    <div tabindex="0" class="btn btn-ghost gap-1 normal-case">
                        <div class="cursor-pointer" @click="lang = ! lang" >
                            <span class="material-symbols-rounded text-white">
                                translate
                            </span>
                            <template x-if="lang" >
                                <span class="material-symbols-rounded text-white">
                                    expand_less
                                </span>
                            </template>
                            <template x-if="!lang" >
                                <span class="material-symbols-rounded text-white">
                                    expand_more
                                </span>
                            </template>
                        </div>
                    </div>
                    <div x-show="lang" x-transition class="bg-clarinet shadow-md rounded-lg absolute z-10">
                        <ul class="flex flex-col gap-2 p-2 w-32" tabindex="0">
                            <li class="hover:bg-clear-blue hover:text-void p-2 rounded-lg">
                                <button class="flex justify-between w-full  items-center  active">
                                    <img loading="lazy" width="20" height="20" alt="English" src="https://cdnjs.cloudflare.com/ajax/libs/twemoji/14.0.0/svg/1f1ec-1f1e7.svg">
                                    <span>English</span>
                                </button>
                            </li>

                            <li class="hover:bg-clear-blue hover:text-void p-2 rounded-lg">
                                <button class="flex justify-between w-full  items-center  active">
                                    <img loading="lazy" width="20" height="20" alt="Español" src="https://cdnjs.cloudflare.com/ajax/libs/twemoji/14.0.0/svg/1f1ea-1f1f8.svg">
                                    <span>Español</span>
                                </button>
                            </li>

                            <li class="hover:bg-clear-blue hover:text-void p-2 rounded-lg">
                                <button class="flex justify-between w-full  items-center  active">
                                    <img loading="lazy" width="20" height="20" alt="Português" src="https://cdnjs.cloudflare.com/ajax/libs/twemoji/14.0.0/svg/1f1f5-1f1f9.svg">
                                    <span>Português</span>
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>


    <main class="px-10">
        @yield('content')
        <div>
            Subcribe to my newslater
        </div>
        <footer class="border-t-2 py-2 border-white">
            <p>© Copyright {{ now()->format('Y') }} by Vitor Maia.</p>
        </footer>
    </main>


@livewireScripts

</body>
</html>
