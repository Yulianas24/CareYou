<div class="absolute -z-50 w-screen h-screen">
    @include('template/templateKonselor')
</div>
<div class="laptop:px-28 w-screen min-h-screen h-fit flex flex-col justify-evenly laptop:justify-center desktop:justify-evenly items-center "
    id="pageKonselor">
    {{-- ?: Container Text --}}
    <figure class="flex justify-between w-full px-2 laptop:w-1/1.2 laptop:mb-20 desktop:mb-0 desktop:mt-10">
        <h1 class="font-roboto font-medium text-3xl border-b-2 border-blue-601 ">Konselor CareYou</h1>
    </figure>
    {{-- ?: Card Container --}}
   <div class="laptop:px-28 w-screen h-fit">
    <div class="overflow-auto w-full">
        <figure class="flex min-w-min h-4/5 justify-evenly items-center">
            @include('/partials/cardKonselor')
        </figure>
    </div>
    <figure class="flex items-center cursor-pointer w-full px-2 laptop:w-1/1.2 justify-end mt-8">
        <a href="/konselor" class="font-roboto font-semibold text-base text-blue-601">Lihat Semua</a>
        <img src="/asset/icons/arrow_back.svg" alt="" class="bg-cover">
    </figure>
   </div>
</div>


<script src="{{ asset('js/navbar.js') }}"></script>
