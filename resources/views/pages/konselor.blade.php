
@extends('layouts.pages')

@section('container')
<div class="grid justify-items-center h-full w-full">
<div class="w-screen h-52 absolute -z-50">
    @include('/template/templateMain')
</div>
{{-- !: Caption --}}
<div class="w-screen h-52 flex items-center">
    <figure class="flex flex-col mx-4 laptop:ml-24">
        <h1 class="font-roboto font-semibold text-2xl">Pilih Konselor CareYou Yang Cocok Dengan Kamu</h1>
        <h3 class="font-poppins text-gray-500 mt-6">Cari dan pilih konselor yang cocok dan sesuai dengan permasalahanmu</h3>
    </figure>
</div>
<div class=" w-full">
  <div class="mt-10 mx-4 laptop:mx-24">

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
    <div class=" w-full h-fit justify-between mb-3 gap-2 hidden laptop:flex">
      <a class="block text-center text-white px-8 py-2 rounded-md  {{ Request::has('pendekatan') ? 'bg-gray-400' : 'bg-[#0661B0]' }}"  href="/konselor">
        semua
      </a>
      <a class="block text-center text-white px-8 py-2 rounded-md  {{ Request('pendekatan')=="Gestalt" ? 'bg-[#0661B0]' : 'bg-gray-400' }}"  
      href="/konselor?pendekatan=Gestalt">
        Gestalt
      </a>
      <a class="block text-center text-white px-8 py-2 rounded-md  {{ Request('pendekatan')=="REBT" ? 'bg-[#0661B0]' : 'bg-gray-400' }}"  
      href="/konselor?pendekatan=REBT">
        REBT
      </a>
      <a class="block text-center text-white px-8 py-2 rounded-md  {{ Request('pendekatan')=="Realitas" ? 'bg-[#0661B0]' : 'bg-gray-400' }}"  
      href="/konselor?pendekatan=Realitas">
        Realitas
      </a>
      <a class="block text-center text-white px-8 py-2 rounded-md  {{ Request('pendekatan')=="CBT" ? 'bg-[#0661B0]' : 'bg-gray-400' }}"  
      href="/konselor?pendekatan=CBT">
        CBT
      </a>
      <a class="block text-center text-white px-8 py-2 rounded-md  {{ Request('pendekatan')=="Behavoral" ? 'bg-[#0661B0]' : 'bg-gray-400' }}"  
      href="/konselor?pendekatan=Behavoral">
        Behavoral
      </a>
      <a class="block text-center text-white px-8 py-2 rounded-md  {{ Request('pendekatan')=="Konseling Islam" ? 'bg-[#0661B0]' : 'bg-gray-400' }}"  
      href="/konselor?pendekatan=Konseling Islam">
        Konseling Islam
      </a>
      <a class="block text-center text-white px-8 py-2 rounded-md  {{ Request('pendekatan')=="Person Center" ? 'bg-[#0661B0]' : 'bg-gray-400' }}"  
      href="/konselor?pendekatan=Person Center">
        Person Center
      </a>
    </div>
    @if ($konselor->count())
      <div class="grid laptop:grid-cols-4 tablet:grid-cols-2 gap-8 justify-items-center w-full">
      @foreach ($konselor as $item)
      <div class="w-full tablet:w-64 h-[400px] rounded-2xl overflow-hidden flex flex-col bg-white justify-start shadow-lg shadow-gray-300">
        @if ($item->image)
        <img class="object-cover w-full h-52" src="{{ asset('storage/'.$item->image) }}" alt="" srcset="">
        @else
        <img class="object-cover w-full h-52" src="/asset/img/cardKonselor.png" alt="" srcset="">
        @endif
        <figure class="text-center font-roboto font-medium text-lg mt-2">
            {{ $item->name }}
        </figure>
        {{-- ?: Container Penanganan --}}
        <figure class="flex flex-col items-center h-44 w-full mt-3">
            <figcaption class="flex w-1/1.1 mb-2-">
                <h3 class="font-roboto font-medium text-base">Penanganan masalah :</h3>
                
            </figcaption>
            <figcaption class="h-full w-1/1.2">
                <ul class="flex flex-col h-full w-full justify-evenly">
    
                    @if ($item->profile->penanganan_masalah)
                      @for ($j = 0; $j < count($masalah[$loop->index]); $j++)
                      <li class="flex" font-roboto=""><img class="mx-5" src="/asset/icons/checklist.svg" alt="">{{   $masalah[$loop->index][$j]   }}</li>
                      @endfor
                    @else
                      <p>Tidak Ada</p>
                    @endif
                
                </ul>
            </figcaption>
        </figure>
        {{-- ?: Container Button --}}
        <figure class="flex w-full items-center justify-center">
            <a href="/konselor/{{ $item->username }}" class="w-full">
              <figcaption class="bg-blue-902 w-full text-white py-2 hover:cursor-pointer text-center">Lihat Profil Lengkap
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


