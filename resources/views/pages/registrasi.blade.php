<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>CareYou | {{ $title }}</title>
</head>
<body>
    
<div class="grid grid-cols-7 w-screen h-screen">
    {{-- ?: CareYou  Container --}}
    <div class="bg-blue-901 relative col-span-3">
        <div class="flex justify-between flex-col h-32 w-96 absolute top-44 left-16">
            <img src="/asset/logo_blue.svg" alt="LogoCareYou" class="w-48 h-16">
            <p class="font-poppins font-normal text-gray-901 text-lg">Care about your mental health</p>
        </div>
        <img src="/asset/theme/Ellipse1.svg" alt="" srcset="" class=" absolute right-0">
        <img src="/asset/theme/Ellipse2.svg" alt="" srcset="" class=" absolute left-0 bottom-0">

    </div>
    {{-- ?: Register Container --}}
    <div class="flex justify-center items-center col-span-4">
        <div class=" w-95 h-102 rounded-lg shadow-lg shadow-gray-600/20">
            <div class=" w-full h-full justify-center">
                <div class=" w-full h-full justify-center p-5">
                    <form class="w-full h-full" method="post" action="/registrasi">
                        @csrf
                        <div class="border-b-2 border-gray-100 mt-3">
                            <h1 class="font-roboto text-4xl text-center mb-1">Buat Akun</h1>
                        </div>
                        <div class="grid grid-cols-6 content-between gap-3 mt-5 w-full h-96">
                            <div class="col-span-3">
                                <label for="nama" class="block text-sm font-poppins font-normal text-gray-700 ">Nama</label>
                                <input type="text" name="name" placeholder="nama" id="name" autocomplete="name" class=" mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
                                focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500" required value = {{ old('name') }}>
                                @error('name')
                                    <p class="block text-xs font-poppins font-normal text-pink-700 " style="margin-bottom: -20px">{{ $message }}</p>
                                @enderror
                            </div>
                                
                            <div class="col-span-3">
                                <label for="username" class="block  text-sm font-poppins font-normal text-gray-700 ">Username</label>
                                <input type="text" name="username" placeholder="username" id="username" autocomplete="username" class=" mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
                                focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500" required value = {{ old('username') }}>
                                @error('username')
                                    <p class="block text-xs font-poppins font-normal text-pink-700 " style="margin-bottom: -20px ">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-span-6">
                                <label for="email" class="block  text-sm font-poppins font-normal text-gray-700">Email</label>
                                <input type="email" name="email" placeholder="email" id="email" autocomplete="email" class=" mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
                                focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500 " required value = {{ old('email') }}>
                                @error('email')
                                    <p class="block text-xs font-poppins font-normal text-pink-700 " style="margin-bottom: -20px ">{{ $message }}</p>
                                @enderror 
                            </div>
                            <div class="col-span-6">
                                <label for="password" class="block  text-sm font-poppins font-normal text-gray-700">password</label>
                                <input type="password" name="password" placeholder="password" id="password" autocomplete="password" class=" mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
                                focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500 " required value = {{ old('password') }}>
                                @error('password')
                                    <p class="block text-xs font-poppins font-normal text-pink-700 " style="margin-bottom: -20px ">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="grid col-start-2 col-span-4 text-center justify-items-center">
                                <button type="submit" class=" text-sm mt-1 block w-full shadow-sm border-2 bg-blue-902 rounded-xl py-3 font-poppins text-white">
                                    Buat Akun
                                </button>

                                <strong class=" text-sm font-medium font-poppins text-gray-700">Sudah memiliki akun? <a href="/login" class="text-blue-600">Login</a> sekarang</strong>
                            </div>
                        </div>
                        
                    </form>
                    
                </div>

            </div>

        </div>
    </div>
</div>

</body>
</html>