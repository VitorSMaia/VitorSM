@extends('layout.blog')
@section('content')
  @livewire('post', ['postID' => request()->id])
@endsection

