@extends('layouts.pages')

@section('container')
    <div class="min-h-screen w-full grid justify-items-center content-start py-4 tablet:px-[170px]">
        <p class="text-[#0661B0] font-semibold text-lg"> Intip Hasil Kesehatan Mentalmu Yuk! </p>
        <p class="mt-2">Kamu sudah berhasil mengisi tes kesehatan mental dari CareYou. Hasilnya menunjukkan</p>
        <div class="w-full max-w-[400px] grid justify-items-center shadow-md shadow-black/20 p-4 mt-10 rounded-lg ">
          @if ($result == 'Cukup Tinggi')
          <img src="/asset/img/tingkat stress/CukupTinggi.png" alt="">
          @elseif($result == 'Sedang')
          <img src="/asset/img/tingkat stress/Sedang.png" alt="">
          @else
          <img src="/asset/img/tingkat stress/Rendah.png" alt="">
          @endif
          <p class="py-2 font-semibold text-lg">Tingkat Stresmu <span class="{{ $result == 'Cukup Tinggi' ? 'text-red-600' :( $result == 'Sedang' ? 'text-yellow-600' : 'text-blue-600') }}">{{ $result }}</span></p>
          <p>Kamu Memerlukan Sedikit Bantuan!</p>
        </div>
        <p class="mb-5 mt-10 text-center text-lg">
          Berdasarkan kuisioner kesehatan mental dari CareYou, saat ini kondisimu sedang tidak stabil. Jika ingin mengetahui lebih lanjut permasalahannmu, kamu bisa cerita ke konselor CareYou melalui tombol di bawah ini ya! ^_^ 
        </p>
        <a href="/login" class="text-white px-20 rounded-md py-2 bg-[#0661B0]">Konsultasi Sekarang</a>
    </div>
@endsection