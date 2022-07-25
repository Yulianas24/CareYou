@extends('layouts.main')

@section('container')
<div class="grid w-screen h-18 bg-black" ></div>
<div class=" w-full h-full ml-5 px-5">
  <article class="my-5">
    <h2 class="text-2xl">
      {{ $post -> title }}
    </h2>
    <p>By. <a class="text-blue-800 font-semibold" href="/author/{{ $post -> user -> username }}">{{ $post->user->username }}</a> in <a class="text-blue-800 font-semibold" href="/categories/{{ $post -> category -> slug }}">{{ $post->category->name }}</a></p>    
    <br>
    <div class="pr-16">
      {!! $post -> body !!}
    </div>
  </article>
  <a href="/posts">back to posts</a>
</div>
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

