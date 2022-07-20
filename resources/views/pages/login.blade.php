@extends('/layouts/main')

<div class="grid grid-cols-2 w-screen h-screen">
    {{-- ?: CareYou  Container --}}
    <div class="bg-blue-901 flex relative">
        <div class="flex justify-between flex-col h-32 w-96 absolute top-44 left-16 ">
            <img src="/asset/logo.svg" alt="LogoCareYou" class="w-48 h-16">
            <p class="font-poppins font-normal text-gray-901 text-lg">Care about your mental health</p>
        </div>
        <img src="/asset/theme/Ellipse1.svg" alt="" srcset="" class="w-75 h-75 absolute right-0">
        <img src="/asset/theme/Ellipse2.svg" alt="" srcset="" class="w-75 h-75 absolute left-0 bottom-0">

    </div>
    {{-- ?: Login Container --}}
    <div class="flex justify-center items-center">
        <div class="flex w-95 h-102 rounded-lg shadow-lg shadow-gray-600/20">
            <div class="flex w-full h-full justify-center">
                <div class="flex flex-col justify-center">
                    <h1 class="font-roboto text-5xl">Login</h1>
                    <span class="text-gray-500 h-1 w-full"></span>
                </div>

            </div>

        </div>
    </div>
</div>
