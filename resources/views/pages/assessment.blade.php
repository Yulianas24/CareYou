@extends('layouts.pages')

@section('container')
    <div class="min-h-screen w-full flex justify-center">
        <div class="w-full flex space-y-8 flex-col items-start justify-center laptop:w-1/2">
            <div class="flex flex-col  items-center space-y-4 w-fit mx-auto">
                <h1 class="text-2xl w-fit font-bold"><span>Ketahui Lebih Awal </span>
                    <span class="text-blue-601">Kesehatan Mental </span> <span>Anda</span>
                </h1>
                <p class="text-center">Ini merupakan kuisioner singkat untuk mengetahui kesehatan mentalmu. Kamu bisa
                    mengetahui
                    hasilnya dengan cepat dan bisa konsultasi dengan konselor CareYou. Jawabanmu bersifat rahasia</p>
            </div>
            <div class="grid grid-cols-9 w-full gap-4">
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
                <h2 id="quesitioner-question"></h2>

                <div id="list-options">
                    <input type="radio" name="option" id="questions-options"><label for="option">nknasa</label>
                </div>
                <div class="flex flex-col">
                    <div class="flex justify-between"><button id="prev-button"
                            class="bg-blue-601 py-2 px-6 text-white rounded-lg">Kembali</button><button id="next-button"
                            class="bg-blue-601 py-2 px-6 text-white rounded-lg">Next</button></div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const asessments = @json($assessments);
        const question = document.querySelector('#quesitioner-question')
        const nextButton = document.querySelector('#next-button')
        const prevButton = document.querySelector('#prev-button')
        let selecetOptionsIndex = null
        let currentQuestion = 0
        let currentIndex = 0

        function setQuestions() {
            question.innerText = asessments[currentIndex].question
        }

        function setOptions(options) {
            let allOptions = options.split(",")
        }

        nextButton.addEventListener("click", () => {
            if (currentIndex < asessments.length) {
                currentIndex += 1
                setQuestions()
            }
        });

        prevButton.addEventListener("click", () => {
            currentIndex -= 1
            setQuestions()
        })

        setQuestions()
    </script>
@endsection
