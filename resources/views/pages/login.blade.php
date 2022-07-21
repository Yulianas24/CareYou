<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>{{ $title }}</title>
</head>
<body>
    
<div class="grid grid-cols-7 w-screen h-screen">
    
    {{-- ?: CareYou  Container --}}
    <div class="bg-blue-901 flex relative col-span-3">
        <div class="flex justify-between flex-col h-32 w-96 absolute top-44 left-16 ">
            <img src="/asset/logo.svg" alt="LogoCareYou" class="w-48 h-16">
            <p class="font-poppins font-normal text-gray-901 text-lg">Care about your mental health</p>
        </div>
        <img src="/asset/theme/Ellipse1.svg" alt="" srcset="" class="absolute right-0">
        <img src="/asset/theme/Ellipse2.svg" alt="" srcset="" class="absolute left-0 bottom-0">

    </div>
    {{-- ?: Login Container --}}
    <div class="flex justify-center items-center col-span-4">
        
        <div class="flex w-95 h-102 rounded-lg shadow-lg shadow-gray-600/20">
            <div class="flex flex-col w-full h-full p-8 justify-between">
                <div class="flex w-full h-full flex-col items-center justify-center ">

                    {{-- alert registrasi berhasil --}}
                    @if (session()->has('success'))  
                    <div id="id01" class="alert bg-green-200 rounded-md py-2 px-6  text-base text-green-800 inline-flex items-center w-full alert-dismissible fade show" role="alert">
                       
                        <p>Registrasi berhasil!!</p>
                        <button type="button" class=" w-7 h-7 ml-auto text-green-800 border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-yellow-900 hover:opacity-75 hover:no-underline" data-bs-dismiss="alert" aria-label="Close"> <span onclick="document.getElementById('id01').style.display='none'"> &times;</button>
                      </div>
                    @endif
                    

                    @if (session()->has('loginError'))  
                    <div id="id01" class="alert bg-red-200 rounded-md py-2 px-6  text-base text-red-800 inline-flex items-center w-full alert-dismissible fade show" role="alert">
                       
                        <p>Login gagal !</p>
                        <button type="button" class=" w-7 h-7 ml-auto text-red-800 border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-yellow-900 hover:opacity-75 hover:no-underline" data-bs-dismiss="alert" aria-label="Close"> <span onclick="document.getElementById('id01').style.display='none'"> &times;</button>
                      </div>
                    @endif

                    <h1 class="font-roboto font-medium pb-2 text-5xl">Login</h1>
                    <span class=" bg-gray-200 h-0.2 w-full"></span>
                </div>

                {{-- !: Form Login --}}
                <form action="/login" method='post' class="flex flex-col w-full h-full justify-evenly">
                    @csrf
                    <div class="flex flex-col h-56 justify-evenly">
                        <section>
                            <legend class="font-poppins font-normal ">Username</legend>
                            <input type="text" name="username" id="username" placeholder="username"
                                class="border border-gray-300 shadow-md rounded-lg py-2 w-full px-6 focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500 @error('username')  
                                border-pink-500 
                                focus:border-pink-500 focus:ring-pink-500 placeholder:text-pink-500
                                @enderror" required>
                            @error('username')
                                <p class="block text-xs font-poppins font-normal text-pink-700 ">{{ $message }}</p>
                            @enderror
                        </section>
                        <section>
                            <legend class="font-poppins font-normal ">Password</legend>
                            <input type="password" name="password" id="password" placeholder="password"
                                class="border border-gray-300 shadow-md rounded-lg py-2 w-full px-6 focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500 @error('password')  
                                border-pink-500 
                                focus:border-pink-500 focus:ring-pink-500 placeholder:text-pink-500
                                @enderror" required>
                                @error('password')
                                <p class="block text-xs font-poppins font-normal text-pink-700 ">{{ $message }}</p>
                            @enderror
                        </section>
                        <strong class="font-poppins text-blue-601 font-normal text-sm">Lupa Password?</strong>
                    </div>
                    <section class="flex flex-col justify-evenly h-20">
                        <button type="submit"
                            class="bg-blue-902 py-2 px-6 mx-10 rounded-lg text-white font-poppins">Login</button>
                        <strong class="text-center font-poppins font-normal text-base">Belum Punya Akun? <a
                                href="/registrasi" class="text-blue-601">Buat akun
                            </a>sekarang</strong>
                    </section>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>