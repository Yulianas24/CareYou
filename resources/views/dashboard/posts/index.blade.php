@extends('layouts/dashboard')
@section('dashboard')
<div class="overflow-auto h-screen  px-4 md:px-6">
  @if (session()->has('success'))  
  <div id="id01" class="alert w-3/4 bg-green-200 rounded-md py-2 px-6  text-base text-green-800 inline-flex items-center alert-dismissible fade show" role="alert">
      <p>{{ session('success') }}</p>
      <button type="button" class=" w-7 h-7 ml-auto text-green-800 border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-yellow-900 hover:opacity-75 hover:no-underline" data-bs-dismiss="alert" aria-label="Close"> <span onclick="document.getElementById('id01').style.display='none'"> &times;</button>
  </div>
  
  @endif
  @if (session()->has('error'))  
  <div id="id01" class="alert w-3/4 bg-red-200 rounded-md py-2 px-6  text-base text-green-red inline-flex items-center alert-dismissible fade show" role="alert">
  
      <p>{{ session('error') }}</p>
      <button type="button" class=" w-7 h-7 ml-auto text-red-800 border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-yellow-900 hover:opacity-75 hover:no-underline" data-bs-dismiss="alert" aria-label="Close"> <span onclick="document.getElementById('id01').style.display='none'"> &times;</button>
  </div>
  
  @endif
  <h1 class="text-4xl  font-semibold text-gray-800 dark:text-white">
      Artikel
  </h1>
  
  <br>
  <a href="/dashboard/posts/create" class="bg-blue-500 hover:bg-blue-700  text-white py-1 px-2 rounded-md">Tambah post baru</a>
  <div class="mt-4 w-full h-auto">
    <table class="table-auto w-full  dark:text-white">
      <thead>
        <tr class="border-b border-gray-500">
          <th class="phone:hidden tablet:block p-1 w-10" scope="col">No</th>
          <th class=" p-1 text-left" scope="col">Title</th>
          <th class=" p-1 w-48 text-left" scope="col">Category</th>
          <th class=" p-1  w-52" scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($posts as $post)
        <tr class="border-b border-gray-600 ">
          <td class="phone:hidden tablet:block py-2 text-center">{{ $loop->iteration }}</td>
          <td class="py-2">{{ $post->title }}</td>
          <td class="py-2">{{ $post->category->name }}</td>
          <td class="py-2 text-center tablet:w-75 ">
            <a href="/dashboard/posts/{{ $post->slug }}" >
              <button class="bg-green-500 hover:bg-green-700  text-white py-1 w-20 rounded-sm">Show</button>
            </a>
            <a href="/dashboard/posts/{{ $post->slug }}/edit" >
              <button class="bg-yellow-500 hover:bg-yellow-700  text-white py-1 w-20 rounded-sm">Edit</button>
            </a>
            <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="inline-flex">
              @method('delete')
              @csrf
              <button type="submit" class="bg-red-500 hover:bg-red-700  text-white py-1 w-20 rounded-sm" onclick="return confirm('Apakah anda yakin?')">Delete</button>
            </form>
            
          </td>
        </tr>
        @endforeach
        
        
      </tbody>
    </table>
    <br>
    <div>
      {{ $posts->links('pagination::tailwind') }}
    </div>
    {{-- 
    {{ $posts->onEachSide(5)->links() }} --}}
  </div>
</div>
@endsection