{{-- ?: Rounded Card --}}
<div jadwal-konsultasi
    class="hidden rounded-2xl top-24 h-96 w-1/1.2 z-50 bg-white outline outline-gray-300 shadow-lg tablet:w-102 laptop:w-103">
    <div class="flex flex-col w-full h-full p-4">
        {{-- !: Header --}}
        <div class="flex w-full justify-between">
            <h1 class="font-roboto text-xl font-medium">Buat Janji Konsultasi</h1>
            <img src="/asset/icons/closeIcon.svg" alt="close icon" class="h-8 pr-2 cursor-pointer" close-pop-up-booking>
        </div>

        {{-- !: Booking Konselor --}}

        {{-- Hari --}}
        <div class="flex flex-col">
            <h3 class="font-roboto py-2 text-lg font-medium border-b-2 border-blue-902 w-fit pr-4">Hari</h3>
            <p class="font-roboto text-sm py-2 ">Pilih Hari Konsultasi</p>
            {{-- todo: Jam --}}
            <select name="hari" id="mySelect" class="border-2 border-gray-300 rounded-lg py-2 w-full px-4"
                onchange="myFunction()" required>
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
            <select list-time-konselor name="jam" id="jam"
                class="border-2 border-gray-300 rounded-lg py-2 w-full px-4" required>
            </select>

        </div>
        <button booking-konsultasi type="submit" class="font-roboto bg-blue-902 py-2 my-2 rounded-lg text-white">Pilih
            Waktu</button>

    </div>
</div>


<script>
    var jadwal = @json($jadwal);

    function myFunction() {


        var x = document.getElementById("mySelect").value;
        var select = document.getElementById("jam");
        while (select.options.length > 0) {
            select.remove(0);
        }

        jadwal.forEach(element => {
            if (x === element.hari) {
                var i = element.mulai_jam;
                for (i; i <= element.hingga_jam; i++) {
                    if (i < 10) {
                        select.options[select.options.length] = new Option('0' + i + ':00', i);
                    } else {
                        select.options[select.options.length] = new Option(i + ':00', i);
                    }
                }
            }
        });
    }
</script>
