@extends('layouts.pages')
@section('container')
    {{-- ?: Template --}}
    <div class="flex h-52 w-screen">
        <div class="w-screen h-52 -z-50 absolute"> @include('/template/templateMain')</div>
    </div>

    {{-- ?: Container Profile Konselor --}}
    <div class="min-h-screen w-screen flex flex-col items-center">
        {{-- !: Container Profile Konselor --}}
        <div class=" w-1/1.2 min-h-75 relative tablet:w-4/5 tablet:min-h-52">
            <div
                class="flex w-full h-full flex-col items-start absolute -top-6 tablet:-top-14 justify-start tablet:flex-row">
                {{-- Image Profile --}}
                @if ($konselor->image)
                    <img class="h-52 rounded-2xl  max-h-52" src="{{ asset('storage/' . $konselor->image) }}" alt="">
                @else
                    <img class="h-52 rounded-2xl max-h-52" src="/asset/img/cardKonselor.png" alt="" srcset="">
                @endif
                {{-- !: Name and booking container --}}
                <div class="flex flex-col w-full h-full justify-end items-start tablet:pl-12">
                    <h1 class="font-roboto font-semibold text-2xl my-1">{{ $konselor->name }}</h1>

                    {{-- Rating --}}
                    {{-- <div class=" px-2 rounded-full bg-oran text-white flex bg-[#FCD41C] self-start">
                        <img src="/asset/icons/star-icon.svg" alt="icon-star" class="h-6">
                        <em>4.1</em>
                    </div> --}}

                    @if (auth()->user() != null &&
                        auth()->user()->booked != null &&
                        auth()->user()->booked->keterangan == 'mengajukan' &&
                        auth()->user()->booked->konselor_id == $konselor->id)
                        <div class="flex gap-2">
                            <button class="bg-green-800 rounded-md py-2 px-6 my-1 text-white font-roboto"
                            disabled>Booked</button>
                        <a href="/chatify/{{ $konselor->id }} " target="_blank">
                            <button class="bg-blue-800 rounded-md py-2 px-6 my-1 text-white font-roboto">Kirim
                                Pesan</button>
                        </a>
                        </div>
                        <p class="font-roboto font-semibold">Hari : {{ auth()->user()->booked->hari }}, Pukul :
                            {{ auth()->user()->booked->jam < 10 ? '0' . auth()->user()->booked->jam : auth()->user()->booked->jam }}:00
                            WIB</p>
                        @if (session('success'))
                        
                            @include('/components/succesBooking')
                        @endif
                    @else
                        <div class="tablet:flex tablet:mt-8">
                            <button class="bg-blue-902 rounded-md py-2 px-6  text-white font-roboto "
                                button-booking>Konsultasi
                                Sekarang</button>
                            @if (session('error'))
                                <div id="id01"
                                    class="alert px-6  text-base text-red-800 inline-flex items-center w-auto alert-dismissible fade show"
                                    role="alert">
                                    <p class="align-middle">{{ session('error') }}</p>
                                    <button type="button"
                                        class=" w-7 h-7 ml-auto text-red-800 border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-yellow-900 hover:opacity-75 hover:no-underline"
                                        data-bs-dismiss="alert" aria-label="Close"> <span
                                            onclick="document.getElementById('id01').style.display='none'"> &times;</button>
                                </div>
                            @endif
                        </div>
                    @endif
                </div>
            </div>
        </div>

        {{-- ?: Container Detail Konselor --}}
        <div class="flex flex-col  w-1/1.2 tablet:w-4/5 laptop:flex-row">
            {{-- !: Detail Profil --}}
            <div class="flex flex-col">
                {{-- Header Detail --}}
                <h1 class="font-roboto text-xl border-b-2 border-blue-902 pb-2 pr-8 w-fit">Profil</h1>
                {{-- Container Pedidikan --}}
                <div class="flex flex-col my-2">
                    <h3 class="font-roboto text-lg">Pendidikan</h3>
                    {{-- todo: List Pendidikan --}}
                    {{-- Pendidikan S1 --}}
                    @if ($konselor->profile?->pend_s1)
                        <figure class="flex">
                            <img src="/asset/icons/checklist.svg" alt="checklistIcon">
                            <figcaption class="pl-2 font-roboto">Psikologi {{ $konselor->profile?->pend_s1 }} - S1
                            </figcaption>
                        </figure>
                    @endif
                    {{-- Pendidikan S2 --}}
                    @if ($konselor->profile?->pend_s2)
                        <figure class="flex">
                            <img src="/asset/icons/checklist.svg" alt="checklistIcon">
                            <figcaption class="pl-2 font-roboto">Psikologi {{ $konselor->profile?->pend_s2 }} - S2
                            </figcaption>
                        </figure>
                    @endif
                    {{-- Pendidikan S3 --}}
                    @if ($konselor->profile?->pend_s3)
                        <figure class="flex">
                            <img src="/asset/icons/checklist.svg" alt="checklistIcon">
                            <figcaption class="pl-2 font-roboto">Psikologi {{ $konselor->profile?->pend_s3 }} - S3
                            </figcaption>
                        </figure>
                    @endif
                </div>

                {{-- Container Fokus Dan Permasalahan --}}
                <div class="flex flex-col my-2">
                    <h3 class="font-roboto text-base">Fokus Penanganan Permasalahan</h3>
                    {{-- todo: List Penanganan Masalah --}}
                @if ($masalah)
                @foreach ($masalah as $item)
                    
                <li class="flex" font-roboto=""><img class="pr-2" src="/asset/icons/checklist.svg" alt="">{{   $item  }}</li>
                @endforeach
                @else
                    <p>Tidak Ada</p>
                @endif
                </div>

                {{-- Container Jadwal Konseling --}}
                <div class="flex flex-col my-2">
                <h3 class="font-roboto text-lg">Pendekatan</h3>
                <div class="flex gap-2">
                    <img src="/asset/icons/checklist.svg" alt="checklistIcon">
                    <p class="font-roboto"> {{$konselor->profile->kategori_pendekatan ?? 'Tidak Ada'}} </p>
                </div>
                </div>
                {{-- Container Jadwal Konseling --}}
                <div class="flex flex-col my-2">
                    <h3 class="font-roboto text-lg">Jadwal Konseling</h3>
                    {{-- todo: List Jadwal Konseling --}}
                    @foreach ($jadwal as $item)
                        <figure class="flex">
                            <img src="/asset/icons/checklist.svg" alt="checklistIcon">
                            <figcaption class="pl-2 font-roboto">{{ $item->hari }}, pukul
                                {{ $item->mulai_jam < 10 ? '0' . $item->mulai_jam : $item->mulai_jam }}:00 -
                                {{ $item->hingga_jam < 10 ? '0' . $item->hingga_jam : $item->hingga_jam }}:00</figcaption>
                        </figure>
                    @endforeach
                </div>
            </div>
            {{-- !: Pengalaman Konselor --}}
            <div class="flex flex-col w-full mt-5 laptop:mt-0 laptop:w-9/12 laptop:ml-7">
                <h1 class="font-roboto text-xl border-b-2 border-blue-902 pb-2 pr-8 w-fit">Tentang
                    {{ $konselor->name }}</h1>
                {{-- !: Tentang Konselor --}}
                <div class="my-2">
                    @if ($konselor->profile?->tentang)
                        {!! $konselor->profile?->tentang !!}
                    @else
                        Belum ada keterangan
                    @endif
                </div>
            </div>
        </div>

        {{-- Rekomendasi Konselor --}}
        <div class="h-fit mt-8 pb-10 w-1/1.2 tablet:w-4/5">
            <h1 class="font-semibold mb-4">Rekomendasi Konselor</h1>
            <div class="flex w-full overflow-y-auto">
                @if ($saran_konselor)
                    @foreach ($saran_konselor as  $key => $item)
                    <div class="relative overflow-hidden flex-none h-[450px] w-[290px] rounded-xl bg-white mx-2 justify-start shadow-md shadow-gray-500 mb-5">
                        @if ($item->image)
                        <picture><img class="rounded-t-xl object-cover h-52 w-full" src="{{ asset('storage/' . $item->image) }}" alt=""
                            srcset="">
                        </picture>
                        @else
                            <picture><img src="/asset/img/cardKonselor.png" class="rounded-t-xl object-cover h-52 w-full" alt="" srcset=""></picture>
                        @endif
                    
                        <figure class="text-center font-roboto font-thin text-md mt-2">
                            {{ $item->name }}
                        </figure>
                        {{-- ?: Container Penanganan --}}
                        <figure class="px-2 items-center h-44 w-full mt-1">
                            <figcaption>
                                <h3 class="font-roboto font-medium text-sm">Penanganan masalah :</h3>
                            </figcaption>
                            <figcaption class="h-full">
                                @if ($item->penanganan_masalah)

                                {{-- !: Bagian ini Ubah --}}
                                @foreach ($pm[$key] as $saran_pm)
                                    <li class="flex items-center text-sm" font-roboto=""><img class="mx-2" src="/asset/icons/checklist.svg" alt="">{{  $saran_pm  }}</li>
                                @endforeach
                                @else
                                    <p>Tidak Ada</p>
                                @endif
                                
                            </figcaption>
                        </figure>
                        {{-- ?: Container Button --}}
                        <a href="/konselor/{{ $item->username }}" class="absolute bottom-0 bg-blue-902 py-4  text-center text-[12px] w-full text-white cursor-pointer">
                            Lihat Profil Lengkap
                        </a>
                    </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>

    {{-- ?: Popup Booking Konselor --}}
    <form action="/konselor/{{ $konselor->username }}/book" method="post">
        <div class="hidden fixed top-0 w-screen backdrop-blur-sm z-50 h-screen items-center justify-center"
            pop-up-container>
            @csrf
            <input type="hidden" name="konselor_id" value="{{ $konselor->id }}">
            <input type="hidden" name="user_id" value="{{ auth()->user() ? auth()->user()->id : '' }}">
            <input type="hidden" name="keterangan" value="mengajukan">
            <input type="hidden" name="username" value="{{ $konselor->username }}">
            @include('/partials/bookingKonselor')   
            @include('/partials/bookingKonselorOfflineBooking')
        </div>
    </form>
    <script src="{{ asset('js/detailKonselor.js') }}"></script>
@endsection
