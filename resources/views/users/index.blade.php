@extends('dashboard')
@section('content2')
    <div class="antialiased sans-serif">
        <div class="container mx-auto py-6 px-4">
            <h1 class="text-3xl py-4 border-b mb-10">Usuários</h1>

            @livewire('users.table')
        </div>
    </div>
@endsection
