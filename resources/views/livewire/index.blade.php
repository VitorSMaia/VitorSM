<div>

    <div class="grid gap-y-5">
        <div class="grid grid-cols-12 lg:space-x-40">
            <div class="lg:col-span-6 col-span-12  space-y-5 order-2 lg:order-1">
                <h1 class="text-3xl">Hi there, I'm Vitor</h1>
                <p>
                    I am a full-stack developer with extensive experience in Laravel and skills in Bootstrap,
                    Tailwind, and AlpineJS. In addition, I have experience in databases, including MySQL, SQL Server, and PgSQL.
                    I also have knowledge in mobile development, in Flutter and React Native.
                </p>
                <p>
                    With this broad range of skills, I am capable of creating high-quality and scalable web and mobile
                    applications. I am always seeking new challenges and have a strong commitment to the quality of my work.
                </p>
                <p>
                    I look forward to contributing my knowledge and skills to your company. If you need further information, please feel free to contact me.
                </p>
                <div class="flex justify-start items-center gap-x-5">
                    <img class="h-10 cursor-pointer hover:translate-y-2" src="{{ asset('img/gmail.png') }}" alt="" srcset="">
                    <img class="h-10 cursor-pointer hover:translate-y-2" src="{{ asset('img/linkedin.png') }}" alt="" srcset="">
                    <img class="h-10 cursor-pointer hover:translate-y-2" src="{{ asset('img/github.png') }}" alt="" srcset="">
                    <img class="h-10 cursor-pointer hover:translate-y-2" src="{{ asset('img/whatsapp.png') }}" alt="" srcset="">
                </div>
            </div>
            <div class="lg:col-span-6 col-span-12 order-1 lg:order-2">
                <img class="" src="https://d1unuvan7ts7ur.cloudfront.net/0x826/a014fb64-2cf2-4382-bb75-77d808d5c1f4/01GWFA7AZ53Q0HKDT5PF8B08RC" alt="">
            </div>
        </div>
{{--        <div class="grid gap-y-5">--}}
{{--            <h1 class="text-xl font-sans font-semibold flex gap-x-2" >Recent<p class="text-[#1BC2EC]">Projects</p></h1>--}}
{{--            <div>--}}
{{--                <div class="bg-[#1E293B] px-2 py-3 rounded-lg grid grid-cols-1 lg:grid-cols-2">--}}
{{--                    <div></div>--}}
{{--                    <div>--}}
{{--                        <h1 class="flex gap-x-1">Project title <a href="" class="bg-[#38BDF8] text-[#0C4A6E] font-sans p-1 rounded-lg font-bold text-xs">Tailwind.css</a><a href="" class="bg-[#77C1D2] text-[#2D3441] font-sans p-1 rounded-lg font-bold text-xs">AlpineJS</a><a href="" class="bg-[#F8F8F8] text-[#FE2D20] font-sans p-1 rounded-lg font-bold text-xs">Laravel</a></h1>--}}
{{--                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse bibendum. Nunc non posuere consectetur, justo erat semper enim, non hendrerit dui odio id enim.</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
        <div>
            <h1 class="font-semibold text-4xl text-center">My work experiences</h1>
            <p class="font-semibold text-md text-center">________________________________</p>

            <div class="mt-10">
                <div class="relative mx-auto mt-12 flex w-full flex-col lg:w-2/3">
                    <span class="left-2/5 absolute inset-y-0 ml-10 hidden w-0.5 bg-grey-40 md:block"></span>

                    @foreach($response->xp as $itemXp)
                        <div class="mt-8 flex flex-col text-center md:flex-row md:text-left">
                            <div class="md:w-2/5">
                                <div class="flex justify-center md:justify-start">
                                    <a target="_blank" href="{{ $itemXp['url'] }}" class="shrink-0">
                                        <img src="{{ $itemXp['image'] }}" class="h-auto w-48" alt="company logo">
                                    </a>
                                    <div class="relative ml-3 hidden w-full md:block">
                                        <span class="absolute inset-x-0 top-1/2 h-0.5 -translate-y-1/2 transform bg-grey-70"></span>
                                    </div>
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
                </div>
            </div>
        </div>
        <div class="grid gap-y-5">
            <h1 class="text-xl font-sans font-semibold flex gap-x-2" >Recent<p class="text-[#1BC2EC]">Posts</p></h1>
            <div class="grid gridcols-1 lg:grid-cols-4 gap-5">
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
        <div id="contact" class="mb-5">
            <div class="flex justify-center items-center p-5">
                <p class="text-4xl  text-center border-b-4 border-blue-900"> Contact me </p>
            </div>
            <div>
                <form class="grid md:grid-cols-2 gap-5" action="">
                    <label class="col-span-2 md:col-span-1" for="name">
                        Nome
                        <input id="name" type="text" required class="h-12 w-full shadow-md shadow-blue-300 text-black appearance-none rounded-lg bg-opacity-20 px-3 py-2">
                    </label>

                    <label class="col-span-2 md:col-span-1" for="email">
                        E-mail
                        <input id="email" type="email" required class="h-12 w-full shadow-md shadow-blue-300 text-black appearance-none rounded-lg bg-opacity-20  px-3 py-2">
                    </label>
                    <label class="col-span-2" for="">
                        Menssagem
                        <textarea class="w-full shadow-md shadow-blue-300 text-black appearance-none rounded-lg bg-opacity-20  px-3 py-2" rows="10"></textarea>
                    </label>
                </form>
            </div>
        </div>
    </div>
</div>
