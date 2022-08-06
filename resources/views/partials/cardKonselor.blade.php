{{-- !: Card 1 --}}
<div class="h-102 w-94 rounded-3xl flex flex-col bg-white mx-2 justify-start">

    @if ($konselor[0]->image)
        <picture><img class="rounded-t-3xl" src="{{ asset('storage/' . $konselor[0]->image) }}" alt=""
                srcset="">
        </picture>
    @else
        <picture><img src="/asset/img/cardKonselor.png" alt="" srcset=""></picture>
    @endif

    <figure class="text-center font-roboto font-medium text-lg">
        {{ $konselor[0]->name }}
    </figure>
    {{-- ?: Container Penanganan --}}
    <figure class="flex flex-col items-center h-44 w-full mt-3">
        <figcaption class="flex w-1/1.1 ">
            <h3 class="font-roboto font-medium text-lg">Fokus Penaganan masalah :</h3>
        </figcaption>
        <figcaption class="h-full w-1/1.2">
            <ul class="flex flex-col h-full w-full justify-evenly">
                @for ($i = 0; $i < count($masalah[0]); $i++)
                    <li class="flex" font-roboto=""><img class="mx-5" src="/asset/icons/checklist.svg"
                            alt="">{{ $masalah[0][$i] }}</li>
                @endfor
            </ul>
        </figcaption>
    </figure>
    {{-- ?: Container Button --}}
    <figure class="flex w-full h-full items-center justify-center">
        <a href="/konselor/{{ $konselor[0]->username }}">
            <figcaption class="flex items-center bg-blue-902 h-10 px-7 text-white rounded-lg cursor-pointer">Lihat
                Profil Lengkap
            </figcaption>
        </a>
    </figure>
</div>

{{-- !: Card 2 --}}
<div class="h-102 w-94 rounded-3xl flex flex-col bg-white mx-2 justify-start">
    @if ($konselor[1]->image)
        <picture><img class="rounded-t-3xl" src="{{ asset('storage/' . $konselor[1]->image) }}" alt=""
                srcset=""></picture>
    @else
        <picture><img src="/asset/img/cardKonselor.png" alt="" srcset=""></picture>
    @endif
    <figure class="text-center font-roboto font-medium text-lg">
        {{ $konselor[1]->name }}
    </figure>
    {{-- ?: Container Penanganan --}}
    <figure class="flex flex-col items-center h-44 w-full mt-3">
        <figcaption class="flex w-1/1.1 ">
            <h3 class="font-roboto font-medium text-lg">Fokus Penaganan masalah :</h3>
        </figcaption>
        <figcaption class="h-full w-1/1.2">
            <ul class="flex flex-col h-full w-full justify-evenly">
                @for ($i = 0; $i < count($masalah[1]); $i++)
                    <li class="flex" font-roboto=""><img class="mx-5" src="/asset/icons/checklist.svg"
                            alt="">{{ $masalah[1][$i] }}</li>
                @endfor
            </ul>
        </figcaption>
    </figure>
    {{-- ?: Container Button --}}
    <figure class="flex w-full h-full items-center justify-center">
        <a href="/konselor/{{ $konselor[1]->username }}">
            <figcaption class="flex items-center bg-blue-902 h-10 px-7 text-white rounded-lg cursor-pointer">Lihat
                Profil Lengkap
            </figcaption>
        </a>
    </figure>
</div>

{{-- !: Card 3 --}}
<div class="h-102 w-94 rounded-3xl flex flex-col bg-white mx-2 justify-start">
    @if ($konselor[2]->image)
        <picture><img class="rounded-t-3xl" src="{{ asset('storage/' . $konselor[2]->image) }}" alt=""
                srcset=""></picture>
    @else
        <picture><img src="/asset/img/cardKonselor.png" alt="" srcset=""></picture>
    @endif
    <figure class="text-center font-roboto font-medium text-lg">
        {{ $konselor[2]->name }}
    </figure>
    {{-- ?: Container Penanganan --}}
    <figure class="flex flex-col items-center h-44 w-full mt-3">
        <figcaption class="flex w-1/1.1 ">
            <h3 class="font-roboto font-medium text-lg">Fokus Penaganan masalah :</h3>
        </figcaption>
        <figcaption class="h-full w-1/1.2">
            <ul class="flex flex-col h-full w-full justify-evenly">
                @for ($i = 0; $i < count($masalah[2]); $i++)
                    <li class="flex" font-roboto=""><img class="mx-5" src="/asset/icons/checklist.svg"
                            alt="">{{ $masalah[2][$i] }}</li>
                @endfor
            </ul>
        </figcaption>
    </figure>
    {{-- ?: Container Button --}}
    <figure class="flex w-full h-full items-center justify-center">
        <a href="/konselor/{{ $konselor[2]->username }}">
            <figcaption class="flex items-center bg-blue-902 h-10 px-7 text-white rounded-lg cursor-pointer">Lihat
                Profil Lengkap
            </figcaption>
        </a>
    </figure>
</div>
