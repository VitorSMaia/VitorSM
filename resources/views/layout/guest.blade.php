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
    <script defer src="https://cdn.tailwindcss.com"></script>

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


    <link rel="icon" href="https://d1unuvan7ts7ur.cloudfront.net/0x826/a014fb64-2cf2-4382-bb75-77d808d5c1f4/01GWFA7AZ53Q0HKDT5PF8B08RC" type="image" sizes="16x16">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.15.1/devicon.min.css">

    <title>VitorSM Blog</title>

    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    @livewireStyles

</head>
<body class="bg-void text-bleached-silk overflow-x-hidden">
<header class="flex justify-center items-center w-full mb-5">
    <nav  x-data="{ link: false, git: false, blog: false, contact: false, config: false, login: false }" class="grid grid-cols-2 text-white bg-opacity-70 bg-darth-torus w-full py-2 px-5  hidden md:flex">

        <a href="/" class="w-max flex justify-start items-center cursor-pointer flex-1 md:gap-1 lg:gap-2 ">
            <p class="font-light text-xl">VitorSM</p>
        </a>

        <div class="flex justify-between gap-x-5 items-center">
            <a target="_blank" href="https://www.linkedin.com/in/vitorsmaia/" x-on:mouseleave="link = false;" x-on:mouseenter="link = true;" class=" hover:scale-120 flex justify-center items-center  cursor-pointer flex-1 md:gap-1 lg:gap-2 ">
                <svg class="fill-white h-10"  xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 32 32"  stroke="rgb(1, 10, 38)" fill="rgb(255, 255, 255)"   height="96px"><path d="M 7.5 5 C 6.132813 5 5 6.132813 5 7.5 L 5 24.5 C 5 25.867188 6.132813 27 7.5 27 L 24.5 27 C 25.867188 27 27 25.867188 27 24.5 L 27 7.5 C 27 6.132813 25.867188 5 24.5 5 Z M 7.5 7 L 24.5 7 C 24.785156 7 25 7.214844 25 7.5 L 25 24.5 C 25 24.785156 24.785156 25 24.5 25 L 7.5 25 C 7.214844 25 7 24.785156 7 24.5 L 7 7.5 C 7 7.214844 7.214844 7 7.5 7 Z M 10.4375 8.71875 C 9.488281 8.71875 8.71875 9.488281 8.71875 10.4375 C 8.71875 11.386719 9.488281 12.15625 10.4375 12.15625 C 11.386719 12.15625 12.15625 11.386719 12.15625 10.4375 C 12.15625 9.488281 11.386719 8.71875 10.4375 8.71875 Z M 19.46875 13.28125 C 18.035156 13.28125 17.082031 14.066406 16.6875 14.8125 L 16.625 14.8125 L 16.625 13.5 L 13.8125 13.5 L 13.8125 23 L 16.75 23 L 16.75 18.3125 C 16.75 17.074219 16.996094 15.875 18.53125 15.875 C 20.042969 15.875 20.0625 17.273438 20.0625 18.375 L 20.0625 23 L 23 23 L 23 17.78125 C 23 15.226563 22.457031 13.28125 19.46875 13.28125 Z M 9 13.5 L 9 23 L 11.96875 23 L 11.96875 13.5 Z" /></svg>
                <p x-show="link"
                   x-transition:enter="transition ease-out duration-300"
                   x-transition:enter-start="opacity-0 scale-90"
                   x-transition:enter-end="opacity-100 scale-100"
                   x-transition:leave="transition ease-in duration-300"
                   x-transition:leave-start="opacity-100 scale-100"
                   x-transition:leave-end="opacity-0 scale-90"
                >Linkedin</p>
            </a>
            <a target="_blank" href="https://github.com/VitorSMaia" x-on:mouseleave="git = false;" x-on:mouseenter="git = true;" class="hover:scale-120 flex justify-center items-center cursor-pointer flex-1 md:gap-1 lg:gap-2 ">
                <svg class="fill-white h-10"
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
            {{--            <a target="_blank" href="https://github.com/VitorSMaia" x-on:mouseleave="blog = false;" x-on:mouseenter="blog = true;" class="flex justify-center items-center cursor-pointer flex-1 md:gap-1 lg:gap-2 ">--}}
            {{--                <svg class="fill-whiter hover:-rotate-45 h-10 scale-120 hover:scale-150"--}}
            {{--                     xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"--}}
            {{--                     viewBox="0 0 24 24">--}}
            {{--                    <path stroke="rgb(1, 10, 38)" fill="rgb(255, 255, 255)" d="M10.9,2.1c-4.6,0.5-8.3,4.2-8.8,8.7c-0.5,4.7,2.2,8.9,6.3,10.5C8.7,21.4,9,21.2,9,20.8v-1.6c0,0-0.4,0.1-0.9,0.1 c-1.4,0-2-1.2-2.1-1.9c-0.1-0.4-0.3-0.7-0.6-1C5.1,16.3,5,16.3,5,16.2C5,16,5.3,16,5.4,16c0.6,0,1.1,0.7,1.3,1c0.5,0.8,1.1,1,1.4,1 c0.4,0,0.7-0.1,0.9-0.2c0.1-0.7,0.4-1.4,1-1.8c-2.3-0.5-4-1.8-4-4c0-1.1,0.5-2.2,1.2-3C7.1,8.8,7,8.3,7,7.6c0-0.4,0-0.9,0.2-1.3 C7.2,6.1,7.4,6,7.5,6c0,0,0.1,0,0.1,0C8.1,6.1,9.1,6.4,10,7.3C10.6,7.1,11.3,7,12,7s1.4,0.1,2,0.3c0.9-0.9,2-1.2,2.5-1.3 c0,0,0.1,0,0.1,0c0.2,0,0.3,0.1,0.4,0.3C17,6.7,17,7.2,17,7.6c0,0.8-0.1,1.2-0.2,1.4c0.7,0.8,1.2,1.8,1.2,3c0,2.2-1.7,3.5-4,4 c0.6,0.5,1,1.4,1,2.3v2.6c0,0.3,0.3,0.6,0.7,0.5c3.7-1.5,6.3-5.1,6.3-9.3C22,6.1,16.9,1.4,10.9,2.1z"></path>--}}
            {{--                </svg>--}}
            {{--                <p x-show="blog" x-transition.duration.500ms>Blog</p>--}}
            {{--            </a>--}}

            <a href="#contact" x-on:mouseleave="contact = false;" x-on:mouseenter="contact = true;" class="hover:scale-120 flex justify-center items-center cursor-pointer flex-1 md:gap-1 lg:gap-2 ">
                <img class="fill-white h-10" src="{{ asset('./img/blog/icons8-call-me-white.png') }}" alt="Contact Me">
                <p x-show="contact"
                   x-transition:enter="transition ease-out duration-300"
                   x-transition:enter-start="opacity-0 scale-90"
                   x-transition:enter-end="opacity-100 scale-100"
                   x-transition:leave="transition ease-in duration-300"
                   x-transition:leave-start="opacity-100 scale-100"
                   x-transition:leave-end="opacity-0 scale-90"
                >Contact</p>
            </a>

            @if(Auth::check())
                <a href="{{ route('dashboard') }}" x-on:mouseleave="config = false;" x-on:mouseenter="config = true;" class="hover:scale-120 flex justify-center items-center cursor-pointer flex-1 md:gap-1 lg:gap-2 ">
                    <svg xmlns="http://www.w3.org/2000/svg"
                         class="h-10"
                         x="0px" y="0px"
                         stroke="rgb(255 255 255)"
                         viewBox="0 0 50 50">
                        <path d="M 22.205078 2 A 1.0001 1.0001 0 0 0 21.21875 2.8378906 L 20.246094 8.7929688 C 19.076509 9.1331971 17.961243 9.5922728 16.910156 10.164062 L 11.996094 6.6542969 A 1.0001 1.0001 0 0 0 10.708984 6.7597656 L 6.8183594 10.646484 A 1.0001 1.0001 0 0 0 6.7070312 11.927734 L 10.164062 16.873047 C 9.583454 17.930271 9.1142098 19.051824 8.765625 20.232422 L 2.8359375 21.21875 A 1.0001 1.0001 0 0 0 2.0019531 22.205078 L 2.0019531 27.705078 A 1.0001 1.0001 0 0 0 2.8261719 28.691406 L 8.7597656 29.742188 C 9.1064607 30.920739 9.5727226 32.043065 10.154297 33.101562 L 6.6542969 37.998047 A 1.0001 1.0001 0 0 0 6.7597656 39.285156 L 10.648438 43.175781 A 1.0001 1.0001 0 0 0 11.927734 43.289062 L 16.882812 39.820312 C 17.936999 40.39548 19.054994 40.857928 20.228516 41.201172 L 21.21875 47.164062 A 1.0001 1.0001 0 0 0 22.205078 48 L 27.705078 48 A 1.0001 1.0001 0 0 0 28.691406 47.173828 L 29.751953 41.1875 C 30.920633 40.838997 32.033372 40.369697 33.082031 39.791016 L 38.070312 43.291016 A 1.0001 1.0001 0 0 0 39.351562 43.179688 L 43.240234 39.287109 A 1.0001 1.0001 0 0 0 43.34375 37.996094 L 39.787109 33.058594 C 40.355783 32.014958 40.813915 30.908875 41.154297 29.748047 L 47.171875 28.693359 A 1.0001 1.0001 0 0 0 47.998047 27.707031 L 47.998047 22.207031 A 1.0001 1.0001 0 0 0 47.160156 21.220703 L 41.152344 20.238281 C 40.80968 19.078827 40.350281 17.974723 39.78125 16.931641 L 43.289062 11.933594 A 1.0001 1.0001 0 0 0 43.177734 10.652344 L 39.287109 6.7636719 A 1.0001 1.0001 0 0 0 37.996094 6.6601562 L 33.072266 10.201172 C 32.023186 9.6248101 30.909713 9.1579916 29.738281 8.8125 L 28.691406 2.828125 A 1.0001 1.0001 0 0 0 27.705078 2 L 22.205078 2 z M 23.056641 4 L 26.865234 4 L 27.861328 9.6855469 A 1.0001 1.0001 0 0 0 28.603516 10.484375 C 30.066026 10.848832 31.439607 11.426549 32.693359 12.185547 A 1.0001 1.0001 0 0 0 33.794922 12.142578 L 38.474609 8.7792969 L 41.167969 11.472656 L 37.835938 16.220703 A 1.0001 1.0001 0 0 0 37.796875 17.310547 C 38.548366 18.561471 39.118333 19.926379 39.482422 21.380859 A 1.0001 1.0001 0 0 0 40.291016 22.125 L 45.998047 23.058594 L 45.998047 26.867188 L 40.279297 27.871094 A 1.0001 1.0001 0 0 0 39.482422 28.617188 C 39.122545 30.069817 38.552234 31.434687 37.800781 32.685547 A 1.0001 1.0001 0 0 0 37.845703 33.785156 L 41.224609 38.474609 L 38.53125 41.169922 L 33.791016 37.84375 A 1.0001 1.0001 0 0 0 32.697266 37.808594 C 31.44975 38.567585 30.074755 39.148028 28.617188 39.517578 A 1.0001 1.0001 0 0 0 27.876953 40.3125 L 26.867188 46 L 23.052734 46 L 22.111328 40.337891 A 1.0001 1.0001 0 0 0 21.365234 39.53125 C 19.90185 39.170557 18.522094 38.59371 17.259766 37.835938 A 1.0001 1.0001 0 0 0 16.171875 37.875 L 11.46875 41.169922 L 8.7734375 38.470703 L 12.097656 33.824219 A 1.0001 1.0001 0 0 0 12.138672 32.724609 C 11.372652 31.458855 10.793319 30.079213 10.427734 28.609375 A 1.0001 1.0001 0 0 0 9.6328125 27.867188 L 4.0019531 26.867188 L 4.0019531 23.052734 L 9.6289062 22.117188 A 1.0001 1.0001 0 0 0 10.435547 21.373047 C 10.804273 19.898143 11.383325 18.518729 12.146484 17.255859 A 1.0001 1.0001 0 0 0 12.111328 16.164062 L 8.8261719 11.46875 L 11.523438 8.7734375 L 16.185547 12.105469 A 1.0001 1.0001 0 0 0 17.28125 12.148438 C 18.536908 11.394293 19.919867 10.822081 21.384766 10.462891 A 1.0001 1.0001 0 0 0 22.132812 9.6523438 L 23.056641 4 z M 25 17 C 20.593567 17 17 20.593567 17 25 C 17 29.406433 20.593567 33 25 33 C 29.406433 33 33 29.406433 33 25 C 33 20.593567 29.406433 17 25 17 z M 25 19 C 28.325553 19 31 21.674447 31 25 C 31 28.325553 28.325553 31 25 31 C 21.674447 31 19 28.325553 19 25 C 19 21.674447 21.674447 19 25 19 z"></path>
                    </svg>
                    <p x-show="config"
                       x-transition:enter="transition ease-out duration-300"
                       x-transition:enter-start="opacity-0 scale-90"
                       x-transition:enter-end="opacity-100 scale-100"
                       x-transition:leave="transition ease-in duration-300"
                       x-transition:leave-start="opacity-100 scale-100"
                       x-transition:leave-end="opacity-0 scale-90"
                    >Config</p>
                </a>
            @else
                <a href="{{ route('login') }}" x-on:mouseleave="login = false;" x-on:mouseenter="login = true;" class="hover:scale-120 flex justify-center items-center cursor-pointer flex-1 md:gap-1 lg:gap-2 ">
                    <img class="fill-white h-10" src="{{ asset('./img/blog/icons8-enter-white.png') }}" alt="Login">
                    <p x-show="login"
                       x-transition:enter="transition ease-out duration-300"
                       x-transition:enter-start="opacity-0 scale-90"
                       x-transition:enter-end="opacity-100 scale-100"
                       x-transition:leave="transition ease-in duration-300"
                       x-transition:leave-start="opacity-100 scale-100"
                       x-transition:leave-end="opacity-0 scale-90"
                    >Login</p>
                </a>
            @endif

            <div class="mx-2">
                <div  x-data="{ lang: false }" @click.outside="lang = false" title="Change Language" class="dropdown dropdown-end">
                    <div tabindex="0" class="btn btn-ghost gap-1 normal-case">
                        <div class="cursor-pointer" @click="lang = ! lang" >
                                    <span class="material-symbols-rounded ">
                                        translate
                                    </span>
                            <template x-if="lang" >
                                        <span class="material-symbols-rounded ">
                                            expand_less
                                        </span>
                            </template>
                            <template x-if="!lang" >
                                        <span class="material-symbols-rounded ">
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
        </div>
    </nav>
</header>

<main>
    @yield('content')
</main>

<footer class="fixed bottom-0 w-full border-t-2 p-5 border-white">
    <p>© Copyright {{ now()->format('Y') }} by Vitor Maia.</p>
</footer>
@livewireScripts
</body>
</html>
