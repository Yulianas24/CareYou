<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>CareYou | {{ $title }}</title>
</head>

<body>

<div class="grid w-screen h-screen justify-items-center content-center">
  <div class="w-1/3 h-auto border-gray-100 shadow-lg -mt-36">
    <div class="w-full bg-gray-100 border-gray-100 p-1">
      <h1 class="block  text-base ml-5  font-poppins font-normal text-gray-700">Ubah Password</h1>
    </div>
    <div class="p-5">
      <form action="/ubahPassword" method="post">
        @csrf
        <div class="">
          <label for="password"
              class="block  text-sm font-poppins font-normal text-gray-700">password lama</label>
          <input type="password" name="password" placeholder="password lama"
              class=" mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
              focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500 "
              required>
            @if (session()->has('error'))
                <p class="block text-xs font-poppins font-normal text-pink-700 ">{{ session('error') }}</p>  
            @endif
        </div>

        <div class="mt-5">
          <label for="password"
              class="block  text-sm font-poppins font-normal text-gray-700">password baru</label>
          <input type="password" name="password_baru" placeholder="password baru"
              class=" mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
              focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500 "
              required>
            @error('password_baru')
                <p class="block text-xs font-poppins font-normal text-pink-700">{{ $message }}</p>
            @enderror
        </div>

        <div class="my-5 ">
          <label for="password"
              class="block  text-sm font-poppins font-normal text-gray-700">ulang password baru</label>
          <input type="password" name="ulang_password" placeholder="ulang password"
              class=" mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
              focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500 "
              required>
            @error('ubah_password')
                <p class="block text-xs font-poppins font-normal text-pink-700">{{ $message }}</p>
            @enderror
            @if (session()->has('error2'))
                <p class="block text-xs font-poppins font-normal text-pink-700">{{ session('error2') }}</p>  
            @endif
            <button type="submit"
            class="bg-blue-902 py-2 mb-5 px-6 mt-5 truncate rounded-lg text-white font-poppins laptop:mb-0">
            Ubah Password
        </button>
        </div>
        
      </form>
    </div>
  </div>
</div>

</body>

</html>
