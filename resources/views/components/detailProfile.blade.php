{{-- ?: Parent Container Profile --}}
<div class="w-full h-3/4 flex justify-center items-center">
    {{-- ?: Rounded Border --}}
    <div class="h-5/6 w-3/5 border-2 rounded-lg shadow-md flex justify-center items-center">
        {{-- ?: Form Container --}}
        <form action="#" class="h-1/1.1 w-1/1.2 flex justify-between">
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
                    <p>Ekstensi file .JPG dan .JPEG</p>
                </div>
            </div>
            {{-- !: --}}
            <div class="h-full w-1/1.3 flex flex-col bg-red-300"></div>
        </form>
    </div>
</div>
<script src="{{ asset('js/profile.js') }}"></script>
