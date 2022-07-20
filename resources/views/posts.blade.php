
@extends('layouts.main')

@section('container')
<h1 class="text-3xl">Halaman Post</h1>

@foreach ($posts as $item)
  <article class="mb-5">
    <h2 class="text-2xl">
      <a href="/posts/{{ $item -> slug }}">{{ $item -> title }}</a>
    </h2>
    <h5>{{ $item -> author }}</h5>
    <p>{{ $item -> excerpt }}</p>
  </article>
@endforeach
@endsection