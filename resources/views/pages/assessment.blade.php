@extends('layouts.pages')

@section('container')
    <div class="min-h-screen w-full flex justify-center">
        <div class="w-full flex flex-col items-start justify-center laptop:w-1/2">
            <div class="flex flex-col  items-center space-y-4 w-fit mx-auto">
                <h1 class="text-2xl w-fit font-bold"><span>Ketahui Lebih Awal </span>
                    <span class="text-blue-601">Kesehatan Mental </span> <span>Anda</span>
                </h1>
                <p class="">Ini merupakan kuisioner singkat untuk mengetahui kesehatan mentalmu. Kamu bisa
                    mengetahui
                    hasilnya dengan cepat dan bisa konsultasi dengan konselor CareYou. Jawabanmu bersifat rahasia</p>
            </div>
            <div class="grid grid-cols-9">
                <span class="w-full h-1 rounded-full block bg-blue-601"></span>
                <span class="w-full h-1 rounded-full block bg-blue-601"></span>
                <span class="w-full h-1 rounded-full block bg-blue-601"></span>
                <span class="w-full h-1 rounded-full block bg-blue-601"></span>
                <span class="w-full h-1 rounded-full block bg-blue-601"></span>
                <span class="w-full h-1 rounded-full block bg-blue-601"></span>
                <span class="w-full h-1 rounded-full block bg-blue-601"></span>
                <span class="w-full h-1 rounded-full block bg-blue-601"></span>
                <span class="w-full h-1 rounded-full block bg-blue-601"></span>
            </div>
            <p id="test"></p>
            <div class="w-full shadow-md rounded-lg h-fit p-8">
                <h2>Selama sebulan terakhir, seberapa sering anda merasa tidak
                    mampu menyelesaikan hal-hal yang harus dikerjakan</h2>
                <form action="" class="flex flex-col">
                    <div class="flex justify-between"><button
                            class="bg-blue-601 py-2 px-6 text-white rounded-lg">Kembali</button><button
                            class="bg-blue-601 py-2 px-6 text-white rounded-lg">Next</button></div>
                </form>
            </div>
        </div>
    </div>

    <script>
        const asessments = @json($assessments);
        console.log(asessments)
    </script>
@endsection
