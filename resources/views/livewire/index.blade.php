<div>
{{--        <div--}}
{{--            wire:loading wire:target="sendContact"--}}
{{--            x-show="open"--}}
{{--            x-transition--}}
{{--            class="bg-gray-700 bg-opacity-70 transition duration-150 ease-in-out fixed z-10 left-0 top-0 w-screen h-screen"--}}
{{--        >--}}
{{--            <div class="flex justify-center items-center w-screen h-screen">--}}
{{--                Loading.....--}}
{{--            </div>--}}
{{--        </div>--}}
    <div class="mx-5 md:mx-10 grid gap-y-10">
        <div class="grid lg:grid-cols-2">
            <div class="order-2 lg:order-1 flex flex-col items-center md:justify-around break-words gap-y-5 md:gap-y-0">
                <h1 class="text-3xl font-mono">Hi, I'm Vitor</h1>
                <h1 id="title" class="text-xl font-mono h-10"></h1>
                <p>
                    I am a full-stack developer with extensive experience in Laravel and skills in Bootstrap,
                    Tailwind, and AlpineJS. In addition, I have experience in databases, including MySQL, SQL Server, and PgSQL.
                    I also have knowledge in mobile development, in Flutter and React Native.
                </p>
                <p>
                    Always seeking to acquire new knowledge and solutions in order to bring improvements, 
                    automate the processes carried out on a daily basis.
                </p>
                <p>
                    I want to apply my experience and knowledge in advanced technologies, 
                    working on innovative and challenging projects that contribute to the success of the company and the community in which I am inserted.
                </p>
                <p>
                    With this broad range of skills, I am capable of creating high-quality and scalable web and mobile
                    applications. I am always seeking new challenges and have a strong commitment to the quality of my work.
                </p>
                <p>
                    I look forward to contributing my knowledge and skills to your company. If you need further information, please feel free to contact me.
                </p>
            </div>
            <div class="order-1 lg:order-2 md:flex items-center justify-end hidden">
                <img class="object-contain  h-[500px]" src="https://d1unuvan7ts7ur.cloudfront.net/0x826/a014fb64-2cf2-4382-bb75-77d808d5c1f4/01GWFA7AZ53Q0HKDT5PF8B08RC" alt="img-profile">
            </div>
            <div class="hidden mt-5 md:flex order-3 col-span-2 ">
                <a  href="#skills">
                    <img class="cursor-pointer animate-bounce" src="{{ asset('./img/blog/icons8-upward-arrow-50.png') }}"/>
                </a>
            </div>
        </div>
        <div id="skills"></div>

        <div class="md:mt-72">
            <div class="flex">
                <p class="text-xl font-sans font-semibold animate-pulse-invert-blog" >Skills</p>
            </div>
            <div  class="grid grid-cols-1 sm:grid-cols-4 gap-5">
                <div class="px-5 py-2 rounded-lg  bg-white  shadow-md shadow-[#E44D26] flex items-center justify-between">
                    <img class="h-16" src="https://raw.githubusercontent.com/gilbarbara/logos/ab7d59c865eb7ad8096c432a91a372a938980cb8/logos/html-5.svg"/>
                    <p class="text-lg font-semibold text-black">HTML</p>
                </div>
                <div class="px-5 py-2 rounded-lg  bg-white  shadow-md shadow-[#264DE4] flex items-center justify-between">
                    <img class="h-16" src="https://raw.githubusercontent.com/gilbarbara/logos/ab7d59c865eb7ad8096c432a91a372a938980cb8/logos/css-3.svg"/>
                    <p class="text-lg font-semibold text-black">CSS</p>
                </div>
                <div class="px-5 py-2 rounded-lg  bg-white  shadow-md shadow-[#F7DF1E] flex items-center justify-between">
                    <img class="h-16" src="https://raw.githubusercontent.com/gilbarbara/logos/ab7d59c865eb7ad8096c432a91a372a938980cb8/logos/javascript.svg"/>
                    <p class="text-lg font-semibold text-black">JS</p>
                </div>
                   <div class="px-5 py-2 rounded-lg  bg-white  shadow-md shadow-[#6181B6] flex items-center justify-between">
                    <img class="h-16" src="https://raw.githubusercontent.com/gilbarbara/logos/ab7d59c865eb7ad8096c432a91a372a938980cb8/logos/php.svg"/>
                    <p class="text-lg font-semibold text-black">PHP</p>
                </div>
                <div class="px-5 py-2 rounded-lg  bg-white  shadow-md shadow-[#FF645B] flex items-center justify-between">
                    <img class="h-16" src="https://raw.githubusercontent.com/gilbarbara/logos/ab7d59c865eb7ad8096c432a91a372a938980cb8/logos/laravel.svg"/>
                    <p class="text-lg font-semibold text-black">Laravel</p>
                </div>
                <div class="px-5 py-2 rounded-lg  bg-white  shadow-md shadow-[#18B6B9] flex items-center justify-between">
                    <img class="h-16" src="https://raw.githubusercontent.com/gilbarbara/logos/ab7d59c865eb7ad8096c432a91a372a938980cb8/logos/tailwindcss-icon.svg"/>
                    <p class="text-lg font-semibold text-black">TailwindCSS</p>
                </div>

                <div class="px-5 py-2 rounded-lg  bg-white  shadow-md shadow-[#41B883] flex items-center justify-between">
                    <img class="h-16" src="https://raw.githubusercontent.com/gilbarbara/logos/ab7d59c865eb7ad8096c432a91a372a938980cb8/logos/vue.svg"/>
                    <p class="text-lg font-semibold text-black">VueJS</p>
                </div>
                <div class="px-5 py-2 rounded-lg  bg-white  shadow-md shadow-[#161614] flex items-center justify-between">
                    <img class="h-16" src="https://raw.githubusercontent.com/gilbarbara/logos/ab7d59c865eb7ad8096c432a91a372a938980cb8/logos/github-icon.svg"/>
                    <p class="text-lg font-semibold text-black">GitHub</p>
                </div>
                <div class="px-5 py-2 rounded-lg  bg-white  shadow-md shadow-[#B52E31] flex items-center justify-between">
                    <img class="h-16" src="https://raw.githubusercontent.com/gilbarbara/logos/ab7d59c865eb7ad8096c432a91a372a938980cb8/logos/angular-icon.svg"/>
                    <p class="text-lg font-semibold text-black">AngulaJS</p>
                </div>

                <div class="px-5 py-2 rounded-lg  bg-white  shadow-md shadow-[#69AB5B] flex items-center justify-between">
                    <img class="h-16" src="https://raw.githubusercontent.com/gilbarbara/logos/ab7d59c865eb7ad8096c432a91a372a938980cb8/logos/nodejs-icon.svg"/>
                    <p class="text-lg font-semibold text-black">NodeJS</p>
                </div>

                <div class="px-5 py-2 rounded-lg  bg-white  shadow-md shadow-[#47C5FB] flex items-center justify-between">
                    <img class="h-16" src="https://raw.githubusercontent.com/gilbarbara/logos/ab7d59c865eb7ad8096c432a91a372a938980cb8/logos/flutter.svg"/>
                    <p class="text-lg font-semibold text-black">Flutter</p>
                </div>
                <div class="px-5 py-2 rounded-lg  bg-white  shadow-md shadow-[#00D8FF] flex items-center justify-between break-all">
                    <img class="h-16" src="https://raw.githubusercontent.com/gilbarbara/logos/ab7d59c865eb7ad8096c432a91a372a938980cb8/logos/react.svg"/>
                    <p class="text-lg font-semibold text-black">React Native</p>
                </div>
            </div>
        </div>
            <div class="hidden md:flex ">
                <a  href="#xp">
                    <img class="cursor-pointer animate-bounce" src="{{ asset('./img/blog/icons8-upward-arrow-50.png') }}"/>
                </a>
            </div>





        @if(false)
        <div class="md:mt-72">
            <div class="flex gap-x-2">
                <p class="text-xl font-sans font-semibold animate-pulse-blog" >Recent</p>
                <p class="text-xl font-sans font-semibold animate-pulse-invert-blog">Projects</p>
            </div>
            <div>
                <div class="bg-[#1E293B] px-2 py-3 rounded-lg grid grid-cols-1 lg:grid-cols-2">
                    <div></div>
                    <div>
                        <h1 class="flex gap-x-1">Project title <a href="" class="bg-[#38BDF8] text-[#0C4A6E] font-sans p-1 rounded-lg font-bold text-xs">Tailwind.css</a><a href="" class="bg-[#77C1D2] text-[#2D3441] font-sans p-1 rounded-lg font-bold text-xs">AlpineJS</a><a href="" class="bg-[#F8F8F8] text-[#FE2D20] font-sans p-1 rounded-lg font-bold text-xs">Laravel</a></h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse bibendum. Nunc non posuere consectetur, justo erat semper enim, non hendrerit dui odio id enim.</p>
                    </div>
                </div>
            </div>
        </div>
        @endif
        @if($response->xp)
            <div id="xp"></div>
            <div class="md:mt-72">
                <div class="flex gap-x-2">
                    <p class="text-xl font-sans font-semibold animate-pulse-blog" >My</p>
                    <p class="text-xl font-sans font-semibold animate-pulse-invert-blog">work</p>
                    <p class="text-xl font-sans font-semibold animate-pulse-blog">experiences</p>
                </div>
                @foreach($response->xp as $itemXp)
                    <div class="flex flex-col md:flex-row justify-center items-center my-2">
                        <div class="flex justify-center md:justify-start">
                            <a target="_blank" href="{{ $itemXp['url'] }}" class="shrink-0">
                                <img src="{{ $itemXp['image'] }}" class="h-auto w-48" alt="company logo">
                            </a>
                            <div class="relative ml-3 hidden w-full md:block">
                                <span class="absolute inset-x-0 top-1/2 h-0.5 -translate-y-1/2 transform bg-grey-70"></span>
                            </div>
                        </div>
                        <div class="md:w-3/5">
                            <div class="relative flex md:pl-18">
                                <span class="absolute top-1 hidden h-4 w-4 rounded-full border-2 border-grey-40 bg-white md:block"></span>
                                <div class="mt-1 flex">
                                    <i class="bx bxs-right-arrow hidden md:block"></i>
                                    <div class="md:-mt-1 md:pl-8">
                                        <span class="block font-body font-bold text-grey-40">{{ (new \App\Helpers\Helper)->formatDate($itemXp['dt_start']) }} - {{ (new \App\Helpers\Helper)->formatDate($itemXp['dt_end']) }}</span>
                                        <span class="block pt-2 font-header text-xl font-bold uppercase ">{{ $itemXp['office'] }}</span>
                                        <div class="pt-2">
                                            <span class="block font-body">{{ $itemXp['description'] }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="hidden mt-5 md:flex order-3 col-span-2 ">
                    <a  href="#contact">
                        <img class="cursor-pointer animate-bounce" src="{{ asset('./img/blog/icons8-upward-arrow-50.png') }}"/>
                    </a>
                </div>
            </div>
        @endif
        @if($response->post)
            <div class="md:mt-72">
                <div class="flex gap-x-2 ">
                    <p class="text-xl font-sans font-semibold animate-pulse-blog" >Recent</p>
                    <p class="text-xl font-sans font-semibold animate-pulse-invert-blog">Posts</p>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-4 gap-5">
                    @forelse($response->post as $key => $itemPost)
                        <a class="bg-[#1E293B] px-2 py-3 rounded-lg space-y-5 hover:translate-y-2 cursor-pointer " href="{{ route('post', $itemPost['id']) }}">
                            <div class="">
                                <img class="h-52  w-full object-cover rounded-lg" src="{{ $itemPost['image'] }}" alt="">
                            </div>
                            <div class="font-sans grid gap-y-5">
                                <div>
                                    <h1 class="text-center">{{ $itemPost['title'] }}</h1>
                                    <p class="text-center text-xs">{{ (new \App\Helpers\Helper)->formatDate($itemPost['created_at']) }}</p>
                                </div>
                                <p class="line-clamp-2">{{ $itemPost['detail'] }}</p>
                            </div>
                        </a>
                    @empty

                    @endforelse
                </div>
            </div>
        @endif

        

        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 mb-5 md:mt-72">
            
            <div id="contact" class="">
                <div class="flex gap-x-2">
                    <p class="text-xl font-sans font-semibold animate-pulse-blog" >Contact</p>
                    <p class="text-xl font-sans font-semibold animate-pulse-invert-blog">me</p>
                </div>
                <form class="grid md:grid-cols-2 gap-5" wire:submit.prevent="sendContact">
                    <x-inputs.input model="name" label="Name" required class="col-span-2 md:col-span-1 text-white"/>
                    <x-inputs.input model="email" label="E-mail" required class="col-span-2 md:col-span-1 text-white"/>
                    <x-inputs.text-area model="message" label="Message" required class="col-span-2 text-white">
                    </x-inputs.text-area>

                    <x-buttons.submit label="Send" class="col-span-2">Save</x-buttons.submit>
                </form>
            </div>
        </div>
    </div>
</div>
