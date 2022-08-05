{{-- ?: Rounded Card --}}
<div jadwal-konsultasi
    class="hidden rounded-2xl top-24 h-96 w-1/1.2 z-50 bg-white outline outline-gray-300 shadow-lg tablet:w-102 laptop:w-103">
    <div class="flex flex-col w-full h-full p-4">
        {{-- !: Header --}}
        <div class="flex w-full justify-between">
            <h1 class="font-roboto text-xl font-medium">Pilih Waktu Konsultasi</h1>
            <img src="/asset/icons/closeIcon.svg" alt="close icon" class="h-8 pr-2 cursor-pointer" close-pop-up-booking>
        </div>

        {{-- !: Booking Konselor --}}
        
            {{-- Hari --}}
            <div class="flex flex-col">
                <h3 class="font-roboto py-2 text-lg font-medium border-b-2 border-blue-902 w-fit pr-4">Hari</h3>
                <p class="font-roboto text-sm py-2 ">Pilih Hari Konsultasi</p>
                {{-- todo: Jam --}}
                <select name="hari" id="mySelect" class="border-2 border-gray-300 rounded-lg py-2 w-full px-4" onchange="myFunction()" required>
                    <option value="" selected hidden>Pilih hari</option>

                    @foreach ($konselor->jadwal->unique('hari') as $item)
                        <option value="{{ $item->hari }}">{{ $item->hari }}</option>
                    @endforeach
                </select>
                @for ($i = 0; $i < $konselor->jadwal->count(); $i++)
                <p id="{{ $konselor->jadwal[$i]->hari }}_mulai" hidden>{{ $konselor->jadwal[$i]->mulai_jam }}</p>
                <p id="{{ $konselor->jadwal[$i]->hari }}_hingga" hidden>{{ $konselor->jadwal[$i]->hingga_jam }}</p>
                @endfor

            </div>

                

            {{-- Tanggal --}}
            <div class="flex flex-col">
                <h3 class="font-roboto py-2 text-lg font-medium border-b-2 border-blue-902 w-fit pr-4">Jam</h3>
                <p class="font-roboto text-sm py-2 ">Pilih Jam Konsultasi</p>
                {{-- todo: Tanggal --}}
                <select name="jam" id="jam" class="border-2 border-gray-300 rounded-lg py-2 w-full px-4" required>
                    {{-- <option value="" selected hidden>Pilih jam</option>
                        @for ($i = $konselor->jadwal[0]->mulai_jam; $i < $konselor->jadwal[0]->hingga_jam; $i++)
                            @if ($i<10)
                            <option value="{{ $i }}">0{{ $i }}:00</option>
                            @else
                            <option value="{{ $i }}">{{ $i }}:00</option>
                            @endif
                        @endfor --}}
                </select>
                
            </div>
            <button type="submit" class="font-roboto bg-blue-902 py-2 my-2 rounded-lg text-white">Pilih Waktu</button>
      
    </div>
</div>


<script>
    function myFunction() {
        var x = document.getElementById("mySelect").value;
        var select = document.getElementById("jam");  
        switch(x) {
        case 'Senin':
            while (select.options.length > 0) {
                select.remove(0);
            }
            var y = document.getElementById("Senin_mulai").innerHTML;
            var z = document.getElementById("Senin_hingga").innerHTML;
            break;
        case 'Selasa':
            var y = document.getElementById("Selasa_mulai").innerHTML;
            var z = document.getElementById("Selasa_hingga").innerHTML;
            break;
        case 'Rabu':
            var y = document.getElementById("Rabu_mulai").innerHTML;
            var z = document.getElementById("Rabu_hingga").innerHTML;
    
            break;
        case 'Kamis':
            var y = document.getElementById("Kamis_mulai").innerHTML;
            var z = document.getElementById("Kamis_hingga").innerHTML;
            break;
        case 'Jumat':
            var y = document.getElementById("Jumat_mulai").innerHTML;
            var z = document.getElementById("Jumat_hingga").innerHTML;
            break;
        case 'Sabtu':
            var y = document.getElementById("Sabtu_mulai").innerHTML;
            var z = document.getElementById("Sabtu_hingga").innerHTML;
            break;
        case 'Minggu':
            var y = document.getElementById("Minggu_mulai").innerHTML;
            var z = document.getElementById("Minggu_hingga").innerHTML;
            break;
        default:
            
        }

        while (select.options.length > 0) {
                select.remove(0);
            }
        var i=parseInt(y);
        for(i;i<=z;i++){  
            if (i<10) {
                select.options[select.options.length] = new Option('0'+i+':00',i); 
            } else {
                select.options[select.options.length] = new Option(i+':00',i);  
            }
            
        } 
        
    }

    
</script>
