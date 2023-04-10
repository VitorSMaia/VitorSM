<div>
    <div class="grid gap-y-5">
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
