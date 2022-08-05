{{-- ?: Rounded Card --}}
<div opsi-konsultasi class="rounded-2xl top-24 h-94 w-1/1.2 z-50 bg-white outline outline-gray-300 shadow-lg">
    <div class="flex flex-col w-full h-full mt-4 p-2">
        {{-- !: Header --}}
        <div class="flex w-full justify-between">
            <h1 class="font-roboto text-xl border-b-2 border-blue-902 pr-4">Pilih Konsultasi</h1>
            <img src="/asset/icons/closeIcon.svg" alt="close icon" class="h-8 pr-2 cursor-pointer" close-pop-up-booking>
        </div>

        {{-- !: Metode Konsultasi --}}
        <div class="flex justify-between w-1/1.2 mt-8">
            {{-- todo: Online --}}
            <div class="flex flex-col w-[48%]">
                <h3 class="font-roboto my-2 text-lg font-bold border-b-2 border-blue-902">Online</h3>
                <p class="font-roboto my-2">Via Chat, Voice, Video Call</p>
                <input type="button" name="metode" value="online" class="font-roboto my-2 bg-blue-902 py-3 px-1 text-white rounded-lg hover:cursor-pointer">Pilih Konsultasi
                    Online</input>
            </div>
            <div class="flex flex-col w-[48%]">
                <h3 class="font-roboto my-2 text-lg font-bold border-b-2 border-blue-902">Offline</h3>
                <p class="font-roboto my-2">Bertemu langsung dengan konselor</p>
                <input type="text" name="metode" readonly value="offline" booking-konselor class="text-center font-roboto my-2 bg-blue-902 py-3 px-1 text-white rounded-lg hover:cursor-pointer">Pilih
                    Konsultasi
                    Online</input>
            </div>
        </div>
    </div>
</div>
