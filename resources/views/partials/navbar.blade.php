<nav class="duration-500 flex justify-evenly fixed items-center w-screen h-18 bg-transparent z-50" id="nav">
    <figure><img src="/asset/mainLogo.svg" alt="" srcset=""></figure>
    <ul class="flex justify-evenly w-2/3">
        <li class="text-white" id="textLinks"><a href="#pageHome">Home</a></li>
        <li class="text-white" id="textLinks"><a href="#pageFitur">Fitur</a></li>
        <li class="text-white" id="textLinks"><a href="#">Konselor</a></li>
        <li class="text-white" id="textLinks"><a href="#">Artikel</a></li>
        <li class="text-white" id="textLinks"><a href="#">Tentang Kami</a></li>
    </ul>
    @auth
        <a href="#" class="peer block relative">
            <img alt="profil" src="/asset/logo_blue.svg" class="mx-auto object-cover rounded-full h-10 w-10 " />
        </a>

        <button id="loginText" class="peer flex -ml-5 text-white text-md">
            <span id="textLinks"> {{ auth()->user()->username }}</span>
            <svg width="20" height="20" class="ml-2 text-gray-400" fill="currentColor" viewBox="0 0 1792 1792"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M1408 704q0 26-19 45l-448 448q-19 19-45 19t-45-19l-448-448q-19-19-19-45t19-45 45-19h896q26 0 45 19t19 45z">
                </path>
            </svg>
        </button>

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
                    <a href="#"
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

        </form>
    @else
        <a href="/login">
            <figure id="loginText"
                class="border-2 font-roboto text-white border-blue-902 py-1 px-8 rounded-lg hover:bg-blue-902 cursor-pointer">
                Login</figure>
        </a>
        <button href></button>
    @endauth


</nav>
