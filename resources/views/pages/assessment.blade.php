@extends('layouts.pages')

@section('container')
    <div class="min-h-screen w-full flex justify-center p-4 laptop:p-0">
        <div class="w-full flex space-y-8 flex-col items-start justify-center laptop:w-1/2">
            <div class="flex flex-col  items-center space-y-4 w-fit mx-auto">
                <h1 class="text-2xl w-fit font-bold"><span>Ketahui Lebih Awal </span>
                    <span class="text-blue-601">Kesehatan Mental </span> <span>Anda</span>
                </h1>
                <p class="text-center">Ini merupakan kuisioner singkat untuk mengetahui kesehatan mentalmu. Kamu bisa mengetahui
                    hasilnya dengan cepat dan bisa konsultasi dengan konselor CareYou. Jawabanmu bersifat rahasia</p>
            </div>
            <div id="number-position" class="flex w-full gap-2">
                {{-- Number position --}}
            </div>
            <div class="w-full shadow-md rounded-lg h-fit space-y-6 p-8">
                <h2 id="set_question">
                    {{-- Set Question --}}
                </h2>
                <div id="set-option" class="w-full grid gap-3">
                    {{-- Set Option List --}}
                </div>
                <div class="flex flex-col">
                    <form class="flex justify-between" method="POST" action="/assessment">
                        @csrf
                        <textarea hidden name="answers" id="input-answers" cols="30" rows="10"></textarea>
                        <button type="button" id="prev-button" class="bg-blue-601 py-2 px-6 text-white rounded-lg" onclick="change('prev', null)">Kembali
                        </button>
                        <button type="button" id="next-button" class="bg-blue-601 py-2 px-6 text-white rounded-lg" onclick="change('next', null)">Next</button>
                        <button hidden id="submit-button" class="bg-blue-601 py-2 px-6 text-white rounded-lg" onclick="submit()">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @include('script.assessment', ['assessments' => $assessments])

@endsection