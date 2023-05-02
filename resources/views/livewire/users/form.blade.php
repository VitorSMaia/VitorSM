<div>
    <h1 class="text-gray-800 font-lg font-bold tracking-normal leading-tight mb-4">{{ $idUser ? 'Edit' : 'Register' }} User Details</h1>
    @error('email', 'login', 'name')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <form wire:submit.prevent="updateOrCreate" class="grid grid-cols-12 gap-5">
        <x-inputs.input class="col-span-12" model="name" label="Name"/>
        <x-inputs.input class="col-span-12" model="email" label="Email"/>
        <x-inputs.input class="col-span-12" model="password" label="Password"/>
        <x-inputs.input class="col-span-12" model="password_confirmation" label="Password Confirmation"/>

        <div class="flex items-center justify-start w-full">
            <button type="submit" class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 transition duration-150 ease-in-out hover:bg-indigo-600 bg-indigo-700 rounded text-white px-8 py-2 text-sm">Salvar</button>
        </div>
    </form>
</div>
