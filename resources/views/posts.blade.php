
@extends('layouts.main')

@section('container')
<div class="grid pt-14">
  <h1 class="text-3xl">{{ $title }}</h1>

@foreach ($posts as $item)
  <article class=" mb-5 ">
    <h2 class="text-2xl">
      <a href="/posts/{{ $item -> slug }}">{{ $item -> title }}</a>
    </h2>
    <p>By. <a href="/author/{{ $item -> user -> username }}">{{ $item->user->username }}</a> in <a href="/categories/{{ $item -> category -> slug }}">{{ $item->category->name }}</a></p>


    <h5>{{ $item -> author }}</h5>
    <p>{{ $item -> excerpt }}</p>
  </article>
@endforeach
</div>
@endsection
