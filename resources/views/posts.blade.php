
@extends('layouts.main')

@section('container')
<div class="grid w-screen h-18 bg-black" ></div>
<div class="grid h-full w-full">
  
  <h1 class="text-3xl pt-2 ml-2">{{ $title }}</h1>

@foreach ($posts as $item)
  <article class=" my-3 mx-6">
    <h2 class="text-2xl text-blue-800" >
      <a href="/posts/{{ $item -> slug }}">{{ $item -> title }}</a>
    </h2>
    <p>By. <a class="text-blue-800 font-semibold" href="/author/{{ $item -> user -> username }}">{{ $item->user->username }}</a> in <a class="text-blue-800 font-semibold" href="/categories/{{ $item -> category -> slug }}">{{ $item->category->name }}</a></p>
    
    <p>{{ $item -> excerpt }}</p>
  </article>
@endforeach
</div>
@endsection
