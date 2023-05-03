<div>
    <script src="https://cdn.tailwindcss.com"></script>
    <form wire:submit.prevent="save" class="grid grid-cols-2 gap-5">
        <div>
            <x-inputs.text-area model="content" label="Content" rows="10"/>
        </div>
        <div>
            {!! $state['content'] !!}
        </div>
        <div class="col-span-2 flex items-center justify-start w-full">
            <button type="submit" class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 transition duration-150 ease-in-out hover:bg-indigo-600 bg-indigo-700 rounded text-white px-8 py-2 text-sm">Salvar</button>
        </div>
    </form>
</div>
