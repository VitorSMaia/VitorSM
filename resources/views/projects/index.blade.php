@extends('dashboard')
@section('content2')
    <div class="antialiased sans-serif">
        <div class="container px-4">
            <h1 class="text-3xl py-4 border-b mb-2">Projects</h1>
            @livewire('projects.table')
        </div>
    </div>
@endsection
