<nav navigation class="duration-500 flex justify-between fixed items-center w-screen h-18 bg-transparent z-50 laptop:justify-evenly"
    <img src="/asset/mainLogo.svg" alt="" srcset="" class="px-6 laptop:px-0">
    <ul class="flex flex-col absolute py-10 top-0 duration-500 z-30 h-screen -right-105 backdrop-blur-sm bg-blue-902/90 w-2/3 tablet:w-5/12 laptop:backdrop-blur-none laptop:z-auto laptop:w-2/3 laptop:py-0 laptop:justify-evenly laptop:h-auto laptop:static laptop:top-auto laptop:right-auto laptop:bg-transparent laptop:flex-row"
        mobileBar>
        {{-- todo: Container Profile --}}
        <li class="p-4 laptop:hidden">
            {{-- ?: Profile Container --}}
            <label class="flex items-center hover:cursor-pointer">
                <input type="checkbox" class="peer" hidden>
                {{-- !: Profile image --}}
                <picture href="#" class=" px-1 block relative">
                @auth
                    @if (auth()->user()->image)
                        <img alt="profil" src="{{ asset('storage/' . auth()->user()->image) }}"
                            class="object-cover rounded-full h-10 w-10 " />
                    @else
                        <img alt="profil" src="/asset/logo_blue.svg" class="object-cover rounded-full h-10 w-10 " />
                    @endif
                </picture>
                {{-- !: Name user --}}
                <div id="loginText" class=" px-1 flex text-white text-md">
                    <span textLinks> {{ auth()->user()->username }}</span>
                    <svg width="20" height="20" class="ml-2 text-gray-400" fill="currentColor"
                        viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M1408 704q0 26-19 45l-448 448q-19 19-45 19t-45-19l-448-448q-19-19-19-45t19-45 45-19h896q26 0 45 19t19 45z">
                        </path>
                    </svg>
                </div>
                {{-- !: Menu user container --}}
                <div
                    class="hidden peer-checked:block hover:block absolute top-24 right-15 z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700">
                    <ul class="py-1 text-sm text-gray-700 dark:text-gray-200">
                        @if (auth()->user()->level === 'konselor')
                            <li>
                                <a href="/dashboard"
                                    class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                            </li>
                        @endif
                        {{-- <li>
                            <a href="/notification"
                                class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Notification</a>
                        </li> --}}
                        <li>
                            <a href="/profile/{{ auth()->user()->username }}/edit"
                                class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Profil</a>
                        </li>
                        <li>
                            <form action="/logout" method="post">
                                @csrf
                                <button type="submit"
                                    class="block py-2 px-4 w-full text-left hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Logout</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </label>
            
            @else
                {{-- ?: Login Button --}}
                <a href="/login">
                    <figure id="loginText"
                        class="border-2 font-roboto px-12 text-white  py-1 rounded-lg hover:bg-blue-902 cursor-pointer duration-500 hover:text-white laptop:px-8 ">
                        Login</figure>
                </a>
                <button href></button>
            @endauth
        </li>
        <li class="text-white p-4 border-b-2 border-blue-900/20 laptop:border-0 laptop:p-0" textLinks><a
                href="#pageHome">Home</a>
        </li>
        <li class="text-white p-4 border-b-2 border-blue-900/20 laptop:border-0 laptop:p-0" textLinks><a
                href="#pageFitur">Fitur</a>
        </li>
        <li class="text-white p-4 border-b-2 border-blue-900/20 laptop:border-0 laptop:p-0" textLinks><a
                href="#pageKonselor">Konselor</a></li>
        <li class="text-white p-4 border-b-2 border-blue-900/20 laptop:border-0 laptop:p-0" textLinks><a
                href="#pageArtikel">Artikel</a></li>
        <li class="text-white p-4 border-b-2 border-blue-900/20 laptop:border-0 laptop:p-0" textLinks><a
                href="#">Tentang
                Kami</a></li>
    </ul>
    <ul class="laptop:hidden flex flex-col order-1 items-center justify-center z-40 px-8 cursor-pointer">
        <span class="w-9 h-1 duration-500 bg-white block my-1 rounded-sm z-50" hamburger></span>
        <span class="w-9 h-1 duration-500 bg-white block my-1 rounded-sm z-50" hamburger></span>
        <span class="w-9 h-1 duration-500 bg-white block my-1 rounded-sm z-50" hamburger></span>
    </ul>

    {{-- ?: Profile Container --}}
    <div class="hidden laptop:flex laptop:items-center ">

        {{-- !: Profile image --}}
        @auth
        <a href="/notification">
            <svg class="" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_1846_7371)">
                <path d="M12.0001 22C13.1001 22 14.0001 21.1 14.0001 20H10.0001C10.0001 21.1 10.8901 22 12.0001 22ZM18.0001 16V11C18.0001 7.93 16.3601 5.36 13.5001 4.68V4C13.5001 3.17 12.8301 2.5 12.0001 2.5C11.1701 2.5 10.5001 3.17 10.5001 4V4.68C7.63005 5.36 6.00005 7.92 6.00005 11V16L4.71005 17.29C4.08005 17.92 4.52005 19 5.41005 19H18.5801C19.4701 19 19.9201 17.92 19.2901 17.29L18.0001 16Z" fill="#2984D5"/>
                </g>
                <defs>
                <clipPath id="clip0_1846_7371">
                <rect width="24" height="24" fill="#2984D5"/>
                </clipPath>
                </defs>
            </svg>
        </a>
        <a href="/chatify" class="mx-5"  target="__blank">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_1846_7374)">
                <path d="M20 4H4C2.9 4 2.01 4.9 2.01 6L2 18C2 19.1 2.9 20 4 20H20C21.1 20 22 19.1 22 18V6C22 4.9 21.1 4 20 4ZM19.6 8.25L12.53 12.67C12.21 12.87 11.79 12.87 11.47 12.67L4.4 8.25C4.15 8.09 4 7.82 4 7.53C4 6.86 4.73 6.46 5.3 6.81L12 11L18.7 6.81C19.27 6.46 20 6.86 20 7.53C20 7.82 19.85 8.09 19.6 8.25Z" fill="#2984D5"/>
                </g>
                <defs>
                <clipPath id="clip0_1846_7374">
                <rect width="24" height="24" fill="#2984D5"/>
                </clipPath>
                </defs>
            </svg>
        </a>
        
            
        <a href="#" class="peer px-1 block relative">
                @if (auth()->user()->image)
                    <img alt="profil" src="{{ asset('storage/' . auth()->user()->image) }}"
                        class="object-cover rounded-full h-10 w-10 " />
                @else
                    <img alt="profil" src="/asset/logo_blue.svg" class="mx-auto object-cover rounded-full h-10 w-10 " />
                @endif
            </a>
            {{-- !: Name user --}}
            <button loginText class="peer px-1 flex text-white text-md">
                <span id="textLinks"> {{ auth()->user()->username }}</span>
                <svg width="20" height="20" class="ml-2 text-gray-400" fill="currentColor" viewBox="0 0 1792 1792"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M1408 704q0 26-19 45l-448 448q-19 19-45 19t-45-19l-448-448q-19-19-19-45t19-45 45-19h896q26 0 45 19t19 45z">
                    </path>
                </svg>
            </button>
            {{-- !: Menu user container --}}
            <div
                class="hidden peer-hover:block hover:block absolute top-12 right-12 z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700">
                <ul class="py-1 text-sm text-gray-700 dark:text-gray-200">
                    @if (auth()->user()->level === 'konselor')
                        <li>
                            <a href="/dashboard"
                                class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                        </li>
                    @endif
                    {{-- <li>
                        <a href="/notification"
                            class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Notification</a>
                    </li> --}}
                    <li>
                        <a href="/profile/{{ auth()->user()->username }}/edit"
                            class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Profil</a>
                    </li>
                    <li>
                        <form action="/logout" method="post">
                            @csrf
                            <button type="submit"
                                class="block py-2 px-4 w-full text-left hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Logout</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
        </form>
    @else
        {{-- ?: Login Button --}}
        <a href="/login">
            <figure
                class="border-2 font-roboto px-12 text-white  py-1 rounded-lg hover:bg-blue-902 cursor-pointer duration-500 hover:text-white laptop:px-8 laptop:border-blue-902"
                loginText>
                Login</figure>
        </a>
        <button href></button>
    @endauth


</nav>
