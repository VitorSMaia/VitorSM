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
        <div class="grid gap-y-5">
            <h1 class="text-xl font-sans font-semibold flex gap-x-2" >Recent<p class="text-[#1BC2EC]">Posts</p></h1>
            <div class="grid gridcols-1 lg:grid-cols-4 space-x-10">
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
                            <p>Saiba como as aplicações web progressivas estão transformando a experiência do usuário na web, aproximando-a da de um aplicativo nativo, sem instalação.</p>
                        </div>
                    </a>
                @empty

                @endforelse
            </div>
        </div>
    </div>
</div>
