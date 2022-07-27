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
      Profil
  </h1>
  <br>
  <ul class="text-2xl text-gray-800 dark:text-white">
    <li>Nama  : {{ $konselor->name}}</li>
    <li>Email : {{ $konselor->email }}</li>
    <li>Username : {{ $konselor->username }}</li>
  </ul>
  
  </div>
</div>
@endsection