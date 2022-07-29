@extends('layouts/dashboard')

@section('dashboard')
<div class="overflow-auto h-screen  px-4 md:px-6">

  @if (session()->has('success'))  
  <div id="id01" class="alert w-3/4 bg-green-200 rounded-md py-2 px-6  text-base text-green-800 inline-flex items-center alert-dismissible fade show" role="alert">
  
      <p>{{ session('success') }}</p>
      <button type="button" class=" w-7 h-7 ml-auto text-green-800 border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-yellow-900 hover:opacity-75 hover:no-underline" data-bs-dismiss="alert" aria-label="Close"> <span onclick="document.getElementById('id01').style.display='none'"> &times;</button>
  </div>
  @endif
  <h1 class="text-4xl  font-semibold text-gray-800 dark:text-white">
    Profil {{ $konselor->name }} <span><a href="/dashboard/profil/{{ $konselor->username }}/edit" 
      class="w-1/4 text-sm italic text-blue-500 my-3 py-2 rounded-md">Edit Profil
    </a></span>
  </h1>
  
  <br>

  <div class="w-full h-full">
    <div class="lg:flex w-full flex-row">
      <div class="flex-col basis-1/4 w-full h-auto">
          
        @if ($konselor->image)
        <div class="h-auto  bg-gray-900 rounded-lg shadow-lg mb-3">
          <img src="{{ asset('storage/'.$konselor->image) }}" alt="" class="rounded-lg">
        </div>     
        @else
        <div class="h-auto  bg-gray-900 rounded-lg shadow-lg mb-3">
          <img src="\asset\img\Image_not_available.jpg" alt="">
        </div> 
        @endif
          

          {{-- Detail --}}
          <div class="h-auto bg-gray-900 rounded-lg shadow-lg text-white ">
            {{-- Pendidikan  --}}
                        
            <div class="px-5 py-5">
              <h2 class="text-base font-semibold">Detail:</h1>
              <ul class="list-disc text-sm font-normal ml-5">
                <li>Email: {{ $konselor->email }}</li>
                <li>Nomor hp : {{ $konselor->nomor_hp }}</li>
                <li>Gender : {{ $konselor->jenis_kelamin }}</li>
              </ul>
            </div>

            {{-- Pendidikan  --}}
            
            <div class="px-5 pb-5">
              <h2 class="text-base font-semibold">Pendidikan:</h1>
              <ul class="list-disc text-sm font-normal ml-5">
                <li {{ ($profile->pend_s1) ? '' : 'hidden' }}>{{ ($profile->pend_s1) ? 'Psikologi - S1 - '.$profile->pend_s1 : '' }}</li>
                <li {{ ($profile->pend_s2) ? '' : 'hidden' }}>{{  ($profile->pend_s2) ? 'Psikologi - S2 - '.$profile->pend_s2 : ''  }}</li>
              </ul>
            </div>

            {{-- Penanganan masalah  --}}
            <div class="px-5 pb-5">
              <h2 class="text-base font-semibold">Fokus Penanganan Masalah:</h1>
              <ul class="list-disc text-sm font-normal ml-5">
                <li>Toxic Relationship</li>
                <li>Stress</li>
                <li>Depresi</li>
                <li>Kecemasan</li>
              </ul>
            </div>

          </div>
      </div>
      {{-- Tentang --}}
      <div class="basis-3/4 w-full min-h-102 lg:ml-3 bg-gray-900 rounded-lg shadow-lg p-5 text-gray-800 dark:text-white">
        <h1 class="text-3xl  w-auto font-semibold text-gray-800 dark:text-white">Tentang</h1>
        <div class="w-1/2 h-1 bg-blue-900 mt-2 rounded-full"></div>
        <p class="text-justify">
          {!! $profile->tentang !!}
        </p>
      </div>
    </div>  
    
  </div>
</div>
@endsection