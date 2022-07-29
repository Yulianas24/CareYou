<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    {{-- Trix Editor --}}
    <link rel="stylesheet" type="text/css" href="/css/trix.css">
    <script type="text/javascript" src="/js/trix.js"></script>
    <title>Dashboard</title>

    <style>
        trix-toolbar [data-trix-button-group = file-tools]{
            display: none;
        }
    </style>
</head>
<body>
    
<main class="bg-gray-100 dark:bg-gray-800 h-screeen  overflow-hidden relative">
    <div class=" flex items-start justify-between">

        {{-- Sidebar --}}
        <div class="fixed h-screen z-40 hidden lg:block shadow-lg w-64">
            <div class="bg-white h-full dark:bg-gray-700">
                <div class="flex items-center justify-start pt-6 ml-8">
                    <p class="font-bold dark:text-white text-xl">
                        CareYou
                    </p>
                </div>
                <nav class="mt-6">
                    <div>
                        {{-- Home --}}
                        <a class="w-full  flex items-center pl-6 p-2 my-2 transition-colors duration-200 justify-start border-l-4 {{ Request::is('dashboard') ? 'border-purple-500 text-gray-800 dark:text-white' : 'border-transparent text-gray-400 hover:text-gray-800' }}" href="/dashboard">
                            <span class="text-left">
                                <svg width="20" height="20" fill="currentColor" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1472 992v480q0 26-19 45t-45 19h-384v-384h-256v384h-384q-26 0-45-19t-19-45v-480q0-1 .5-3t.5-3l575-474 575 474q1 2 1 6zm223-69l-62 74q-8 9-21 11h-3q-13 0-21-7l-692-577-692 577q-12 8-24 7-13-2-21-11l-62-74q-8-10-7-23.5t11-21.5l719-599q32-26 76-26t76 26l244 204v-195q0-14 9-23t23-9h192q14 0 23 9t9 23v408l219 182q10 8 11 21.5t-7 23.5z">
                                    </path>
                                </svg>
                            </span>
                            <span class="mx-2 text-sm font-normal">
                                Beranda
                            </span>
                        </a>
                        {{-- Posts --}}
                        <a class="w-full  flex items-center pl-6 p-2 my-2 transition-colors duration-200 justify-start  border-l-4 {{ Request::is('dashboard/posts*') ? 'border-purple-500 text-gray-800 dark:text-white' : 'border-transparent text-gray-400 hover:text-gray-800' }}" href="/dashboard/posts">
                            <span class="text-left">
                                <svg width="20" height="20" fill="currentColor" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1728 608v704q0 92-66 158t-158 66h-1216q-92 0-158-66t-66-158v-960q0-92 66-158t158-66h320q92 0 158 66t66 158v32h672q92 0 158 66t66 158z">
                                    </path>
                                </svg>
                            </span>
                            <span class="mx-4 text-sm font-normal">
                            Artikel
                            </span>
                        </a>
                        {{-- Jadwal --}}
                        <a class="w-full  flex items-center pl-6 p-2 my-2 transition-colors duration-200 justify-start  border-l-4 {{ Request::is('dashboard/jadwal*') ? 'border-purple-500 text-gray-800 dark:text-white' : 'border-transparent text-gray-400 hover:text-gray-800' }}" href="/dashboard/jadwal">
                            <span class="text-left">
                                <svg width="20" height="20" fill="currentColor" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1070 1178l306-564h-654l-306 564h654zm722-282q0 182-71 348t-191 286-286 191-348 71-348-71-286-191-191-286-71-348 71-348 191-286 286-191 348-71 348 71 286 191 191 286 71 348z">
                                    </path>
                                </svg>
                            </span>
                            <span class="mx-2 text-sm font-normal">
                                Jadwal
                                
                            </span>
                        </a>
                        
                        {{-- Profil --}}
                        <a class="w-full  flex items-center pl-6 p-2 my-2 transition-colors duration-200 justify-start  border-l-4 {{ Request::is('dashboard/profil*') ? 'border-purple-500 text-gray-800 dark:text-white' : 'border-transparent text-gray-400 hover:text-gray-800' }}" href="/dashboard/profil">
                            <span class="text-left">
                                <svg width="20" height="20" fill="currentColor" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M528 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h480c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zm-352 96c35.3 0 64 28.7 64 64s-28.7 64-64 64-64-28.7-64-64 28.7-64 64-64zm112 236.8c0 10.6-10 19.2-22.4 19.2H86.4C74 384 64 375.4 64 364.8v-19.2c0-31.8 30.1-57.6 67.2-57.6h5c12.3 5.1 25.7 8 39.8 8s27.6-2.9 39.8-8h5c37.1 0 67.2 25.8 67.2 57.6v19.2zM512 312c0 4.4-3.6 8-8 8H360c-4.4 0-8-3.6-8-8v-16c0-4.4 3.6-8 8-8h144c4.4 0 8 3.6 8 8v16zm0-64c0 4.4-3.6 8-8 8H360c-4.4 0-8-3.6-8-8v-16c0-4.4 3.6-8 8-8h144c4.4 0 8 3.6 8 8v16zm0-64c0 4.4-3.6 8-8 8H360c-4.4 0-8-3.6-8-8v-16c0-4.4 3.6-8 8-8h144c4.4 0 8 3.6 8 8v16z"/></svg>
                                
                            </span>
                            
                            <span class="mx-4 text-sm font-normal">
                                Profil
                            </span>
                        </a>

                        
                    </div>
                </nav>
            </div>
        </div>
        {{-- end of Sidebar --}}
        
        <div class="flex flex-col w-full md:space-y-4">

            {{-- navbar --}}
            <header class=" w-full h-16 z-30 dark:bg-gray-800 border-b border-gray-700 flex items-center justify-between pb-2">
                <div class="block lg:hidden ml-6">
                    <button class="flex p-2 items-center rounded-full bg-white shadow text-gray-500 text-md">
                        <svg width="20" height="20" class="text-gray-400" fill="currentColor" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1664 1344v128q0 26-19 45t-45 19h-1408q-26 0-45-19t-19-45v-128q0-26 19-45t45-19h1408q26 0 45 19t19 45zm0-512v128q0 26-19 45t-45 19h-1408q-26 0-45-19t-19-45v-128q0-26 19-45t45-19h1408q26 0 45 19t19 45zm0-512v128q0 26-19 45t-45 19h-1408q-26 0-45-19t-19-45v-128q0-26 19-45t45-19h1408q26 0 45 19t19 45z">
                            </path>
                        </svg>
                    </button>
                </div>

                <div class="relative z-20 flex flex-col justify-end h-full px-3 md:w-full">
                    <div class="relative p-1 flex items-center w-full space-x-4 justify-end">
                    

                        <a href="#" class="peer block relative">
                            @if (auth()->user()->image)
                            <img alt="profil" src="{{ asset('storage/'. auth()->user()->image) }}" class="mx-auto object-cover rounded-full h-10 w-10 " />  
                            @else
                            <img alt="profil" src="/asset/logo_blue.svg" class="mx-auto object-cover rounded-full h-10 w-10 " />
                            @endif
                        </a>                    
                        <button type="submit" class="peer flex items-center text-gray-500 dark:text-white text-md ">
                            {{ auth()->user()->username }}
                            <svg width="20" height="20" class="ml-2 text-gray-400" fill="currentColor" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1408 704q0 26-19 45l-448 448q-19 19-45 19t-45-19l-448-448q-19-19-19-45t19-45 45-19h896q26 0 45 19t19 45z">
                                </path>
                            </svg>
                        </button>

                        <div class="hidden peer-hover:block hover:block absolute top-9 right-0 z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700"  >
                            <ul class="py-1 text-sm text-gray-700 dark:text-gray-200">
                                <li>
                                    <a href="/" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Homepage</a>
                                </li>
                                <li>
                                    <a href="/dashboard/profil" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Profil</a>
                                </li>
                                
                                <li>
                                    <form action="/logout" method="post">
                                        @csrf
                                        <button type="submit" class="block py-2 px-4 w-full text-left hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Logout</button>
                                    </form>
                                    
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </header>
            {{-- end of navbar --}}
            
            {{-- content --}}
            <div class="h-screen lg:ml-64">
                @yield('dashboard')
            </div>
            
            {{-- end of content --}}
            
        </div>

    </div>
</main>

</body>


</html>