@extends('layouts.pages')

@section('container')

<div class="grid justify-items-center w-screen h-full ">
  <div class="grid w-3/4 h-full ml-5 px-5">
    <article class="my-5">
      <img class="w-full" src="\storage\post-images\BVHsG7gVH8wQ82NnOub94LNjqDez6PIQvDxhUPAF.jpg" alt="Sunset in the mountains">
  
      <h2 class="text-2xl">
        {{ $post -> title }}
      </h2>
      <p>By. <a class="text-blue-800 font-semibold" href="/posts?user={{ $post -> user -> username }}">{{ $post->user->username }}</a> in <a class="text-blue-800 font-semibold" href="/posts?category={{ $post -> category -> slug }}">{{ $post->category->name }}</a></p>    
      <br>
      <div class=" text-justify">
        {!! $post -> body !!}
      </div>
    </article>
    <a href="/posts">back to posts</a>
  </div>
</div>
@endsection


