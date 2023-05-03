@extends('layout.blog')
@section('content')
    <script src="https://cdn.tailwindcss.com"></script>
    @livewire('post', ['id' => request()->id])
@endsection

