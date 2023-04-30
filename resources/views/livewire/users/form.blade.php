<div>
    <h1 class="text-gray-800 font-lg font-bold tracking-normal leading-tight mb-4">Enter User Details</h1>
    <form wire:submit.prevent="save" class="grid gap-y-2">
        <label for="name" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Nome</label>
        <input wire:model.defer="state.name" id="name" class="text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" placeholder="James" />
        <label for="email2" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">E-mail</label>
        <div class="relative">
            <div class="absolute text-gray-600 flex items-center px-4 border-r h-full">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-credit-card" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" />
                    <rect x="3" y="5" width="18" height="14" rx="3" />
                    <line x1="3" y1="10" x2="21" y2="10" />
                    <line x1="7" y1="15" x2="7.01" y2="15" />
                    <line x1="11" y1="15" x2="13" y2="15" />
                </svg>
            </div>
            <input wire:model.defer="state.email"  id="email" class="text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-16 text-sm border-gray-300 rounded border" placeholder="email@email.com" />
        </div>
        <label for="password" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Senha</label>
        <div class="relative">
            <div class="absolute text-gray-600 flex items-center px-4 border-r h-full">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-credit-card" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" />
                    <rect x="3" y="5" width="18" height="14" rx="3" />
                    <line x1="3" y1="10" x2="21" y2="10" />
                    <line x1="7" y1="15" x2="7.01" y2="15" />
                    <line x1="11" y1="15" x2="13" y2="15" />
                </svg>
            </div>
        <input wire:model.defer="state.password"  id="password" class="text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-16 text-sm border-gray-300 rounded border" placeholder="Password" />
        </div>

        <div class="flex items-center justify-start w-full">
            <button type="submit" class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 transition duration-150 ease-in-out hover:bg-indigo-600 bg-indigo-700 rounded text-white px-8 py-2 text-sm">Salvar</button>
            {{--        <button class="focus:outline-none focus:ring-2 focus:ring-offset-2  focus:ring-gray-400 ml-3 bg-gray-100 transition duration-150 text-gray-600 ease-in-out hover:border-gray-400 hover:bg-gray-300 border rounded px-8 py-2 text-sm" onclick="modalHandler()">Fechar</button>--}}
        </div>
    </form>
</div>
