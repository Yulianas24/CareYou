@extends('layouts/dashboard')

@section('dashboard')
<div class="overflow-auto h-screen  px-4 md:px-6">
@if (session()->has('success'))  
<div id="id01" class="alert w-3/4 bg-green-200 rounded-md py-2 px-6  text-base text-green-800 inline-flex items-center alert-dismissible fade show" role="alert">

    <p>{{ session('success') }}</p>
    <button type="button" class=" w-7 h-7 ml-auto text-green-800 border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-yellow-900 hover:opacity-75 hover:no-underline" data-bs-dismiss="alert" aria-label="Close"> <span onclick="document.getElementById('id01').style.display='none'"> &times;</button>
</div>

@endif
@if (session()->has('error'))  
<div id="id01" class="alert w-3/4 bg-red-200 rounded-md py-2 px-6  text-base text-green-red inline-flex items-center alert-dismissible fade show" role="alert">

    <p>{{ session('error') }}</p>
    <button type="button" class=" w-7 h-7 ml-auto text-red-800 border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-yellow-900 hover:opacity-75 hover:no-underline" data-bs-dismiss="alert" aria-label="Close"> <span onclick="document.getElementById('id01').style.display='none'"> &times;</button>
</div>

@endif
<h1 class="text-4xl  font-semibold text-gray-800 dark:text-white">
    Jadwal
</h1>
<div class="w-32 h-1 bg-blue-700 dark:bg-blue-800 mt-3 mb-12"></div>
<div class="grid grid-cols-5 gap-4 w-full h-auto ">


    {{-- Tampilkan Jadwal --}}
    <div class="w-full h-auto col-span-3 dark:bg-gray-900 rounded-2xl shadow-2xl">
        <h1 class="text-2xl  text-center font-semibold text-gray-800 dark:text-white my-5">
            Jadwal Tersedia
        </h1>

        <table class="table-fixed w-full  dark:text-white">
            <thead>
              <tr class="border-b border-gray-500">
                <th class=" p-1 w-10" scope="col">No</th>
                <th class=" p-1 text-left" scope="col">Hari</th>
                <th class=" p-1  text-left" scope="col">Mulai Pukul</th>
                <th class=" p-1  text-left" scope="col">Hingga Pukul</th>
                <th class=" p-1  " scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($jadwal as $item)
              <tr class="border-b border-gray-600 ">
                <td class="py-2 text-center">{{ $loop->iteration }}</td>
                <td class="py-2">{{ $item->hari }}</td>
                <td class="py-2">{{ $item->mulai_jam }}</td>
                <td class="py-2">{{ $item->hingga_jam }}</td>
                <td class="py-2 text-center">
                    <a href="" >
                        <button class="bg-yellow-500 hover:bg-yellow-700  text-white py-1 px-2 rounded-sm">Edit</button>
                    </a>
                    <form action="" method="POST" class="inline-flex">
                        @method('delete')
                        @csrf
                        <button type="submit" class="bg-red-500 hover:bg-red-700  text-white py-1 px-2 rounded-sm" onclick="return confirm('Apakah anda yakin?')">Delete</button>
                    </form>
                  
                </td>
              </tr>
              @endforeach
              
              
            </tbody>
          </table>
    </div>

    {{-- Tambah Jadwal --}}
    <div class="w-full h-auto col-span-2 dark:bg-gray-900 rounded-2xl shadow-2xl">
        <h1 class="text-2xl  text-center font-semibold text-gray-800 dark:text-white mt-5">
            Tambah Jadwal
        </h1>
        <form action="" class="p-10">
            @csrf
            

            <div>
                <label for="hari" class="form-label inline-block mb-2 text-gray-700 dark:text-white">Hari</label>
                @error('hari')
                    <p class="block text-xs font-poppins font-normal text-pink-700 ">{{ $message }}</p>
                @enderror
                <select type="text" class="form-control
                block
                w-full
                px-3
                py-1.5
                text-base
                font-normal
                text-gray-700
                dark:text-white
                dark:bg-gray-800
                focus:dark:bg-gray-800
                focus:dark:text-white
                bg-white bg-clip-padding
                border border-solid border-gray-300
                rounded
                transition
                ease-in-out
                m-0
                focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="hari"
                aria-describedby="hari" placeholder="hari" id="hari" name="hari" required value="{{ old('hari') }}">
                    <option value="" selected hidden>Pilih Hari</option>
                    <option value="senin">Senin</option>
                    <option value="selasa">Selasa</option>
                    <option value="rabu">Rabu</option>
                    <option value="kamis">Kamis</option>
                    <option value="jumat">Jumat</option>
                    <option value="sabtu">Sabtu</option>
                    <option value="minggu">Minggu</option>
                </select>
            </div>

            <div class="grid laptop:grid-cols-2 mt-5 gap-5">
                <div>
                    <label for="mulai_jam" class="form-label inline-block mb-2 text-gray-700 dark:text-white">Mulai Jam :</label>
                @error('mulai_jam')
                    <p class="block text-xs font-poppins font-normal text-pink-700 ">{{ $message }}</p>
                @enderror
                <input type="time" name="mulai_jam" id="" step=3600 required
                class="block
                w-full
                px-3
                py-1.5
                text-base
                font-normal
                text-gray-700
                dark:text-white
                dark:bg-gray-800
                focus:dark:bg-gray-800
                focus:dark:text-white
                bg-white bg-clip-padding
                border border-solid border-gray-300
                rounded
                transition
                ease-in-out
                m-0
                focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none">
                </div>

                <div>
                    <label for="hingga_jam" class="form-label inline-block mb-2 text-gray-700 dark:text-white">Hingga Jam :</label>
                @error('hingga_jam')
                    <p class="block text-xs font-poppins font-normal text-pink-700 ">{{ $message }}</p>
                @enderror
                <input type="time" name="hingga_jam" id="" step=3600 required
                class="block
                w-full
                px-3
                py-1.5
                text-base
                font-normal
                text-gray-700
                dark:text-white
                dark:bg-gray-800
                focus:dark:bg-gray-800
                focus:dark:text-white
                bg-white bg-clip-padding
                border border-solid border-gray-300
                rounded
                transition
                ease-in-out
                m-0
                focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none">
                <br>
                <button type="submit" class="
                w-full
                px-6
                py-2.5
                bg-blue-600
                text-white
                font-medium
                text-xs
                leading-tight
                uppercase
                rounded
                shadow-md
                hover:bg-blue-700 hover:shadow-lg
                focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
                active:bg-blue-800 active:shadow-lg
                transition
                duration-150
                ease-in-out">Tambah Jadwal</button>
                </div>
                
            </div>
            
           
         
          
        </form>
    </div>
</div>
<br>

</div>
@endsection