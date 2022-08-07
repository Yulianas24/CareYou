<nav class="duration-500 flex justify-between fixed items-center w-screen h-18 bg-transparent z-50 laptop:justify-evenly"
    id="nav">
    <img src="/asset/mainLogo.svg" alt="" srcset="" class="px-6 laptop:px-0">
    <ul class="flex flex-col absolute py-10 top-0 duration-500 z-30 h-screen -right-105 backdrop-blur-sm bg-blue-902/90 w-2/3 tablet:w-5/12 laptop:backdrop-blur-none laptop:z-auto laptop:w-2/3 laptop:py-0 laptop:justify-evenly laptop:h-auto laptop:static laptop:top-auto laptop:right-auto laptop:bg-transparent laptop:flex-row"
        mobileBar>
        {{-- todo: Container Profile --}}
        <li class="p-4 laptop:hidden">
            {{-- ?: Profile Container --}}
            <div class="flex items-center">

                {{-- !: Profile image --}}
                <a href="#" class="peer px-1 block relative">
                    @auth
                        @if (auth()->user()->image)
                            <img alt="profil" src="{{ asset('storage/' . auth()->user()->image) }}"
                                class="object-cover rounded-full h-10 w-10 " />
                        @else
                            <img alt="profil" src="/asset/logo_blue.svg" class="object-cover rounded-full h-10 w-10 " />
                        @endif
                    </a>
                    {{-- !: Name user --}}
                    <button id="loginText" class="peer px-1 flex text-white text-md">
                        <span textLinks> {{ auth()->user()->username }}</span>
                        <svg width="20" height="20" class="ml-2 text-gray-400" fill="currentColor"
                            viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
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
        <a href="#" class="peer px-1 block relative">
            @auth
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
