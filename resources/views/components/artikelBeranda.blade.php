<div id="pageArtikel" class="min-h-screen w-screen px-2 flex-col desktop:px-16">
    <h1 class="font-roboto text-2xl border-b-2 border-blue-601 w-fit pb-3 pr-4">Artikel</h1>
    <div class="w-full flex justify-center">
        <div class="grid grid-cols-1 tablet:grid-cols-2 desktop:grid-cols-3">
            {{-- !: Card Stress --}}
            <div class="relative m-8 h-fit">
                <a href="/posts?category=stress">
                    
                    <img image-gendre src="\asset\img\stress.png" alt="" class="rounded-lg z-10 bg-cover w-96 brightness-[0.4]">
                    <h2
                        class="font-roboto text-3xl font-bold absolute left-8 top-1/2 z-30 text-white border-b-2 border-white pr-20">
                        Stress
                    </h2>
                </a>
            </div>
            {{-- !: Card Depresi --}}
            <div class="relative m-8 h-fit">
                <a href="/posts?category=depresi">
                    
                    <img image-gendre src="\asset\img\depresi.png" alt="" class="rounded-lg z-10 bg-cover w-96 brightness-[0.4]">
                    <h2
                        class="font-roboto text-3xl font-bold absolute left-8 top-1/2 z-30 text-white border-b-2 border-white pr-20">
                        Depresi
                    </h2>
                </a>
            </div>
            {{-- !: Card Kecemasan --}}
            <div class="relative m-8 h-fit">
                <a href="/posts?category=kecemasan">
                    
                    <img image-gendre src="\asset\img\kecemasan.png" alt=""
                        class="rounded-lg z-10 bg-cover w-96 brightness-[0.4]">
                    <h2
                        class="font-roboto text-3xl font-bold absolute left-8 top-1/2 z-30 text-white border-b-2 border-white pr-20">
                        Kecemasan
                    </h2>
                </a>
            </div>
            {{-- !: Card Toxic RelationShip --}}
            <div class="relative m-8 h-fit">
                <a href="/posts?category=toxic relationship">
                    
                    <img image-gendre src="\asset\img\toxic_relationship.png" alt=""
                        class="rounded-lg z-10 bg-cover w-96 brightness-[0.4]">
                    <h2
                        class="font-roboto text-3xl font-bold absolute left-8 top-1/2 z-30 text-white border-b-2 border-white pr-12">
                        Toxic RelationShip
                    </h2>
                </a>
            </div>
            {{-- !: Card Quarter Life Crisis --}}
            <div class="relative m-8 h-fit">
                <a href="/posts?category=toxic relationship">
                    
                    <img image-gendre src="\asset\img\quarter-life.png" alt=""
                        class="rounded-lg z-10 bg-cover w-96 brightness-[0.4]">
                    <h2
                        class="font-roboto text-3xl font-bold absolute left-8 top-1/2 z-30 text-white border-b-2 border-white pr-12">
                        Quarter Life Crisis
                    </h2>
                </a>
            </div>
            {{-- !: Card Manajemen Emosi --}}
            <div class="relative m-8 h-fit">
                <a href="/posts?category=toxic relationship">
                    
                    <img image-gendre src="\asset\img\manajemen-emosi.png" alt=""
                        class="rounded-lg z-10 bg-cover w-96 brightness-[0.4]">
                    <h2
                        class="font-roboto text-3xl font-bold absolute left-8 top-1/2 z-30 text-white border-b-2 border-white pr-12">
                        Manajemen Emosi
                    </h2>
                </a>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('js/artikelBeranda.js') }}"></script>
