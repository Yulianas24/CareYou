
@extends('layouts.pages')

@section('container')
<div class="grid justify-items-center h-full w-full">
<div class="w-screen h-52 absolute -z-50">
    @include('/template/templateMain')
</div>
{{-- !: Caption --}}
<div class="w-screen h-52 flex items-center">
    <figure class="flex flex-col ml-24">
        <h1 class="font-roboto font-semibold text-2xl">Pilih Konselor CareYou Yang Cocok Dengan Kamu</h1>
        <h3 class="font-poppins text-gray-500 mt-6">Cari dan pilih konselor yang cocok dan sesuai dengan permasalahanmu</h3>
    </figure>
</div>
<div class=" w-full">
  <div class="mt-10 mx-24">

    <h1 class="font-roboto font-semibold text-2xl mb-3">{{ $title }}</h1>
    <figure class="h-1 w-48 bg-blue-700 mb-5"></figure>
    {{-- Pencarian --}}
    <div class=" w-1/2 mb-5">
      <form class="flex items-center" action="/konselor">   
        <label for="simple-search" class="sr-only">Search</label>
        <div class="relative w-full"> 
            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
            </div>
            <input type="text" name="search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  " placeholder="Search" value = {{ request('search') }}>
        </div>
        <button type="submit" class="p-2.5 ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
            <span class="sr-only">Search</span>
        </button>
      </form>
    </div>
    @if ($konselor->count())
      <div class="grid grid-cols-3 gap-8 justify-items-center w-full">
    
      @foreach ($konselor as $item)

      <div class="h-auto w-75 rounded-3xl flex flex-col bg-white justify-start shadow-xl">
      
        @if ($item->image)
        <picture ><img class="rounded-t-3xl" src="{{ asset('storage/'.$item->image) }}" alt="" srcset=""></picture>
        @else
        <picture><img src="/asset/img/cardKonselor.png" alt="" srcset=""></picture>
        @endif
        
        <figure class="text-center font-roboto font-medium text-lg">
            {{ $item->name }}
        </figure>
        {{-- ?: Container Penanganan --}}
        <figure class="flex flex-col items-center h-44 w-full mt-3">
            <figcaption class="flex w-1/1.1 mb-2-">
                <h3 class="font-roboto font-medium text-lg">Fokus Penaganan masalah :</h3>
                
            </figcaption>
            <figcaption class="h-full w-1/1.2">
                <ul class="flex flex-col h-full w-full justify-evenly">
    
                    @if ($item->profile->penanganan_masalah)
                      @for ($j = 0; $j < count($masalah[$loop->index]); $j++)
                      <li class="flex" font-roboto=""><img class="mx-5 " src="/asset/icons/checklist.svg" alt="">{{   $masalah[$loop->index][$j]   }}</li>
                      @endfor
                    @else
                      <p>Tidak Ada</p>
                    @endif
                
                </ul>
            </figcaption>
        </figure>
        {{-- ?: Container Button --}}
        <figure class="flex w-full h-full items-center justify-center">
            <a href="/konselor/{{ $item->username }}">
              <figcaption class="flex items-center bg-blue-902 h-10 px-7 text-white rounded-lg hover:cursor-pointer">Lihat Profil Lengkap
              </figcaption>
            </a>
        </figure>
      </div>
          @endforeach
      </div>
      <div class="mb-4">
        {{ $konselor->links('pagination::tailwind') }}
      </div>  
    @else
    <div class="text-2xl mt-14 h-screen">
      Data Tidak Ditemukan
    </div>
    @endif    
  </div>  
  
</div>
@endsection


