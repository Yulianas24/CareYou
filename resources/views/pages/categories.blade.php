
@extends('layouts.pages')

@section('container')
<h1 class="text-3xl">Post Categories</h1>

@foreach ($categories as $category)
  <ul>
    <li>
      <h2 class="text-2xl">
        <a href="/categories/{{ $category -> slug }}">{{ $category -> name }}</a>
      </h2>
    </li>
  </ul>
@endforeach
@endsection
