{{-- !: Card 1 --}}
@foreach ($konselor as $item)
    <div class="h-[500px] w-[290px] rounded-xl flex flex-col bg-white mx-2 justify-start overflow-hidden">
        @if ($item->image)
            <picture><img class="rounded-t-xl object-cover h-52 w-full" src="{{ asset('storage/' . $item->image) }}"
                    alt="" srcset="">
            </picture>
        @else
            <picture><img src="/asset/img/cardKonselor.png" class="rounded-t-xl object-cover h-52   w-full" alt=""
                    srcset=""></picture>
        @endif

        <figure class="text-center font-roboto text-lg mt-2 font-medium">
            {{ $item->name }}
        </figure>
        {{-- ?: Container Penanganan --}}
        <figure class="flex flex-col items-center h-fit space-y-4 w-full mt-3 px-2">
            <figcaption class="flex w-full ">
                <h3 class="font-roboto font-medium text-base ">Penanganan masalah :</h3>
            </figcaption>
            <figcaption class="h-full space-y-2 w-full">
                @if ($item->profile->penanganan_masalah)
                    @for ($j = 0; $j < count($masalah[$loop->index]); $j++)
                        <li class="flex" font-roboto=""><img class="mr-3 " src="/asset/icons/checklist.svg"
                                alt="">{{ $masalah[$loop->index][$j] }}</li>
                    @endfor
                @else
                    <p>Tidak Ada</p>
                @endif

            </figcaption>
            <div class=" px-2 rounded-full bg-oran text-white flex bg-[#FCD41C] self-start">
                <img src="/asset/icons/star-icon.svg" alt="icon-star" class="h-6">
                <em>4.1</em>
            </div>
        </figure>
        {{-- ?: Container Button --}}
        <figure class="flex w-full h-full justify-center items-end">
            <a href="/konselor/{{ $item->username }}"
                class="flex items-center bg-blue-902 h-12 w-full justify-center  text-sm text-white  cursor-pointer hover:bg-blue-800">
                Lihat Profil Lengkap
            </a>
        </figure>
    </div>
@endforeach
