@extends('layout.blog')
@section('content')
    <script src="https://cdn.tailwindcss.com"></script>
  @livewire('post', ['postID' => request()->id])
@endsection

