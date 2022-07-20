<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
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
                    <h1 class="font-roboto font-medium pb-2 text-5xl">Login</h1>
                    <span class=" bg-gray-200 h-0.2 w-full"></span>
                </div>

                {{-- !: Form Login --}}
                <form action="" class="flex flex-col w-full h-full justify-evenly">
                    <div class="flex flex-col h-56 justify-evenly">
                        <section>
                            <legend class="font-poppins font-normal ">Username</legend>
                            <input type="text" name="" id="" placeholder="username"
                                class="border border-gray-300 shadow-md rounded-lg py-2 w-full px-6">
                        </section>
                        <section>
                            <legend class="font-poppins font-normal ">Password</legend>
                            <input type="password" name="" id="" placeholder="password"
                                class="border border-gray-300 shadow-md rounded-lg py-2 w-full px-6">
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


{{-- Modal  --}}
@if (session()->has('success'))
<div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="false">
    <div class="modal-dialog relative w-auto pointer-events-none">
        <div
        class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
        <div
        class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
        <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalLabel">Modal title</h5>
        <button type="button"
            class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
            data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body relative p-4">
        Modal body text goes here.
        </div>
        <div
        class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
        <button type="button" class="px-6
        py-2.5
            bg-purple-600
            text-white
            font-medium
            text-xs
            leading-tight
            uppercase
            rounded
            shadow-md
            hover:bg-purple-700 hover:shadow-lg
            focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0
            active:bg-purple-800 active:shadow-lg
            transition
            duration-150
            ease-in-out" data-bs-dismiss="modal">Close</button>
        <button type="button" class="px-6
        py-2.5
        bg-blue-600
        text-white
        font-medium
        text-xs
        leading-tight
        uppercase
        rounded
        shadow-md
        hover:bg-blue-700 hover:shadow-lg
        focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
        active:bg-blue-800 active:shadow-lg
        transition
        duration-150
        ease-in-out
        ml-1">Save changes</button>
            </div>
        </div>
    </div>
</div>
        @endif

</body>
</html>