@extends('dashboard')
@section('content2')
    <div class="antialiased sans-serif">
        <div class="container px-4">
            <h1 class="text-3xl py-4 border-b mb-2">Access</h1>
            @livewire('access.table')
        </div>
    </div>
@endsection
