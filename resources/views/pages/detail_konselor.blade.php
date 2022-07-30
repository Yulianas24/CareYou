
@extends('layouts.pages')

@section('container')
<div class="grid justify-items-center h-full w-full">
  <div class="w-screen h-52 absolute -z-50">
    @include('/template/templateMain')
</div>
{{-- !: Caption --}}
<div class="w-screen h-52 flex items-center">
    
</div>

<div class="w-3/4 h-screen -mt-18 ">
  <div class="flex w-full flex-row ">
    <img class="h-52 rounded-2xl" src="{{ asset('storage/'.$konselor->image) }}" alt="">
    <div class="grid content-end ml-6">
      <h1 class="font-roboto font-semibold text-2xl mb-6">{{ $konselor->name }}</h1>
      <a href="#">
        <figcaption class="flex items-center bg-blue-902 h-10 px-7 text-white rounded-lg hover:cursor-pointer font-semibold">Konsultasi Sekarang
        </figcaption>
      </a>
    </div>
  </div>
  <div class="grid grid-cols-5 mt-18">
    <div class="col-span-2 h-auto ">
      <h1 class="font-roboto font-semibold text-xl mb-2">Profil</h1>
      <figure class="h-1 w-28 bg-blue-700 mb-5"></figure>

      {{-- Pendidikan  --}}
      
      <div class=" pb-5">
        <h2 class="text-base font-semibold mb-5">Pendidikan:</h1>
        <ul class="list-disc text-sm font-normal">
          <li class="flex" font-roboto=""><img class="mx-5" src="/asset/icons/checklist.svg" alt="" {{ ($konselor->profile->pend_s1) ? '' : 'hidden' }}>{{ ($konselor->profile->pend_s1) ? 'Psikologi - S1 - '.$konselor->profile->pend_s1 : '' }}</li>
          <li class="flex" font-roboto=""><img class="mx-5" src="/asset/icons/checklist.svg" alt="" {{ ($konselor->profile->pend_s2) ? '' : 'hidden' }}>{{  ($konselor->profile->pend_s2) ? 'Psikologi - S2 - '.$konselor->profile->pend_s2 : ''  }}</li>
          <li class="flex" font-roboto=""><img class="mx-5" src="/asset/icons/checklist.svg" alt="" {{ ($konselor->profile->pend_s3) ? '' : 'hidden' }}>{{  ($konselor->profile->pend_s3) ? 'Psikologi - S3 - '.$konselor->profile->pend_s3 : ''  }}</li>
        </ul>
      </div>
  
      {{-- Penanganan masalah  --}}
      <div class=" pb-5">
        <h2 class="text-base font-semibold mb-5">Fokus Penanganan Masalah:</h1>
        <ul class="list-disc text-sm font-normal">
          @for ($i = 0; $i < count($masalah); $i++)
          <li class="flex" font-roboto=""><img class="mx-5" src="/asset/icons/checklist.svg" alt="">{{   $masalah[$i]   }}</li>
          @endfor
          
        </ul>
      </div>

      {{-- Jadwal --}}
      <div class="pb-5">
        <h2 class="text-base font-semibold mb-5">Jadwal:</h1>
          <ul class="list-disc text-sm font-normal">
        
            <li class="flex" font-roboto=""><img class="mx-5" src="/asset/icons/checklist.svg" alt=""></li>
            <li class="flex" font-roboto=""><img class="mx-5" src="/asset/icons/checklist.svg" alt=""></li>
            <li class="flex" font-roboto=""><img class="mx-5" src="/asset/icons/checklist.svg" alt=""></li>
        
            
          </ul>
      </div>
    </div>
    <div class="col-span-3">
      
      <h1 class="font-roboto font-semibold text-xl mb-2">Tentang {{ $konselor->name }}</h1>
      <figure class="h-1 w-28 bg-blue-700 mb-5"></figure>
      <div class="text-justify">{!! $konselor->profile->tentang !!}</div>
      
    </div>
  </div>
</div>
@endsection


