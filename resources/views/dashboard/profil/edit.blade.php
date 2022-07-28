@extends('layouts/dashboard')

@section('dashboard')
<div class="overflow-auto h-screen  px-4 md:px-6">
  <h1 class="text-3xl  font-semibold text-gray-800 dark:text-white">
    Edit Profil
  </h1>
  <br>
  <div class="block p-6 w-full h-auto rounded-lg shadow-lg bg-white ">
    <form method="post" action="/dashboard/profil/{{ $konselor->username }}" enctype="multipart/form-data">
      @method('put')
      @csrf
      <div>
        {{-- Nama --}}
        <div class="form-group mb-2 ">
          <label for="name" class="form-label inline-block mb-2 text-gray-700">Nama</label>
          @error('nama')
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
            bg-white bg-clip-padding
            border border-solid border-gray-300
            rounded
            transition
            ease-in-out
            m-0
            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="name"
            aria-describedby="name" placeholder="name" id="name" name="name" required value="{{ old('name', $konselor->name) }}">
            
        </div>
        {{-- username --}}
        <div class="form-group mb-2">
          <label for="username" class="form-label inline-block mb-2 text-gray-700">username</label>
          @error('username')
              <p class="block text-xs font-poppins font-normal text-pink-700 ">{{ $message }}</p>
            @enderror
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
            placeholder="username" id="username" name="username" required value="{{ old('username', $konselor->username) }}">
        </div>
        {{-- S1  --}}
        <div class="form-group mb-2 ">
          <label for="kampus" class="form-label inline-block mb-2 text-gray-700">S1 di</label>
          <select type="text" class="form-control
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
            aria-describedby="kampus" placeholder="S1" name="pend_s1">
              @foreach ($kampus as $item)
                @if (old('pend_s2', $konselor->profile->pend_s1)==$item->id)
                <option value="{{ $item->id }}" selected>{{ $item ->name }}</option>
                @else
                <option value="{{ $item->id }}">{{ $item ->name }}</option>
                @endif
              @endforeach
              
            </select>
        </div>

        {{-- S2  --}}
        <div class="form-group mb-2 ">
          <label for="kampus" class="form-label inline-block mb-2 text-gray-700">S2 di</label>
          <select type="text" class="form-control
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
            aria-describedby="kampus" placeholder="S1" name="pend_s2">
              @foreach ($kampus as $item)
                @if (old('pend_s2', $konselor->profile->pend_s2)==$item->id)
                <option value="{{ $item->id }}" selected>{{ $item ->name }}</option>
                @else
                <option value="{{ $item->id }}">{{ $item ->name }}</option>
                @endif
              @endforeach
              
            </select>
        </div>

        {{-- upload Gambar --}}
        <div class="mb-3 w-96">
          <label for="formFile" class="form-label inline-block mb-2 text-gray-700">Foto Profil</label>
         <input type="hidden" name="oldImage" value = "{{ $konselor->image }}">
          @if ($konselor->image)
          <img src="{{ asset('storage/' . $konselor->image) }}" alt="" class="imgPreview">
          @else
          <img src="" alt="" class="imgPreview">
          @endif

          
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
          focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" type="file" id="image" name="image" onchange="previewImage()">
          @error('image')
          <p class="block text-xs font-poppins font-normal text-pink-700 ">{{ $message }}</p>
        @enderror
        </div>
      </div>
      {{-- tentang --}}
      <div class="form-group mb-2 ">
        <label for="tentang" class="form-label inline-block mb-2 text-gray-700">tentang</label>
        @error('tentang')
              <p class="block text-xs font-poppins font-normal text-pink-700 ">{{ $message }}</p>
        @enderror
        <input id="tentang" type="hidden" name="tentang" value="{{ old('tentang', $konselor->profile->tentang) }}">
        <trix-editor input="tentang"></trix-editor>
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
        ease-in-out">Update Profil</button>
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

  function previewImage() {
    const image = document.querySelector('#image');
    const imgPreview = document.querySelector('.imgPreview');

    imgPreview.style.display = 'block';

    const ofReader= new FileReader();
    ofReader.readAsDataURL(image.files[0]);

    ofReader.onload = function(oFREvent){
      imgPreview.src = oFREvent.target.result;
    }
    
  }
</script> 
@endsection






