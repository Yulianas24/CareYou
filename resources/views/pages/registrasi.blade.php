<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>CareYou | {{ $title }}</title>
</head>

<body class="">

    <div
        class="flex flex-col justify-center p-2 w-screen min-h-screen tablet:p-0 laptop:grid laptop:grid-cols-7 laptop:grid-rows-none">
        {{-- ?: CareYou  Container --}}
        <div class="laptop:col-span-3 laptop:bg-blue-901 laptop:relative">
            <div
                class="flex justify-between mb-12 px-8
            flex-col laptop:px-0 laptop:mb-0 laptop:h-32 laptop:absolute laptop:top-44 laptop:left-16">
                <picture>
                    <source media="(min-width:1024px)" srcset="/asset/logo_blue.svg">
                    <source media="(min-width:320px)" srcset="/asset/mainLogo.svg">
                    <img src="/asset/logo.svg" alt="LogoCareYou" class="h-14 laptop:h-16">
                </picture>
                <p class="font-poppins font-normal text-gray-901 text-lg">Care about your mental health</p>
            </div>
            <img src="/asset/theme/Ellipse1.svg" alt="" srcset=""
                class="hidden laptop:block laptop:absolute laptop:right-0">
            <img src="/asset/theme/Ellipse2.svg" alt="" srcset=""
                class="hidden laptop:block laptop:absolute laptop:left-0 laptop:bottom-0">

        </div>
        {{-- ?: Register Container --}}
        <div class="flex justify-center items-center col-span-4">
            <div class=" flex w-95 h-102 rounded-lg shadow-lg shadow-gray-600/20">
                <div class=" w-full h-full justify-center">
                    <div class=" w-full h-full justify-center p-5">
                        <form class="w-full h-full" method="post" action="/registrasi">
                            @csrf
                            <div class="border-b-2 border-gray-100 mt-3">
                                <h1 class="font-roboto font-medium text-center text-4xl laptop:text-5xl laptop:pb-2">
                                    Buat Akun</h1>
                            </div>
                            <div class="grid grid-cols-6 content-between laptop:content-evenly gap-3 mt-5 w-full h-96">
                                <div class="col-span-3">
                                    <label for="nama"
                                        class="block text-sm font-poppins font-normal text-gray-700 ">Nama</label>
                                    <input type="text" name="name" placeholder="nama" id="name"
                                        autocomplete="name"
                                        class=" mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
                                focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500"
                                        required value={{ old('name') }}>
                                    @error('name')
                                        <p class="block text-xs font-poppins font-normal text-pink-700 "
                                            style="margin-bottom: -20px">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="col-span-3">
                                    <label for="username"
                                        class="block  text-sm font-poppins font-normal text-gray-700 ">Username</label>
                                    <input type="text" name="username" placeholder="username" id="username"
                                        autocomplete="username"
                                        class=" mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
                                focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500"
                                        required value={{ old('username') }}>
                                    @error('username')
                                        <p class="block text-xs font-poppins font-normal text-pink-700 "
                                            style="margin-bottom: -20px ">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-span-6">
                                    <label for="email"
                                        class="block  text-sm font-poppins font-normal text-gray-700">Email</label>
                                    <input type="email" name="email" placeholder="email" id="email"
                                        autocomplete="email"
                                        class=" mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
                                focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500 "
                                        required value={{ old('email') }}>
                                    @error('email')
                                        <p class="block text-xs font-poppins font-normal text-pink-700 "
                                            style="margin-bottom: -20px ">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-span-3">
                                    <label for="password"
                                        class="block  text-sm font-poppins font-normal text-gray-700">password</label>
                                    <input type="password" name="password" placeholder="password" id="password"
                                        autocomplete="password"
                                        class=" mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
                                focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500 "
                                        required value={{ old('password') }}>
                                    @error('password')
                                        <p class="block text-xs font-poppins font-normal text-pink-700 "
                                            style="margin-bottom: -20px ">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-span-3">
                                    <label for="level"
                                        class="block  text-sm font-poppins font-normal text-gray-700">Daftar
                                        sebagai</label>
                                    <select name="level"
                                        class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
                                focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500 ">
                                        <option value="konseli" selected>Konseli</option>
                                        <option value="konselor">Konselor</option>
                                    </select>
                                </div>

                                <div class="grid col-start-2 col-span-4 text-center justify-items-center">
                                    <button type="submit"
                                        class="bg-blue-902 py-2 mb-5 px-6 mx-10 truncate rounded-lg text-white font-poppins laptop:mb-0">
                                        Buat Akun
                                    </button>

                                    <strong
                                        class="text-center font-poppins font-normal text-sm truncate laptop:pt-2">Sudah
                                        memiliki akun?
                                        <a href="/login" class="text-blue-600">Login</a> sekarang</strong>
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
