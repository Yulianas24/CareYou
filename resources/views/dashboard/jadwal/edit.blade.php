@extends('layouts/dashboard')

@section('dashboard')
<div class="overflow-auto h-screen  px-4 md:px-6">

<h1 class="text-4xl  font-semibold text-gray-800 dark:text-white">
    Jadwal
</h1>
<div class="w-32 h-1 bg-blue-700 dark:bg-blue-800 mt-3 mb-12"></div>

<div class="grid w-full h-auto justify-items-center">

    {{-- Tambah Jadwal --}}
    <div class="w-1/3 h-min dark:bg-gray-900 rounded-2xl shadow-2xl">
        <h1 class="text-2xl  text-center font-semibold text-gray-800 dark:text-white mt-5">
            Ubah Jadwal
        </h1>
        <form action="/dashboard/jadwal/{{ $jadwal->id }}" method="post" class="p-10">
          @method('put')
            @csrf
            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
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
                    <option value="Senin" {{ ($jadwal->hari == "Senin")? 'selected': '' }}>Senin</option>
                    <option value="Selasa" {{ ($jadwal->hari == "Selasa")? 'selected': '' }}>Selasa</option>
                    <option value="Rabu" {{ ($jadwal->hari == "Rabu")? 'selected': '' }}>Rabu</option>
                    <option value="Kamis" {{ ($jadwal->hari == "Kamis")? 'selected': '' }}>Kamis</option>
                    <option value="Jumat" {{ ($jadwal->hari == "Jumat")? 'selected': '' }}>Jumat</option>
                    <option value="Sabtu" {{ ($jadwal->hari == "Sabtu")? 'selected': '' }}>Sabtu</option>
                    <option value="Minggu" {{ ($jadwal->hari == "Minggu")? 'selected': '' }}>Minggu</option>
                </select>

            </div>

            <div class="grid laptop:grid-cols-2 mt-5 gap-8">
                <div>
                    <label for="mulai_jam" class="form-label inline-block mb-2 text-gray-700 dark:text-white">Mulai Jam :</label>
                    @error('mulai_jam')
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
                    aria-describedby="mulai_jam" placeholder="mulai_jam" id="mulai_jam" name="mulai_jam" required value="{{ old('mulai_jam') }}">
                        <option value="" selected hidden>Pilih jam</option>
                        @for ($i = 0; $i < 24; $i++)
                            @if ($i<10)
                            <option value="{{ $i }}" {{ ($jadwal->mulai_jam == $i)? 'selected': '' }}>0{{ $i }}:00</option>
                            @else
                            <option value="{{ $i }}" {{ ($jadwal->mulai_jam == $i)? 'selected': '' }}>{{ $i }}:00</option>
                            @endif
                        @endfor
                        
                        
                    </select>
                </div>

                <div>
                    <label for="hingga_jam" class="form-label inline-block mb-2 text-gray-700 dark:text-white">Hingga Jam :</label>
                @error('hingga_jam')
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
                    aria-describedby="hingga_jam" placeholder="hingga_jam" id="hingga_jam" name="hingga_jam" required value="{{ old('hingga_jam') }}">
                        <option value="" selected hidden>Pilih jam</option>
                        @for ($i = 0; $i < 24; $i++)
                            @if ($i<10)
                            <option value="{{ $i }}" {{ ($jadwal->hingga_jam == $i)? 'selected': '' }}>0{{ $i }}:00</option>
                            @else
                            <option value="{{ $i }}" {{ ($jadwal->hingga_jam == $i)? 'selected': '' }}>{{ $i }}:00</option>
                            @endif
                        @endfor
                        
                        
                    </select>
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