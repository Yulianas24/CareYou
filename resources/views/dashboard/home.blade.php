@extends('layouts/dashboard')

@section('dashboard')
<div class="overflow-hidden  h-screen pb-24 px-4 md:px-6">
  <h1 class="phone:text-lg text-4xl font-semibold text-gray-800 dark:text-white">
      Welcome back, <br class="tablet:hidden "> {{ auth()->user()-> name}}
  </h1>
  <br>
  {{-- tabel jadwal --}}
  <div class="w-full h-full overflow-auto">
    <table class=" table-auto tablet:w-full phone:w-[1000px]  dark:text-white">
      <thead>
        <tr class="border-b border-gray-500">
          <th class=" p-1 w-12 phone:hidden" scope="col">No</th>
          <th class=" phone:sticky left-0 p-1 text-left w-40 bg-gray-800" scope="col">Nama</th>
          <th class=" p-1 text-center " scope="col">Chat</th>
          <th class=" p-1 text-center" scope="col">Hari</th>
          <th class=" p-1 text-center" scope="col">Jam Konsultasi</th>
          <th class=" p-1 text-center w-44" scope="col">Tanggal</th>
          <th class=" p-1 text-center" scope="col">Metode</th>
          <th class=" p-1 text-center" scope="col">Keterangan</th>
          <th class=" p-1 w-32" scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach (auth()->user()->booking as $item)
        <tr class="border-b border-gray-600 ">
          <td class="py-2 text-center phone:hidden">{{ $loop->iteration }}</td>
          <td class="phone:sticky left-0 py-2 w-40 bg-gray-800">{{ $item->konseli->name }}</td>
          <td class="py-2 text-center ">
            <a href="/chatify/{{ $item->konseli->id }}" >
              <button class="bg-blue-500 hover:bg-blue-700  text-white py-1 px-2 rounded-sm">Kirim Pesan</button>
            </a>
          </td>
          <td class="py-2 text-center">{{ $item->hari }}</td>
          
          <td class="py-2 text-center">{{ ($item->jam<10)? '0'.$item->jam : $item->jam }}:00</td>
          <td class="py-2 text-center w-44">{{ $item->updated_at->toDateString() }}</td>
  
          <td class="py-2 text-center">{{ $item->metode }}</td>
          <td class="py-2 text-center">{{ $item->keterangan }}</td>
          <td class="grid grid-cols-2 w-32 py-2 text-center">
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
  

</div>
@endsection