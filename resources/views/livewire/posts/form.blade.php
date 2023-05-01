<div>
    <h1 class="text-gray-800 font-lg font-bold tracking-normal leading-tight mb-4">{{ $idPost ? 'Edit' : 'Register' }} Post Details</h1>

    <form wire:submit.prevent="updateOrCreate" class="grid grid-cols-12 gap-5">
        <x-inputs.input class="col-span-6" model="title" label="Title"/>
        <x-inputs.input class="col-span-6" model="detail" label="Detail"/>
        <x-inputs.input class="col-span-6" model="image" label="Image"/>

        <div class="flex items-center justify-start w-full">
            <button type="submit" class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 transition duration-150 ease-in-out hover:bg-indigo-600 bg-indigo-700 rounded text-white px-8 py-2 text-sm">Save</button>
        </div>
    </form>
</div>
