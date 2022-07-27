@extends('layouts/dashboard')

@section('dashboard')
<div class="overflow-auto h-screen px-4 md:px-6">
  <h1 class="text-3xl  font-semibold text-gray-800 dark:text-white">
    Tambah post baru
  </h1>
  <br>
  <div class="block p-6 w-full h-auto rounded-lg shadow-lg bg-white dark:bg-gray-700 ">
    <form class="block " method="post" action="/dashboard/posts" enctype="multipart/form-data">
      @csrf
      <div>
        {{-- Judul --}}
        <div class="form-group mb-2 ">
          <label for="title" class="form-label inline-block mb-2 text-gray-700 dark:text-white">title</label>
          @error('title')
              <p class="block text-xs font-poppins font-normal text-pink-700 ">{{ $message }}</p>
            @enderror
          <input type="text" class="form-control
            block
            w-full
            px-3
            py-1.5
            text-base
            font-normal
            text-gray-700
            dark:text-white
            dark:bg-gray-800
            focus:dark:bg-gray-800
            focus:dark:text-white
            bg-white bg-clip-padding
            border border-solid border-gray-300
            rounded
            transition
            ease-in-out
            m-0
            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="title"
            aria-describedby="title" placeholder="title" id="title" name="title" required value="{{ old('title') }}">

        </div>
        {{-- Slug --}}
        <div class="form-group mb-2">
          <label for="slug" class="form-label inline-block mb-2 text-gray-700 dark:text-white">Slug</label>
          @error('slug')
              <p class="block text-xs font-poppins font-normal text-pink-700 ">{{ $message }}</p>
            @enderror
          <input type="text" class="form-control block
            w-full
            px-3
            py-1.5
            text-base
            font-normal
            text-black
            dark:text-white
            dark:bg-gray-800
            dark:focus:bg-gray-800
            focus:dark:text-white
            bg-gray-100 bg-clip-padding
            border border-solid border-gray-300
            rounded
            transition
            ease-in-out
            m-0
            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
            placeholder="Slug" id="slug" name="slug" required value="{{ old('slug') }}">
        </div>
        
        {{-- Kategori --}}
        <div class="form-group mb-2 ">
          <label for="kategori" class="form-label inline-block mb-2 text-gray-700 dark:text-white">kategori</label>
          <select type="text" class="form-control
            block
            w-full
            px-3
            py-1.5
            text-base
            font-normal
            text-gray-700
            bg-white bg-clip-padding
            dark:text-white
            dark:bg-gray-800
            focus:dark:bg-gray-800
            focus:dark:text-white
            border border-solid border-gray-300
            rounded
            transition
            ease-in-out
            m-0
            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="title"
            aria-describedby="kategori" placeholder="kategori" name="category_id">

            
              @foreach ($categories as $category)
                @if (old('category_id')==$category->id)
                <option value="{{ $category->id }}" selected>{{ $category ->name }}</option>
                @else
                <option value="{{ $category->id }}">{{ $category ->name }}</option>
                @endif
                
              @endforeach
              
            </select>
            {{-- upload Gambar --}}
            <div class="mb-3 w-96">
              <label for="formFile" class="form-label inline-block mb-2 text-gray-700">Post Image</label>
              <input class="form-control
              block
              w-full
              px-3
              py-1.5
              text-base
              font-normal
              text-gray-700
              bg-white bg-clip-padding
              dark:text-white
              dark:bg-gray-800
              focus:dark:bg-gray-800
              focus:dark:text-white
              border border-solid border-gray-300
              rounded
              transition
              ease-in-out
              m-0
              focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" type="file" id="image" name="image">
              @error('image')
              <p class="block text-xs font-poppins font-normal text-pink-700 ">{{ $message }}</p>
            @enderror
            </div>
        </div>
      </div>
      {{-- Body --}}
      <div class="form-group mb-2 ">
        <label for="Body" class="form-label inline-block mb-2 text-gray-700">Body</label>
        @error('body')
              <p class="block text-xs font-poppins font-normal text-pink-700 ">{{ $message }}</p>
        @enderror
        <input id="body" type="hidden" name="body" value="{{ old('body') }}">
        <trix-editor input="body" class="dark:text-white
        dark:bg-gray-800"></trix-editor>
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

  document.addEventListener('trix-file-accept', function(e){
    e.preventDefault();
  });
</script> 
@endsection






