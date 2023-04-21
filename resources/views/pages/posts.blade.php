
@extends('layouts.pages')

@section('container')
<div class="grid justify-items-center h-full w-full">
  
  <h1 class="text-3xl py-2">{{ $title }}</h1>
  {{-- Pencarian --}}
  <div class=" w-1/2">
  <form class="flex items-center" action="/posts">   
    @if (request('category'))
        <input type="hidden" name="category" value="{{ request('category') }}">
    @endif
    @if (request('user'))
        <input type="hidden" name="user" value="{{ request('user') }}">
    @endif
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
  @if ($posts->count())
    <div class=" justify-items-center w-full tablet:px-20">
    @foreach ($posts as $item)
        <div class="flex transition-duration: 150ms w-full rounded overflow-hidden bg-gray-100 hover:bg-gray-200 my-5 shadow-lg hover:shadow-xl">
          <div class="flex-none tablet:w-[300px]">
              
            @if ($item->image)
            <a href="/posts/{{ $item -> slug }}">
              <img class="object-cover w-full tablet:h-60 " src="{{ asset('storage/' . $item->image) }}" alt="Sunset in the mountains">
            </a>
            @else          
            <a href="/posts/{{ $item -> slug }}">
              <img class="object-cover w-full desktop:h-60 " src="\asset\img\Image_not_available.jpg" alt="Sunset in the mountains">
            </a>
            @endif
          </div>

          <div class="px-6 py-1">
            <span class="text-xs text-gray-500 italic">posted {{ $item->created_at->diffForHumans() }}</span></p>

            <div class="font-bold text-xl mb-2"><a href="/posts/{{ $item -> slug }}">{{ $item -> title }}</a></div>
            <p>By. <a class="text-blue-800 font-semibold" href="/posts?user={{ $item -> user -> username }}">{{ $item->user->username }}</a> in <a class="text-blue-800 font-semibold" href="/posts?category={{ $item -> category -> slug }}">{{ $item->category->name }}</a>
      

            <p class="text-gray-700 text-base">
              {{ $item -> excerpt }}
            </p>
          </div>
          <div class="px-6  pb-2">
            <a href="/posts/{{ $item -> slug }}" class="inline-block bg-gray-200 hover:bg-gray-300 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2 hover:cursor-pointer">Read more</a>
            
          </div>
        </div>
        @endforeach
    </div>
    <div class="mb-4">
      {{ $posts->links('pagination::tailwind') }}
    </div>  
  @else
  <div class="text-2xl mt-14 h-screen">
    Data Tidak Ditemukan
  </div>
  @endif    
  

  
</div>
@endsection


