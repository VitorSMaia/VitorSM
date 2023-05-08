@extends('layout.guest')
@section('content')


{{--    @livewire('auth.login')--}}
    <div class="flex justify-center items-center">
        <div class="w-max px-4 py-6 bg-white rounded-md">
            <!-- Brand -->
            <form method="POST" action="{{ route('loginController') }}" class="space-y-5">
                @csrf
                <x-inputs.input class=" text-black" label="Email" model="email" required/>

                <x-inputs.input class="col-span-1 text-black" type="password" model="password" label="Password" required/>


                <div wire:model="captcha" class="h-captcha" data-sitekey="395310db-8314-4cb0-8682-761098e56149"></div>

                <x-buttons.submit label="Login"  />
            </form>
        </div>
    </div>

@endsection

