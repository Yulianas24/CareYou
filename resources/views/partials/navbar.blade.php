<nav class="flex justify-evenly fixed items-center w-screen h-18 bg-transparent z-50">
    <figure><img src="/asset/mainLogo.svg" alt="" srcset=""></figure>
    <ul class="flex justify-evenly w-2/3">
        <li class="text-white"><a href="#">Home</a></li>
        <li class="text-white"><a href="#">Fitur</a></li>
        <li class="text-white"><a href="#">Konselor</a></li>
        <li class="text-white"><a href="#">Artikel</a></li>
        <li class="text-white"><a href="#">Tentang Kami</a></li>
    </ul>
    @auth
    <form action="/logout" method="post">
        @csrf
        <button type="submit" class="border-2 font-roboto text-white border-blue-902 py-1 px-8 rounded-lg hover:bg-blue-902 cursor-pointer">Logout</button>
    </form>
    @else
    <a href="/login">
        <figure
        class="border-2 font-roboto text-white border-blue-902 py-1 px-8 rounded-lg hover:bg-blue-902 cursor-pointer">
        Login</figure>
    </a>
    <button href></button>
    @endauth
    
    
</nav>
