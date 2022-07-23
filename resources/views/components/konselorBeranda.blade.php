<div class="absolute -z-50 w-screen h-screen">
    @include('template/templateKonselor')
</div>
<div class="w-screen h-screen flex flex-col justify-evenly items-center " id="pageKonselor">
    {{-- ?: Container Text --}}
    <figure class="flex justify-between w-10/12 mt-20">
        <figcaption class="flex flex-col">
            <h1 class="font-roboto font-medium text-3xl">Konselor CareYou</h1>
            <span class="h-0.5 w-75 bg-blue-902"></span>
        </figcaption>
        <figcaption class="flex items-center cursor-pointer">
            <a href="#pageHome" class="font-roboto font-semibold text-base text-blue-902">Lihat Semua</a>
            <img src="/asset/icons/arrow_back.svg" alt="" class="bg-cover">
        </figcaption>
    </figure>

    {{-- ?: Card Container --}}
    <figure class="flex w-full h-4/5 justify-evenly items-center">
        @include('/partials/cardKonselor')
    </figure>
</div>
