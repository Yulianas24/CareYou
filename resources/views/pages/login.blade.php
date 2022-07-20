@extends('/layouts/main')

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
                <div class="flex w-full h-full flex-col items-center justify-center">
                    <h1 class="font-roboto font-medium pb-2 text-5xl">Login</h1>
                    <span class=" bg-gray-300 h-0.2 w-full"></span>
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
                                href="#" class="text-blue-601">Buat akun
                            </a>sekarang</strong>
                    </section>
                </form>
            </div>
        </div>
    </div>
</div>
