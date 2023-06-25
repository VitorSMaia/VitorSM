<div>
    <h1 class="text-gray-800 font-lg font-bold tracking-normal leading-tight mb-4">{{ $idXp ? 'Edit' : 'Register' }} Xp Details</h1>

    <form wire:submit.prevent="updateOrCreate" class="grid grid-cols-12 gap-5">
        <x-inputs.input class="col-span-6" model="title" label="Title"/>
        <x-inputs.input class="col-span-6" model="description" label="Description"/>
        <x-inputs.input class="col-span-12" model="url" label="Url"/>

        <fieldset>
            <legend>Choose your monster's features:</legend>
            @foreach($langs as $itemLang)
            @endforeach
            <div>
                <input wire:model="state.test" type="checkbox" id="scales" name="scales" checked>
                <label for="scales">Scales</label>
            </div>

            <div>
                <input wire:model="state.test" type="checkbox" id="horns" name="horns">
                <label for="horns">Horns</label>
            </div>
        </fieldset>

        <x-inputs.text-area class="col-span-12" model="frameworks_or_languages" label="Frameworks Or Language"/>

        <div class="flex items-center justify-start w-full col-span-12">
            <button type="submit" class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 transition duration-150 ease-in-out hover:bg-indigo-600 bg-indigo-700 rounded text-white px-8 py-2 text-sm">Save</button>
        </div>
    </form>
</div>
