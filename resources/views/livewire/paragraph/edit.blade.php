<div>
    <script src="https://cdn.tailwindcss.com"></script>
    <form wire:submit.prevent="save" class="grid grid-cols-2 gap-5">
        <div>
            <textarea wire:model="state.content" name="" id="" rows="20" class="h-full w-full p-5 bg-opacity-20 rounded-lg bg-black"></textarea>
        </div>
        <div>
            {!! $state['content'] !!}
        </div>
        <div class="flex items-center justify-start w-full">
            <button type="submit" class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 transition duration-150 ease-in-out hover:bg-indigo-600 bg-indigo-700 rounded text-white px-8 py-2 text-sm">Salvar</button>
        </div>
    </form>
</div>
