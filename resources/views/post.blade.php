@extends('layouts.main')

@section('container')
<article class="mb-5">
  <h2 class="text-2xl">
    {{ $post -> title }}
  </h2>
  <p>By. Yulian in <a href="/categories/{{ $post -> category -> slug }}">{{ $post->category->name }}</a></p>
  <h5>{{ $post -> author }}</h5>
  {!! $post -> body !!}
</article>
<a href="/posts">back to posts</a>
@endsection


{{-- Post::create([
  'title' => 'Judul ke 3',
  'category_id' => 3,
  'slug' => 'judul-ke-3',
  'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, quo aliquid consequatur minima',
  'body' => "<p>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, quo aliquid consequatur minima doloribus ea laboriosam mollitia nostrum corporis ullam perspiciatis, in nemo expedita facilis modi voluptates distinctio! Id quaerat magnam animi quibusdam libero ab expedita omnis non nisi. Laboriosam id nihil amet recusandae sunt molestiae minus dolor distinctio debitis quod, culpa doloremque necessitatibus tempora voluptas ea.
    </p><p>Qui beatae repellendus quam veritatis aut voluptatum facilis in inventore id. Ipsum autem, dolorum accusantium maxime quo reprehenderit. Exercitationem reprehenderit atque blanditiis eaque fugiat cumque a temporibus sequi assumenda quibusdam voluptas deleniti id ullam error dolore adipisci, fugit laborum praesentium repellat similique culpa.</p>",
  ]); --}}

