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

    <div
        class="flex flex-col justify-center p-2 w-screen h-screen tablet:p-0 laptop:grid laptop:grid-cols-7 laptop:grid-rows-none">

        {{-- ?: CareYou  Container --}}
        <div class="laptop:col-span-3 laptop:bg-blue-901 laptop:relative">
            <div
                class="flex justify-between mb-12 px-8
                 flex-col laptop:px-0 laptop:mb-0 laptop:h-32 laptop:absolute laptop:top-44 laptop:left-16">
                <picture>
                    <source media="(min-width:1024px)" srcset="/asset/logo.svg">
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
        {{-- ?: Login Container --}}
        <div class="flex justify-center items-center laptop:col-span-4">
            <div class="flex w-1/1.1 h-102 rounded-lg shadow-lg shadow-gray-600/20 laptop:h-102 laptop:w-95">
                <div class="flex flex-col w-full h-full p-5 justify-between laptop:p-8">
                    <div class="flex w-full flex-col items-center justify-center ">

                        {{-- todo: alert registrasi berhasil --}}
                        @if (session()->has('success'))
                            <div id="id01"
                                class="alert bg-green-200 rounded-md py-2 px-6  text-base text-green-800 inline-flex items-center w-full alert-dismissible fade show"
                                role="alert">

                                <p>Registrasi berhasil!!</p>
                                <button type="button"
                                    class=" w-7 h-7 ml-auto text-green-800 border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-yellow-900 hover:opacity-75 hover:no-underline"
                                    data-bs-dismiss="alert" aria-label="Close"> <span
                                        onclick="document.getElementById('id01').style.display='none'"> &times;</button>
                            </div>
                        @endif
                        {{-- todo: Validation Login --}}
                        @if (session()->has('loginError'))
                            <div id="id01"
                                class="alert bg-red-200 rounded-md py-2 px-6  text-base text-red-800 inline-flex items-center w-full alert-dismissible fade show"
                                role="alert">
                                <p>Login gagal !</p>
                                <button type="button"
                                    class=" w-7 h-7 ml-auto text-red-800 border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-yellow-900 hover:opacity-75 hover:no-underline"
                                    data-bs-dismiss="alert" aria-label="Close"> <span
                                        onclick="document.getElementById('id01').style.display='none'"> &times;</button>
                            </div>
                        @endif

                        <h1 class="font-roboto font-medium text-4xl laptop:text-5xl laptop:pb-2">Login</h1>
                        <span class=" bg-gray-200 h-0.2 w-full"></span>
                    </div>

                    {{-- !: Form Login --}}
                    <form action="/login" method='post' class="flex flex-col w-full h-full justify-evenly">
                        @csrf
                        <div class="flex flex-col h-64 justify-center laptop:h-56 laptop:justify-evenly">
                            {{-- todo:  Input Username --}}
                            <section class="py-4 tablet:py-8 laptop:py-0">
                                <legend class="font-poppins font-normal ">Username</legend>
                                <input type="text" name="username" id="username" placeholder="username"
                                    class="border border-gray-300 shadow-md rounded-lg py-2 w-full px-6 focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500 "
                                    required>
                                {{-- !: Error Username --}}
                                @error('username')
                                    <p class="block text-xs font-poppins font-normal text-pink-700 ">{{ $message }}</p>
                                @enderror
                            </section>
                            {{-- todo:  Input Password --}}
                            <section class="py-4 tablet:py-0">
                                <legend class="font-poppins font-normal ">Password</legend>
                                <input type="password" name="password" id="password" placeholder="password"
                                    class="border border-gray-300 shadow-md rounded-lg py-2 w-full px-6 focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500 "
                                    required>
                                {{-- !: Error Password --}}
                                @error('password')
                                    <p class="block text-xs font-poppins font-normal text-pink-700 ">{{ $message }}</p>
                                @enderror
                            </section>
                            {{-- todo:  Lupa Password --}}
                            <strong class="font-poppins text-blue-601 font-normal text-sm tablet:mt-4 laptop:mt-0">Lupa
                                Password?</strong>
                        </div>
                        <section class="flex flex-col justify-evenly h-20">
                            <button type="submit"
                                class="bg-blue-902 py-2 mb-5 px-6 mx-10 rounded-lg text-white font-poppins laptop:mb-0">Login</button>
                            <strong class="text-center font-poppins font-normal  text-sm tablet:text-base">Belum Punya
                                Akun? <a href="/registrasi" class="text-blue-601">Buat akun
                                </a>sekarang</strong>
                        </section>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
