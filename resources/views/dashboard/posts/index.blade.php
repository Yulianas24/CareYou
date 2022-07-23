@extends('layouts/dashboard')

@section('dashboard')
<div class="overflow-auto h-screen pb-24 px-4 md:px-6">
  <h1 class="text-4xl font-semibold text-gray-800 dark:text-white">
      My Post, {{ auth()->user()-> name}}
  </h1>
  <div class="mt-4 w-full h-full">
    <table class="table-auto w-full border-collapse border border-slate-400">
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
        <tr>
          <td class="border border-slate-300 p-1">{{ $loop->iteration }}</td>
          <td class="border border-slate-300 p-1">{{ $post->title }}</td>
          <td class="border border-slate-300 p-1">{{ $post->category->name }}</td>
          <td class="border border-slate-300 p-1">
            <a href="/dashboard/posts/{{ $post->id }}">show</a>
            <a href="#{{ $post->id }}">edit</a>
          </td>
        </tr>
        @endforeach
        
      </tbody>
    </table>
  </div>
</div>
@endsection