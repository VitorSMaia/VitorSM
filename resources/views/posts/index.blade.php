@extends('dashboard')
@section('content2')
    <div class="antialiased sans-serif">
        <div class="container px-4">
            <h1 class="text-3xl py-4 border-b mb-2">Posts</h1>
            @livewire('posts.table')
        </div>
    </div>
@endsection
