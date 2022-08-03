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
        <form action="" class="flex flex-col justify-evenly h-full">
            {{-- Hari --}}
            <div class="flex flex-col">
                <h3 class="font-roboto py-2 text-lg font-medium border-b-2 border-blue-902 w-fit pr-4">Hari</h3>
                <p class="font-roboto text-sm py-2 ">Pilih Hari Konsultasi</p>
                {{-- todo: Jam --}}
                <select name="" id="" class="border-2 border-gray-300 rounded-lg py-2 w-full px-4">
                    <option value="1">1</option>
                    <option value="1">1</option>
                    <option value="1">1</option>
                </select>
            </div>

            {{-- Tanggal --}}
            <div class="flex flex-col">
                <h3 class="font-roboto py-2 text-lg font-medium border-b-2 border-blue-902 w-fit pr-4">Jam</h3>
                <p class="font-roboto text-sm py-2 ">Pilih Jam Konsultasi</p>
                {{-- todo: Tanggal --}}
                <select name="" id="" class="border-2 border-gray-300 rounded-lg py-2 w-full px-4">
                    <option value="1">1</option>
                    <option value="1">1</option>
                    <option value="1">1</option>
                </select>
            </div>
            <button type="submit" class="font-roboto bg-blue-902 py-2 my-2 rounded-lg text-white">Pilih Waktu</button>
        </form>
    </div>
</div>
