{{-- ?: Parent Container Profile --}}
<div class="w-full min-h-screen flex justify-center items-center">
    {{-- ?: Form Container --}}

    {{-- ?: Rounded Border --}}
    <div class="w-full m-2 border-2 rounded-lg shadow-md flex justify-center items-center desktop:w-2/3">
        <form action="/profile/{{ $user->username }}" method="post" enctype="multipart/form-data"
            class="min-h-full w-full flex-col flex items-center justify-between py-3 tablet:flex-row">
            @method('put')
            @csrf
            {{-- !: Parent Photo Container --}}
            <div
                class="h-102 w-1/1.1 flex justify-evenly items-center p-2 rounded-xl shadow-lg tablet:w-3/4 tablet:mx-3">
                {{-- !: Children Photo Container --}}
                <div class="h-1/1.1 w-1/1.2 flex flex-col items-center justify-between mt-3 tablet:mt-0>
                    {{-- !: Photo --}}
                    <input type="hidden"
                    name="oldImage" value="{{ $user->image }}">
                    @if ($user->image)
                        <picture class="w-full h-full flex justify-center items-center bg-white">
                            <img src="{{ asset('storage/' . $user->image) }}" class="imgPreview max-h-full">
                        </picture>
                    @else
                        <picture class=" w-full h-full flex justify-center items-center bg-white">
                            <img class="imgPreview max-h-full" src="" alt="">
                        </picture>
                    @endif
                    {{-- todo:  Input Photo --}}
                    <input type="file" name="image" id="image" input-photo class="hidden absolute"
                        onchange="previewImage()">
                    @error('image')
                        <p class="block text-xs font-poppins font-normal text-pink-700 ">{{ $message }}</p>
                    @enderror
                    <a button-input-photo id="image"
                        class="w-full text-center cursor-pointer py-3 rounded-md font-roboto font-semibold text-blue-902 border border-blue-902 hover:bg-blue-902 hover:text-white"
                        onchange="previewImage()">Ubah
                        Foto</a>
                    <p class="text-gray-500 text-sm">Ekstensi file .JPG dan .JPEG</p>
                </div>
            </div>
            {{-- !: Container InputText --}}
            <div class="h-full w-full flex flex-col justify-between p-3">
                {{-- !: Akun Container --}}
                <div class="flex flex-col my-3">
                    {{-- todo:  Header --}}
                    <h1 class="font-roboto font-semibold text-2xl border-b-2 border-gray-500 w-fit pr-5">Akun</h1>
                    {{-- Text Input Container --}}
                    <div class="flex flex-col ">
                        {{-- todo:  Username --}}
                        <div class="flex w-full justify-between py-2"> <label for="userName">Username</label>
                            @error('username')
                                <p class="block text-xs font-poppins font-normal text-pink-700 ">{{ $message }}</p>
                            @enderror
                            <div class="flex justify-start w-7/12">
                                <input type="text" name="username" id="userName" value="{{ $user->username }}"
                                    class="bg-transparent duration-500 focus:outline-none min-w-[20px]  max-w-[75%]"
                                    dynamis-lenght disabled=true>
                                <img src="/asset/icons/edit.svg" alt="edit-icon" class="h-6 cursor-pointer" edit-button>
                            </div>
                        </div>
                        {{-- todo:  Password --}}
                        <div class="flex w-full justify-between py-2"> <label for="userName">Password</label>
                            <div class="flex justify-start w-7/12">
                                <a href="/ubahPassword" class="italic font-semibold text-blue-700">ubah password</a>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- !: Biodata Diri Container --}}
                <div class="flex flex-col my-3">
                    {{-- todo:  Header --}}
                    <h1 class="font-roboto font-semibold text-2xl border-b-2 border-gray-500 w-fit pr-5">Biodata
                        Diri
                    </h1>
                    {{-- Text Input Container --}}
                    <div class="flex flex-col ">
                        {{-- todo:  Nama --}}
                        <div class="flex w-full justify-between py-2"> <label for="userName">Nama</label>
                            @error('name')
                                <p class="block text-xs font-poppins font-normal text-pink-700 ">{{ $message }}</p>
                            @enderror
                            <div class="flex justify-start w-7/12">
                                <input type="text" name="name" id="userName" value="{{ $user->name }}"
                                    class="bg-transparent duration-500 focus:outline-none min-w-[20px]  max-w-[75%]"
                                    dynamis-lenght disabled=true>
                                <img src="/asset/icons/edit.svg" alt="edit-icon" class="h-6 cursor-pointer" edit-button>
                            </div>
                        </div>
                        {{-- todo:  Tanggal Lahir --}}
                        <div class="flex w-full justify-between py-2"> <label for="userName">Tanggal Lahir</label>
                            @error('tanggal_lahir')
                                <p class="block text-xs font-poppins font-normal text-pink-700 ">{{ $message }}</p>
                            @enderror
                            <div class="flex justify-start w-7/12">
                                <input type="date" name="tanggal_lahir" id="userName"
                                    value="{{ $user->tanggal_lahir }}"
                                    class="bg-transparent  border-gray-400 focus:outline-none">

                            </div>
                        </div>
                        {{-- todo:  Jenis Kelamin --}}
                        <div class="flex w-full justify-between py-2"> <label for="userName">Jenis Kelamin</label>
                            @error('jenis_kelamin')
                                <p class="block text-xs font-poppins font-normal text-pink-700 ">{{ $message }}</p>
                            @enderror
                            <div class="flex justify-start w-7/12">
                                <div class="flex relative">
                                    <select name="jenis_kelamin" id=""
                                        class="font-poppins appearance-none border-b-2 border-gray-400 rounded-none focus:outline-none ">
                                        @if ($user->jenis_kelamin != null)
                                            <option value="laki-laki"
                                                {{ $user->jenis_kelamin == 'laki-laki' ? 'selected' : '' }}>Laki-laki
                                            </option>
                                            <option value="perempuan"
                                                {{ $user->jenis_kelamin == 'perempuan' ? 'selected' : '' }}>Perempuan
                                            </option>
                                        @else
                                            <option value="none" selected hidden>Pilih</option>
                                            <option value="laki_laki">Laki-laki</option>
                                            <option value="perempuan">Perempuan</option>
                                        @endif
                                    </select>
                                    <img src="/asset/icons/arrowDown.svg" alt="arroowDown" class="absolute right-0 h-5">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- !: Kontak Container --}}
                <div class="flex flex-col my-3">
                    {{-- todo:  Header --}}
                    <h1 class="font-roboto font-semibold text-2xl border-b-2 border-gray-500 w-fit pr-5">Kontak</h1>
                    {{-- Text Input Container --}}
                    <div class="flex flex-col ">
                        {{-- todo:  Email --}}
                        <div class="flex w-full justify-between py-2"> <label for="userName">Email</label>
                            @error('email')
                                <p class="block text-xs font-poppins font-normal text-pink-700 ">{{ $message }}</p>
                            @enderror
                            <div class="flex justify-start w-7/12">
                                <input type="text" name="email" id="userName" value="{{ $user->email }}"
                                    class="bg-transparent duration-500 focus:outline-none min-w-[20px]  max-w-[75%]"
                                    dynamis-lenght disabled=true>
                                <img src="/asset/icons/edit.svg" alt="edit-icon" class="h-6 cursor-pointer"
                                    edit-button>
                            </div>
                        </div>
                        {{-- todo:  Nomor Hp --}}
                        <div class="flex w-full justify-between py-2"> <label for="userName">Nomor HP</label>
                            @error('nomor_hp')
                                <p class="block text-xs font-poppins font-normal text-pink-700 ">{{ $message }}</p>
                            @enderror
                            <div class="flex justify-start w-7/12">
                                <input type="text" name="nomor_hp" id="userName" value="{{ $user->nomor_hp }}"
                                    class="bg-transparent duration-500 focus:outline-none min-w-[20px]  max-w-[75%]"
                                    dynamis-lenght disabled=true>
                                <img src="/asset/icons/edit.svg" alt="edit-icon" class="h-6 pl-2 cursor-pointer"
                                    edit-button>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- todo: Button submit --}}
                <button type="submit"
                    class="w-full py-3 text-center cursor-pointer rounded-md font-roboto font-semibold duration-300 text-blue-902 border border-blue-902 hover:bg-blue-902 hover:text-white">Submit</button>
            </div>
        </form>
    </div>
</div>
<script src="{{ asset('js/profile.js') }}"></script>
