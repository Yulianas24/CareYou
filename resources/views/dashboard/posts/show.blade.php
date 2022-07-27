@extends('layouts/dashboard')

@section('dashboard')
<div class="overflow-auto h-screen pb-24 px-4 md:px-6 dark:text-white">
  <article class="mb-5">
    <h2 class="text-2xl mb-5">
      {{ $post -> title }}
    </h2>
    <div class="flex ">
      <a href="/dashboard/posts" class="bg-green-500 hover:bg-green-600 p-2 mr-3 text-white rounded-md">Back To Post</a>
      <a href="/dashboard/posts/{{ $post->slug }}/edit"  class="bg-yellow-500 hover:bg-yellow-600 p-2 px-5 mr-3 text-white rounded-md">Edit</a>
      <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="inline-flex">
        @method('delete')
        @csrf
        <button type="submit" class="bg-red-500 hover:bg-red-700  text-white py-1 px-2 rounded-sm" onclick="return confirm('Apakah anda yakin?')">Delete</button>
      </form>
    </div>
    <br>
    @if ($post->image)
      <div class="">
        <img class="max-h-102" src="{{ asset('storage/'.$post->image) }}" alt="{{ $post->name }}">

      </div>
    @endif
    <div >
      {!! $post -> body !!}
    </div>
  </article>
</div>
@endsection