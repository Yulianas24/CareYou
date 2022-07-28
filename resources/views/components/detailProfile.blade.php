{{-- ?: Parent Container Profile --}}
<div class="w-full h-3/4 flex justify-center items-center">
    {{-- ?: Rounded Border --}}
    <div class="h-5/6 w-3/5 border-2 rounded-lg shadow-md flex justify-center items-center">
        {{-- ?: Form Container --}}
        <form action="#" class="h-1/1.1 w-1/1.2 flex justify-between">
            @auth
                {{-- !: Parent Photo Container --}}
                <div class="h-full w-1/1.3 flex justify-center items-center border rounded-xl shadow-lg">
                    {{-- !: Children Photo Container --}}
                    <div class="h-1/1.2 w-1/1.2 flex flex-col items-center justify-between">
                        {{-- !: Photo --}}
                        <figure class="w-full h-3/4 bg-gray-500"></figure>
                        {{-- todo:  Input Photo --}}
                        <div class="w-full">
                            <input type="file" name="" input-photo class="hidden absolute">
                            <button button-input-photo
                                class="w-full py-3 rounded-md font-roboto font-semibold text-blue-902 border border-blue-902 hover:bg-blue-902 hover:text-white">Ubah
                                Foto</button>
                        </div>
                        <p class="text-gray-500 text-sm">Ekstensi file .JPG dan .JPEG</p>
                    </div>
                </div>
                {{-- !: Container InputText --}}
                <div class="h-full w-1/1.3 flex flex-col justify-between">
                    {{-- !: Akun Container --}}
                    <div class="flex flex-col">
                        {{-- todo:  Header --}}
                        <div class="flex flex-col">
                            <h1 class="font-roboto font-semibold text-2xl">Akun</h1>
                            <span class="h-0.5 w-2/5 bg-gray-500"></span>
                        </div>
                        {{-- Text Input Container --}}
                        <div class="flex flex-col ">
                            {{-- todo:  Username --}}
                            <div class="flex w-full justify-between py-1"> <label for="userName">Username</label>
                                <div class="flex justify-start w-7/12">
                                    <input type="text" name="" id="userName"
                                        value="{{ auth()->user()->username }}"
                                        class="bg-transparent border-b-2 border-gray-400 focus:outline-none max-w-[75%]"
                                        disabled dynamis-lenght>
                                    <img src="/asset/icons/edit.svg" alt="edit-icon" class="h-6 pl-2">
                                </div>
                            </div>
                            {{-- todo:  Password --}}
                            <div class="flex w-full justify-between py-1"> <label for="userName">Password</label>
                                <div class="flex justify-start w-7/12">
                                    <input type="password" name="" id="userName"
                                        value="{{ auth()->user()->password }}"
                                        class="bg-transparent border-b-2 border-gray-400 focus:outline-none  max-w-[75%]"
                                        disabled dynamis-lenght>
                                    <img src="/asset/icons/edit.svg" alt="edit-icon" class="h-6 pl-2">
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- !: Biodata Diri Container --}}
                    <div class="flex flex-col">
                        {{-- todo:  Header --}}
                        <div class="flex flex-col">
                            <h1 class="font-roboto font-semibold text-2xl">Biodata Diri</h1>
                            <span class="h-0.5 w-2/5 bg-gray-500"></span>
                        </div>
                        {{-- Text Input Container --}}
                        <div class="flex flex-col ">
                            {{-- todo:  Nama --}}
                            <div class="flex w-full justify-between py-1"> <label for="userName">Nama</label>
                                <div class="flex justify-start w-7/12">
                                    <input type="text" name="" id="userName" value="{{ auth()->user()->name }}"
                                        class="bg-transparent border-b-2 border-gray-400 focus:outline-none max-w-[75%]"
                                        disabled dynamis-lenght>
                                    <img src="/asset/icons/edit.svg" alt="edit-icon" class="h-6 pl-2">
                                </div>
                            </div>
                            {{-- todo:  Tanggal Lahir --}}
                            <div class="flex w-full justify-between py-1"> <label for="userName">Tanggal Lahir</label>
                                <div class="flex justify-start w-7/12">
                                    <input type="text" name="" id="userName"
                                        value="{{ auth()->user()->tanggal_lahir }}"
                                        class="bg-transparent border-b-2 border-gray-400 focus:outline-none max-w-[75%]"
                                        disabled dynamis-lenght>
                                    <img src="/asset/icons/edit.svg" alt="edit-icon" class="h-6 pl-2">
                                </div>
                            </div>
                            {{-- todo:  Jenis Kelamin --}}
                            <div class="flex w-full justify-between py-1"> <label for="userName">Jenis Kelamin</label>
                                <div class="flex justify-start w-7/12">
                                    <input type="text" name="" id="userName"
                                        value="{{ auth()->user()->jenis_kelamin }}"
                                        class="bg-transparent border-b-2 border-gray-400 focus:outline-none  max-w-[75%]"
                                        disabled dynamis-lenght>
                                    <img src="/asset/icons/edit.svg" alt="edit-icon" class="h-6 pl-2">
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- !: Biodata Diri Container --}}
                    <div class="flex flex-col">
                        {{-- todo:  Header --}}
                        <div class="flex flex-col">
                            <h1 class="font-roboto font-semibold text-2xl">Kontak</h1>
                            <span class="h-0.5 w-2/5 bg-gray-500"></span>
                        </div>
                        {{-- Text Input Container --}}
                        <div class="flex flex-col ">
                            {{-- todo:  Email --}}
                            <div class="flex w-full justify-between py-1"> <label for="userName">Email</label>
                                <div class="flex justify-start w-7/12">
                                    <input type="text" name="" id="userName" value="{{ auth()->user()->email }}"
                                        class="bg-transparent border-b-2 border-gray-400 focus:outline-none max-w-[75%]"
                                        disabled dynamis-lenght>
                                    <img src="/asset/icons/edit.svg" alt="edit-icon" class="h-6 pl-2">
                                </div>
                            </div>
                            {{-- todo:  Nomor Hp --}}
                            <div class="flex w-full justify-between py-1"> <label for="userName">Nomor Hp</label>
                                <div class="flex justify-start w-7/12">
                                    <input type="text" name="" id="userName"
                                        value="{{ auth()->user()->nomor_hp }}"
                                        class="bg-transparent border-b-2 border-gray-400 focus:outline-none  max-w-[75%]"
                                        disabled dynamis-lenght>
                                    <img src="/asset/icons/edit.svg" alt="edit-icon" class="h-6 pl-2">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endauth
        </form>
    </div>
</div>
<script src="{{ asset('js/profile.js') }}"></script>
