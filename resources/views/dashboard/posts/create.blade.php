@extends('layouts/dashboard')

@section('dashboard')
<div class="overflow-auto pb-24 px-4 md:px-6">
  <h1 class="text-4xl  font-semibold text-gray-800 dark:text-white">
    Tambah post baru
  </h1>
  <br>
  <div class="block p-6 w-3/4 h-full rounded-lg shadow-lg bg-white ">
    <form method="post" action="/dashboard/posts">
      @csrf
      <div class="form-group mb-6 ">
        <label for="Title" class="form-label inline-block mb-2 text-gray-700">Title</label>
        <input type="text" class="form-control
          block
          w-full
          px-3
          py-1.5
          text-base
          font-normal
          text-gray-700
          bg-white bg-clip-padding
          border border-solid border-gray-300
          rounded
          transition
          ease-in-out
          m-0
          focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="title"
          aria-describedby="title" placeholder="title">
      </div>
      <div class="form-group mb-6">
        <label for="slug" class="form-label inline-block mb-2 text-gray-700">Slug</label>
        <input type="text" class="form-control block
          w-full
          px-3
          py-1.5
          text-base
          font-normal
          text-black
          bg-gray-100 bg-clip-padding
          border border-solid border-gray-300
          rounded
          transition
          ease-in-out
          m-0
          focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
          placeholder="Slug" id="slug" name="slug" disabled>
      </div>
      
      <button type="submit" class="
        px-6
        py-2.5
        bg-blue-600
        text-white
        font-medium
        text-xs
        leading-tight
        uppercase
        rounded
        shadow-md
        hover:bg-blue-700 hover:shadow-lg
        focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
        active:bg-blue-800 active:shadow-lg
        transition
        duration-150
        ease-in-out">Create Post</button>
    </form>
  </div>
</div>


<script>
  const title = document.querySelector('#title');
  const slug = document.querySelector('#slug');
  title.addEventListener('change', function () {
    fetch('/dashboard/posts/checkSlug?title='+ title.value)
    .then(response => response.json())
    .then(data => slug.value = data.slug)
  });
</script>
@endsection