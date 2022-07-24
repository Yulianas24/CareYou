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
      Artikel
  </h1>
  
  <br>
  <a href="/dashboard/posts/create" class="bg-blue-500 hover:bg-blue-700  text-white py-1 px-2 rounded-md">Tambah post baru</a>
  <div class="mt-4 w-full h-full">
    <table class="table-auto w-3/4 border-collapse border border-slate-400 dark:text-white">
      <thead>
        <tr>
          <th class="border border-slate-300 p-1" scope="col">No</th>
          <th class="border border-slate-300 p-1" scope="col">Title</th>
          <th class="border border-slate-300 p-1" scope="col">Category</th>
          <th class="border border-slate-300 p-1" scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($posts as $post)
        <tr class="">
          <td class="border border-slate-300 p-1 text-center">{{ $loop->iteration }}</td>
          <td class="border border-slate-300 p-1">{{ $post->title }}</td>
          <td class="border border-slate-300 p-1">{{ $post->category->name }}</td>
          <td class="border border-slate-300 p-1 text-center">
            <a href="/dashboard/posts/{{ $post->slug }}" >
              <button class="bg-green-500 hover:bg-green-700  text-white py-1 px-2 rounded-sm">Show</button>
            </a>
            <a href="/dashboard/posts/{{ $post->slug }}/edit" >
              <button class="bg-yellow-500 hover:bg-yellow-700  text-white py-1 px-2 rounded-sm">Edit</button>
            </a>
            <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="inline-flex">
              @method('delete')
              @csrf
              <button type="submit" class="bg-red-500 hover:bg-red-700  text-white py-1 px-2 rounded-sm" onclick="return confirm('Apakah anda yakin?')">Delete</button>
            </form>
            
          </td>
        </tr>
        @endforeach
        
      </tbody>
    </table>
  </div>
</div>
@endsection