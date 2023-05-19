<div class="h-screen w-screen" id="pageHome">

    {{-- ?: Image Background --}}
    <img src="/asset/img/backgroundHome.png" alt="backgroundBeranda" srcset=""
        class="object-cover -z-50 h-screen w-screen absolute bg-scroll brightness-[0.2]">
    {{-- ?: Container Intro --}}
    <figure class="flex flex-col w-full h-full justify-center items-center">
        {{-- ?: Sub Container --}}
        <div class="relative w-[90vw] laptop:w-105 laptop:h-80">
            {{-- ?: Text Header --}}
            <figcaption
                class="text-white font-roboto font-semibold text-center text-2xl tablet:text-5xl laptop:text-6xl">Cek
                Kesehatan
                Mentalmu
                dan
                <span class="text-yellow-901">"</span>Konsultasi<span class="text-yellow-901">"</span> pada
                Konselor
                Terpercaya
                <img src="/asset/theme/Vector1.svg" alt="Image Text Header" srcset=""
                    class="hidden absolute right-0 top-16 laptop:block">
            </figcaption>
            <figcaption class="text-white text-center font-poppins pt-8">Cek kesehatan mentalmu dengan mudah dan praktis
            </figcaption>
        </div>
        {{-- ?: Coba Sekarang --}}
        <button onclick="showPopup()"
            class="bg-blue-902 text-white flex items-center justify-center w-80 h-14 rounded-lg cursor-pointer hover:bg-blue-900">
            Coba Sekarang
            <img src="/asset/icons/rightArrow.svg" alt="arowRight" srcset="" class="h-5 pl-1">
        </button>
    </figure>
</div>
<div class="w-screen h-screen fixed bg-black/60 top-0 hidden grid" id="popup-coba-sekarang">
    <div class="w-screen h-screen bg-transparent fixed top-0" onclick="hidePopup()">

    </div>
    <div class="w-full max-w-[400px] h-fit bg-white/100 rounded-md z-10 m-auto px-3 py-5 grid justify-items-center content-start">
        <h1 class="font-bold text-[20px] pt-5">Apa yang ingin kamu lakukan?</h1>
        <p class="text-[#737373]">Pilih salah satu button dibawah ini</p>
        <div class="w-full flex justify-evenly gap-5 mt-10">
            <a href="/konselor" class="bg-[#0661B0] text-white rounded-md px-3 py-1">Konsultasi</a>
            <a href="/assessment" class="bg-[#0661B0] text-white rounded-md px-3 py-1">Ukur Kesehatan Mentalmu</a>
        </div>
    </div>

</div>
<script>
    function showPopup() {
        document.getElementById('popup-coba-sekarang').classList.remove("hidden");
    }
    function hidePopup() {
        document.getElementById('popup-coba-sekarang').classList.add("hidden");
    }
</script>
