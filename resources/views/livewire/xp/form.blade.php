<div>
    <h1 class="text-gray-800 font-lg font-bold tracking-normal leading-tight mb-4">Enter Xp Details</h1>

    <form wire:submit.prevent="updateOrCreate" class="grid grid-cols-12 gap-5">
        <x-inputs.input class="col-span-6" model="company" label="Company"/>
        <x-inputs.input class="col-span-6" model="office" label="Office"/>
        <x-inputs.text-area class="col-span-12" model="description" label="Description"/>
        <x-inputs.date class="col-span-6" model="dt_start" label="Date Start"/>
        <x-inputs.date class="col-span-6" model="dt_end" label="Date End"/>
        <x-inputs.input class="col-span-12" model="image" label="Image"/>
        <x-inputs.input class="col-span-12" model="url" label="Url"/>

        <div class="flex items-center justify-start w-full ">
            <button type="submit" class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 transition duration-150 ease-in-out hover:bg-indigo-600 bg-indigo-700 rounded text-white px-8 py-2 text-sm">Save</button>
        </div>
    </form>
</div>
