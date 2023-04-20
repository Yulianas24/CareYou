@extends('layouts.pages')

@section('container')
    <div class="min-h-screen w-full flex justify-center p-4 laptop:p-0">
        <div class="w-full flex space-y-8 flex-col items-start justify-center laptop:w-1/2">
            <div class="flex flex-col  items-center space-y-4 w-fit mx-auto">
                <h1 class="text-2xl w-fit font-bold"><span>Ketahui Lebih Awal </span>
                    <span class="text-blue-601">Kesehatan Mental </span> <span>Anda</span>
                </h1>
                <p class="text-center">Ini merupakan kuisioner singkat untuk mengetahui kesehatan mentalmu. Kamu bisa
                    mengetahui
                    hasilnya dengan cepat dan bisa konsultasi dengan konselor CareYou. Jawabanmu bersifat rahasia</p>
            </div>
            <div id="container-number-question" class="flex w-full gap-4">

            </div>
            <div class="w-full shadow-md rounded-lg h-fit space-y-6 p-8">
                <h2 id="quesitioner-question"></h2>
                <div id="container-list-options" class="flex flex-col space-y-4">
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
        let labelOptios = document.querySelectorAll('#label-radio-options')
        let radioOptions = document.querySelectorAll('#radio-questions-options')
        let containerOptions = document.querySelector('#container-list-options')
        let questionOptions = document.querySelectorAll('#questions-option')
        let containerNumberQuestion = document.querySelector('#container-number-question')
        let selecetOptionsIndex = null
        let currentQuestion = 0
        let currentIndex = 0

        function numberQuestion() {
            containerNumberQuestion.innerText = ''
            for (let i = 0; i < asessments.length; i++) {
                let createNumbure = document.createElement('span')
                createNumbure.setAttribute('id', 'list-number')
                createNumbure.setAttribute('class', 'w-full h-1 rounded-full block ')
                if (i <= currentIndex) {
                    createNumbure.classList.remove('bg-gray-500')
                    createNumbure.classList.add('bg-blue-601')
                } else {
                    createNumbure.classList.remove('bg-blue-601')
                    createNumbure.classList.add('bg-gray-500')
                }
                containerNumberQuestion.append(createNumbure)
            }
        }

        function setQuestions() {
            question.innerText = asessments[currentIndex].question
        }

        function setOptions(options) {
            let allOptions = options.split(",")
            containerOptions.innerText = ''


            allOptions.forEach(data => {
                let containerOption = document.createElement("div")
                let inputElement = document.createElement("input")
                let labelElement = document.createElement("label")

                containerOption.setAttribute("class", "p-2  shadow-md rounded-md cursor-pointer")
                containerOption.setAttribute("id", "questions-option")
                inputElement.setAttribute("type", "radio")
                inputElement.setAttribute("name", "option")
                inputElement.setAttribute("id", "radio-questions-options")
                inputElement.setAttribute("value", data)
                inputElement.setAttribute("class", "hidden")
                labelElement.innerText = data
                labelElement.setAttribute("id", "label-radio-options")
                labelElement.setAttribute("for", "option")
                labelElement.setAttribute("class", "cursor-pointer")

                containerOptions.append(containerOption)
                containerOption.append(inputElement)

                containerOption.append(labelElement)

                containerOptions.append(containerOption)
                labelOptios = document.querySelectorAll('#label-radio-options')
                radioOptions = document.querySelectorAll('#radio-questions-options')
                questionOptions = document.querySelectorAll('#questions-option')

                questionOptions.forEach((element, i) => {
                    element.addEventListener("click", () => {
                        
                        radioOptions[i].checked = true
                        if (radioOptions[i].checked) {
                            console.log(radioOptions[i])
                            questionOptions.forEach(el2 => {
                                el2.classList.remove("bg-blue-601")
                                el2.classList.remove("text-white")
                            })
                            questionOptions[i].classList.add("bg-blue-601")
                            questionOptions[i].classList.add("text-white")
                        }
                    })
                })

            })
        }

        nextButton.addEventListener("click", () => {
            if (currentIndex + 1 != asessments.length) {
                currentIndex += 1
                setQuestions()
                setOptions(asessments[currentIndex].options)
                numberQuestion()
            }
        });
        prevButton.addEventListener("click", () => {
            if (currentIndex != 0) {
                currentIndex -= 1
                setQuestions()
                setOptions(asessments[currentIndex].options)
                numberQuestion()
            }
        })

        setQuestions()
        setOptions(asessments[currentIndex].options)
        numberQuestion()
    </script>
@endsection
