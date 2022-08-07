<div class="min-h-screen w-screen px-2 flex-col desktop:px-16">
    <h1 class="font-roboto text-2xl border-b-2 border-blue-601 w-fit pb-3 pr-4">Artikel</h1>
    <div class="w-full flex justify-center">
        <div class="flex justify-evenly flex-wrap w-full min-h-fit desktop:w-5/6">
            {{-- !: Card Stress --}}
            <div class="relative m-10">
                <a href="/posts?category=stress">
                    <div wrap-image class="bg-gray-800/70 z-20 absolute rounded-lg"></div>
                    <img image-gendre src="\asset\img\stress.jpg" alt="" class="rounded-lg z-10 bg-cover w-96">
                    <h2
                        class="font-roboto text-3xl font-bold absolute left-8 top-1/2 z-30 text-white border-b-2 border-white pr-20">
                        Stress
                    </h2>
                </a>
            </div>
            {{-- !: Card Depresi --}}
            <div class="relative m-10">
                <a href="/posts?category=depresi">
                    <div wrap-image class="bg-gray-800/70 z-20 absolute rounded-lg"></div>
                    <img image-gendre src="\asset\img\depresi.jpg" alt="" class="rounded-lg z-10 bg-cover w-96">
                    <h2
                        class="font-roboto text-3xl font-bold absolute left-8 top-1/2 z-30 text-white border-b-2 border-white pr-20">
                        Depresi
                    </h2>
                </a>
            </div>
            {{-- !: Card Kecemasan --}}
            <div class="relative m-10">
                <a href="/posts?category=kecemasan">
                    <div wrap-image class="bg-gray-800/70 z-20 absolute rounded-lg"></div>
                    <img image-gendre src="\asset\img\kecemasan.jpg" alt=""
                        class="rounded-lg z-10 bg-cover w-96">
                    <h2
                        class="font-roboto text-3xl font-bold absolute left-8 top-1/2 z-30 text-white border-b-2 border-white pr-20">
                        Kecemasan
                    </h2>
                </a>
            </div>
            {{-- !: Card Toxic RelationShip --}}
            <div class="relative m-10">
                <a href="/posts?category=toxic relationship">
                    <div wrap-image class="bg-gray-800/70 z-20 absolute rounded-lg"></div>
                    <img image-gendre src="\asset\img\toxic_relationship.jpg" alt=""
                        class="rounded-lg z-10 bg-cover w-96">
                    <h2
                        class="font-roboto text-3xl font-bold absolute left-8 top-1/2 z-30 text-white border-b-2 border-white pr-20">
                        Toxic RelationShip
                    </h2>
                </a>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('js/artikelBeranda.js') }}"></script>
