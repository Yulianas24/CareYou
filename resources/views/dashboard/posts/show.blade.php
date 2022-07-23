@extends('layouts/dashboard')

@section('dashboard')
<div class="flex h-screen pb-24 px-4 md:px-6">
  <article class="mb-5">
    <h2 class="text-2xl mb-5">
      {{ $post -> title }}
    </h2>
    <div class="flex ">
      <a href="/dashboard/posts" class="bg-green-500 hover:bg-green-600 p-2 mr-3 text-white rounded-md">Back To Post</a>
      <a href="/dashboard/posts" class="bg-yellow-500 hover:bg-yellow-600 p-2 px-5 mr-3 text-white rounded-md">Edit</a>
      <a href="/dashboard/posts" class="bg-red-500 hover:bg-red-600 p-2 text-white rounded-md">Delete</a>
    </div>
    <br>
    <div >
      {!! $post -> body !!}
    </div>
  </article>
</div>
@endsection