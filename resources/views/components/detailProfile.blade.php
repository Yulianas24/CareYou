{{-- ?: Parent Container Profile --}}
<div class="w-full h-3/4 flex justify-center items-center">
     {{-- ?: Form Container --}}
 
    {{-- ?: Rounded Border --}}
    <div class="h-5/6 w-3/5 border-2 rounded-lg shadow-md flex justify-center items-center">
       
        <form action="/profile/{{ $user->username }}" method="post"  enctype="multipart/form-data" class="h-1/1.1 w-1/1.2 flex justify-between">
            @method('put')
            @csrf
                {{-- !: Parent Photo Container --}}
                <div class="h-full w-1/1.3 flex justify-center items-center border rounded-xl shadow-lg">
                    {{-- !: Children Photo Container --}}
                    <div class="h-1/1.2 w-1/1.2 flex flex-col items-center justify-between">
                        {{-- !: Photo --}}
                        <input type="hidden" name="oldImage" value = "{{ $user->image }}">
                        @if ($user->image)
                        <figure class="w-full h-3/4 bg-white">
                            <img src="{{ asset('storage/' . $user->image) }}" class="imgPreview">
                        </figure>
                        @else
                        <figure class=" w-full h-3/4 bg-white">
                            <img class="imgPreview" src="" alt="">    
                        </figure>
                        @endif
                        {{-- todo:  Input Photo --}}

                        {{-- <div class="w-full">
                            <input type="file" name="image" id="image" input-photo class="hidden absolute" >
                            <button  button-input-photo
                                class="w-full py-3 rounded-md font-roboto font-semibold text-blue-902 border border-blue-902 hover:bg-blue-902 hover:text-white">Ubah
                                Foto</button>
                        </div> --}}

                        <input type="file" name="image" id="image" input-photo class="hidden absolute" onchange="previewImage()">
                            <a  button-input-photo id="image"
                                class="w-full text-center cursor-pointer py-3 rounded-md font-roboto font-semibold text-blue-902 border border-blue-902 hover:bg-blue-902 hover:text-white" onchange="previewImage()">Ubah
                                Foto</a>
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
                            <div class="flex w-full justify-between py-2"> <label for="userName">Username</label>
                                <div class="flex justify-start w-7/12">
                                    <input type="text" name="username" id="userName"
                                        value="{{ $user->username }}"
                                        class="bg-transparent duration-500 focus:outline-none  max-w-[75%]" disabled
                                        disabled dynamis-lenght>
                                    <img src="/asset/icons/edit.svg" alt="edit-icon" class="h-6 pl-2 cursor-pointer"
                                        edit-button>
                                </div>
                            </div>
                            {{-- todo:  Password --}}
                            <div class="flex w-full justify-between py-2"> <label for="userName">Password</label>
                                <div class="flex justify-start w-7/12">
                                    <a href="#" class="italic font-semibold text-blue-700">ubah password</a>
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
                            <div class="flex w-full justify-between py-2"> <label for="userName">Nama</label>
                                <div class="flex justify-start w-7/12">
                                    <input type="text" name="name" id="userName" value="{{ $user->name }}"
                                        class="bg-transparent duration-500 focus:outline-none  max-w-[75%]"
                                        disabled disabled dynamis-lenght>
                                    <img src="/asset/icons/edit.svg" alt="edit-icon" class="h-6 pl-2 cursor-pointer"
                                        edit-button>
                                </div>
                            </div>
                            {{-- todo:  Tanggal Lahir --}}
                            <div class="flex w-full justify-between py-2"> <label for="userName">Tanggal Lahir</label>
                                <div class="flex justify-start w-7/12">
                                    <input type="date" name="tanggal_lahir" id="userName"
                                        value="{{ $user->tanggal_lahir }}"
                                        class="bg-transparent  border-gray-400 focus:outline-none">
                                    {{-- <img src="/asset/icons/edit.svg" alt="edit-icon" class="h-6 pl-2 cursor-pointer"
                                        edit-button> --}}
                                </div>
                            </div>
                            {{-- todo:  Jenis Kelamin --}}
                            <div class="flex w-full justify-between py-2"> <label for="userName">Jenis Kelamin</label>
                                <div class="flex justify-start w-7/12">
                                    <select name="jenis_kelamin" id="">
                                        @if ($user->jenis_kelamin !=null)
                                        
                                        <option value="laki_laki" {{ ($user->jenis_kelamin == 'laki-laki') ? 'selected' : '' }}>Laki-laki</option>
                                        <option value="perempuan" {{ ($user->jenis_kelamin == 'perempuan') ? 'selected' : '' }}>Perempuan</option>
                                        @else
                                        <option value="none" selected hidden>Pilih</option>
                                        <option value="laki_laki">Laki-laki</option>
                                        <option value="perempuan">Perempuan</option>
                                        @endif
                                        
                                    </select>

                                    {{-- <input type="text" name="" id="userName"
                                        value="{{ $user->jenis_kelamin }}"
                                        class="bg-transparent duration-500 focus:outline-none  max-w-[75%]" disabled
                                        dynamis-lenght>
                                    <img src="/asset/icons/edit.svg" alt="edit-icon" class="h-6 pl-2 cursor-pointer"
                                        edit-button> --}}
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- !: Kontak Container --}}
                    <div class="flex flex-col">
                        {{-- todo:  Header --}}
                        <div class="flex flex-col">
                            <h1 class="font-roboto font-semibold text-2xl">Kontak</h1>
                            <span class="h-0.5 w-2/5 bg-gray-500"></span>
                        </div>
                        {{-- Text Input Container --}}
                        <div class="flex flex-col ">
                            {{-- todo:  Email --}}
                            <div class="flex w-full justify-between py-2"> <label for="userName">Email</label>
                                <div class="flex justify-start w-7/12">
                                    <input type="text" name="email" id="userName"
                                        value="{{ $user->email }}"
                                        class="bg-transparent duration-500 focus:outline-none  max-w-[75%]" disabled
                                        disabled dynamis-lenght>
                                    <img src="/asset/icons/edit.svg" alt="edit-icon" class="h-6 pl-2 cursor-pointer"
                                        edit-button>
                                </div>
                            </div>
                            {{-- todo:  Nomor Hp --}}
                            <div class="flex w-full justify-between py-2"> <label for="userName">Nomor HP</label>
                                <div class="flex justify-start w-7/12">
                                    <input type="text" name="nomor_hp" id="userName"
                                        value="{{ $user->nomor_hp }}"
                                        class="bg-transparent duration-500 focus:outline-none  max-w-[75%]" disabled
                                        dynamis-lenght>
                                    <img src="/asset/icons/edit.svg" alt="edit-icon" class="h-6 pl-2 cursor-pointer"
                                        edit-button>
                                </div>
                            </div>

                        </div>
                        <button type="submit" class="w-full text-center cursor-pointer rounded-md font-roboto font-semibold text-blue-902 border border-blue-902 hover:bg-blue-902 hover:text-white">Submit</button>

                    </div>
                    
                </div>
        </form>
    </div>
</div>
<script src="{{ asset('js/profile.js') }}"></script>
