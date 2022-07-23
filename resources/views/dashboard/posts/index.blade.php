@extends('layouts/dashboard')

@section('dashboard')
<div class="overflow-auto h-screen pb-24 px-4 md:px-6">
  <h1 class="text-4xl  font-semibold text-gray-800 dark:text-white">
      Artikel
  </h1>
  <br>
  <a href="/dashboard/posts/create" class="bg-blue-500 hover:bg-blue-700  text-white py-1 px-2 rounded-sm">Tambah post baru</a>
  <div class="mt-4 w-full h-full">
    <table class="table-auto w-1/2 border-collapse border border-slate-400">
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
              <button class="bg-green-500 hover:bg-green-700  text-white py-1 px-2 rounded-md">Show</button>
            </a>
          </td>
        </tr>
        @endforeach
        
      </tbody>
    </table>
  </div>
</div>
@endsection