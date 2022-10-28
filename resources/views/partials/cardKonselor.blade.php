{{-- !: Card 1 --}}
@foreach ($konselor as $item)
<div class="h-102 w-94 rounded-3xl flex flex-col bg-white mx-2 justify-start">

    

    @if ($item->image)
        <picture><img class="rounded-t-3xl object-cover h-64 w-full" src="{{ asset('storage/' . $item->image) }}" alt=""
                srcset="">
        </picture>
    @else
        <picture><img src="/asset/img/cardKonselor.png" class="rounded-t-3xl object-cover h-64 w-full" alt="" srcset=""></picture>
    @endif

    <figure class="text-center font-roboto font-medium text-lg">
        {{ $item->name }}
    </figure>
    {{-- ?: Container Penanganan --}}
    <figure class="flex flex-col items-center h-44 w-full mt-3">
        <figcaption class="flex w-1/1.1 ">
            <h3 class="font-roboto font-medium text-lg">Fokus Penaganan masalah :</h3>
        </figcaption>
        <figcaption class="h-full w-1/1.2">
            @if ($masalah != null)
            <ul class="flex flex-col h-full w-full justify-evenly">
                @for ($i = 0; $i < count($masalah[0]); $i++)
                    <li class="flex" font-roboto=""><img class="mx-5" src="/asset/icons/checklist.svg"
                            alt="">{{ $masalah[0][$i] }}</li>
                @endfor
            </ul>
            @endif
            
        </figcaption>
    </figure>
    {{-- ?: Container Button --}}
    <figure class="flex w-full h-full items-center justify-center">
        <a href="/konselor/{{ $item->username }}">
            <figcaption class="flex items-center bg-blue-902 h-10 px-7 text-white rounded-lg cursor-pointer">Lihat
                Profil Lengkap
            </figcaption>
        </a>
    </figure>
</div>

@endforeach