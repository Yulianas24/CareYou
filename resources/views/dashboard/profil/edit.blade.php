@extends('layouts/dashboard')

@section('dashboard')
<div class="overflow-auto h-screen  px-4 md:px-6 ">
  <h1 class="text-3xl  font-semibold text-gray-800 dark:text-white ">
    Edit Profil
  </h1>
  <br>
  <div class="block p-6 w-full h-auto rounded-lg shadow-lg bg-white dark:bg-gray-700 dark:text-white">
    <form method="post" action="/dashboard/profil/{{ $konselor->username }}" enctype="multipart/form-data">
      @method('put')
      @csrf
      <div>
        
        <div class="lg:grid grid-cols-6 h-auto pb-20 gap-3">

          {{-- tentang --}}
          <div class="col-span-4 form-group mb-2  w-full h-80">
            <label for="tentang" class="form-label inline-block mb-2">tentang</label>
            @error('tentang')
                  <p class="block text-xs font-poppins font-normal text-pink-700 ">{{ $message }}</p>
            @enderror
            <input id="tentang" type="hidden" name="tentang" value="{{ old('tentang', $profile->tentang) }}">
            <trix-editor input="tentang" class="h-full overflow-scroll"></trix-editor>
          </div>
          {{-- upload Gambar --}}
          <div class="col-span-2 w-auto">
            <label for="formFile" class="form-label inline-block mb-2 ">Foto Profil</label>
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
            dark:bg-gray-700
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
        


        <div class="lg:columns-2">
          {{-- Nama --}}
          <div class="form-group mb-2 ">
            <label for="name" class="form-label inline-block mb-2 ">Nama</label>
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
              dark:bg-gray-700
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
            <label for="username" class="form-label inline-block mb-2">username</label>
            @error('username')
                <p class="block text-xs font-poppins font-normal text-pink-700 ">{{ $message }}</p>
              @enderror
            <input type="text" class="form-control block
              w-full
              px-3
              py-1.5
              text-base
              font-normal
              dark:bg-gray-700
              border border-solid border-gray-300
              rounded
              transition
              ease-in-out
              m-0
              focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
              placeholder="username" id="username" name="username" required value="{{ old('username', $konselor->username) }}">
          </div>
          
        </div>
        

        <div class="grid grid-cols-3 gap-3">
          
          {{-- S1  --}}
          <div class="form-group mb-2 ">
            <label for="kampus" class="form-label inline-block mb-2 ">Pendidikan S1</label>
            <select type="text" class="form-control
              block
              w-full
              px-3
              py-1.5
              text-base
              font-normal
              dark:bg-gray-700
              border border-solid border-gray-300
              rounded
              transition
              ease-in-out
              m-0
              focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="title"
              aria-describedby="kampus" placeholder="S1" name="pend_s1">
              <option value="">none</option>
                @foreach ($kampus as $item)
                  @if (old('pend_s1', $profile->pend_s1)==$item->name)
                  <option value="{{ $item->name }}" selected>{{ $item ->name }}</option>
                  @else
                  <option value="{{ $item->name }}">{{ $item ->name }}</option>
                  @endif
                @endforeach
                
              </select>
          </div>

          {{-- S2  --}}
          <div class="form-group mb-2 ">
            <label for="kampus" class="form-label inline-block mb-2 ">Pendidikan S2</label>
            <select type="text" class="form-control
              block
              w-full
              px-3
              py-1.5
              text-base
              font-normal
              dark:bg-gray-700
              border border-solid border-gray-300
              rounded
              transition
              ease-in-out
              m-0
              focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="title"
              aria-describedby="kampus" placeholder="S1" name="pend_s2">
              <option value="">none</option>
                @foreach ($kampus as $item)
                  @if (old('pend_s2', $profile->pend_s2)==$item->name)
                  <option value="{{ $item->name }}" selected>{{ $item ->name }}</option>
                  @else
                  <option value="{{ $item->name }}">{{ $item ->name }}</option>
                  @endif
                  
                @endforeach
                
              </select>
          </div>

          {{-- S3  --}}
          <div class="form-group mb-2 ">
            <label for="kampus" class="form-label inline-block mb-2 ">Pendidikan S3</label>
            <select type="text" class="form-control
              block
              w-full
              px-3
              py-1.5
              text-base
              font-normal
              dark:bg-gray-700
              border border-solid border-gray-300
              rounded
              transition
              ease-in-out
              m-0
              focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="title"
              aria-describedby="kampus" placeholder="S3" name="pend_s3">
              <option value="">none</option>
                @foreach ($kampus as $item)
                  @if (old('pend_s3', $profile->pend_s3)==$item->name)
                  <option value="{{ $item->name }}" selected>{{ $item ->name }}</option>
                  @else
                  <option value="{{ $item->name }}">{{ $item ->name }}</option>
                  @endif
                  
                @endforeach
                
              </select>
          </div>
        </div>

        <div class="columns-3">
          {{-- Gender  --}}
          <div class="form-group mb-2 ">
            <label for="kampus" class="form-label inline-block mb-2">Jenis kelamin</label>
            <select type="text" class="form-control
              block
              w-full
              px-3
              py-1.5
              text-base
              font-normal
              dark:bg-gray-700
              border border-solid border-gray-300
              rounded
              transition
              ease-in-out
              m-0
              focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="title"
              aria-describedby="kampus" placeholder="Jenis Kelamin" name="jenis_kelamin">
      
              @if ($konselor->jenis_kelamin !=null)                     
              <option value="laki-laki" {{ ($konselor->jenis_kelamin == "laki-laki") ? 'selected' : '' }}>Laki-laki</option>
              <option value="perempuan" {{ ($konselor->jenis_kelamin == 'perempuan') ? 'selected' : '' }}>Perempuan</option>
              @else
              <option value="none" selected hidden>Pilih</option>
              <option value="laki_laki">Laki-laki</option>
              <option value="perempuan">Perempuan</option>
              @endif
                
              </select>
          </div>
          {{-- Email --}}
          <div class="form-group mb-2">
            <label for="email" class="form-label inline-block mb-2">Email</label>
            @error('email')
                <p class="block text-xs font-poppins font-normal text-pink-700 ">{{ $message }}</p>
              @enderror
            <input type="text" class="form-control block
              w-full
              px-3
              py-1.5
              text-base
              font-normal
              dark:bg-gray-700
              border border-solid border-gray-300
              rounded
              transition
              ease-in-out
              m-0
              focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
              placeholder="email" id="email" name="email" required value="{{ old('email', $konselor->email) }}">
          </div>
          {{-- Nomor HP --}}
          <div class="form-group mb-2">
            <label for="nomor_hp" class="form-label inline-block mb-2">Nomor HP</label>
            @error('nomor_hp')
                <p class="block text-xs font-poppins font-normal text-pink-700 ">{{ $message }}</p>
              @enderror
            <input type="text" class="form-control block
              w-full
              px-3
              py-1.5
              text-base
              font-normal
              dark:bg-gray-700
              border border-solid border-gray-300
              rounded
              transition
              ease-in-out
              m-0
              focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
              placeholder="nomor_hp" id="nomor_hp" name="nomor_hp" required value="{{ old('nomor_hp', $konselor->nomor_hp) }}">
          </div>
         
        </div>
        
         {{-- Fokus penanganan masalah  --}}
         <div class="form-group mb-2 ">
          <label for="kampus" class="form-label inline-block mb-2">Fokus penanganan masalah (CTRL + klik kiri untuk memilih opsi lebih dari satu)</label>
          <select type="text" class="form-control
            block
            w-full
            px-3
            py-1.5
            text-base
            font-normal
            dark:bg-gray-700
            border border-solid border-gray-300
            rounded
            transition
            ease-in-out
            m-0
             focus:outline-none" id="title"
            aria-describedby="kampus" placeholder="S1" name="penanganan_masalah[]" multiple>
    
            @foreach ($kategori as $category)

            <option value="{{ $category->name }}">{{ $category ->name }}</option>
            
            @endforeach
              
            </select>
        </div>
        
        
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






