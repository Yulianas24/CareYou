@extends('layouts/dashboard')

@section('dashboard')
<div class="overflow-auto h-screen pb-24 px-4 md:px-6">
  <h1 class="text-4xl font-semibold text-gray-800 dark:text-white">
      Welcome back, {{ auth()->user()-> name}}
  </h1>
  <br>
  {{-- tabel jadwal --}}
  <table class="table-fixed w-full  dark:text-white">
    <thead>
      <tr class="border-b border-gray-500">
        <th class=" p-1 w-12" scope="col">No</th>
        <th class=" p-1 text-left w-44" scope="col">Nama</th>
        <th class=" p-1 text-center" scope="col">Jenis Kelamin</th>
        <th class=" p-1 text-center" scope="col">Hari</th>
        <th class=" p-1 text-center" scope="col">Jam Konsultasi</th>
        <th class=" p-1 text-center" scope="col">Tanggal</th>
        <th class=" p-1 text-center" scope="col">Metode</th>
        <th class=" p-1 text-center" scope="col">Keterangan</th>

        <th class=" p-1 " scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach (auth()->user()->booking as $item)
      <tr class="border-b border-gray-600 ">
        <td class="py-2 text-center">{{ $loop->iteration }}</td>
        <td class="py-2 w-44">{{ $item->konseli->name }}</td>
        <td class="py-2 text-center">{{ $item->konseli->jenis_kelamin }}</td>
        <td class="py-2 text-center">{{ $item->hari }}</td>
        
        <td class="py-2 text-center">{{ ($item->jam<10)? '0'.$item->jam : $item->jam }}:00</td>
        <td class="py-2 text-center">{{ $item->updated_at->toDateString() }}</td>

        <td class="py-2 text-center">{{ $item->metode }}</td>
        <td class="py-2 text-center">{{ $item->keterangan }}</td>
        <td class="py-2 text-center">
          @if ($item->keterangan == 'mengajukan')
          <a href="/dashboard/{{ $item->id }}/selesai" >
            <button class="bg-green-500 hover:bg-green-700  text-white py-1 px-2 rounded-sm" onclick="return confirm('Apakah anda yakin?')">selesai</button>
          </a>
          <a href="/dashboard/{{ $item->id }}/batal" >
            <button class="bg-yellow-500 hover:bg-yellow-700  text-white py-1 px-2 rounded-sm" onclick="return confirm('Apakah anda yakin?')">batal</button>
          </a>
          @else
              
          @endif
          
        </td>
      </tr>
      @endforeach
      
      
    </tbody>
  </table>

</div>
@endsection