<div>
    <h1 class="text-gray-800 font-lg font-bold tracking-normal leading-tight mb-4">Enter User Details</h1>

    <form wire:submit.prevent="save" class="grid gap-y-2">
        <x-inputs.input model="state.name" label="Image"/>
        <x-inputs.input model="state.email" label="Email"/>
        <x-inputs.input model="state.password" label="Password"/>

        <div class="flex items-center justify-start w-full">
            <button type="submit" class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 transition duration-150 ease-in-out hover:bg-indigo-600 bg-indigo-700 rounded text-white px-8 py-2 text-sm">Salvar</button>
            {{--        <button class="focus:outline-none focus:ring-2 focus:ring-offset-2  focus:ring-gray-400 ml-3 bg-gray-100 transition duration-150 text-gray-600 ease-in-out hover:border-gray-400 hover:bg-gray-300 border rounded px-8 py-2 text-sm" onclick="modalHandler()">Fechar</button>--}}
        </div>
    </form>
</div>
