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
                    <form class="flex justify-between" method="POST" action="/assessment/biodata">
                        @csrf
                        <textarea hidden name="answers" id="input-answers" cols="30" rows="10"></textarea>
                        <button type="button" id="prev-button" class="bg-blue-601 py-2 px-6 text-white rounded-lg" onclick="change('prev', null)">Kembali
                        </button>
                        <button type="button" id="next-button" class="bg-blue-601 py-2 px-6 text-white rounded-lg" onclick="change('next', null)">Next</button>
                        <button hidden id="submit-button" class="bg-blue-601 py-2 px-6 text-white rounded-lg">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        const asessments = @json($assessments);
        let index_page = 0;
        let answers = [];
        document.getElementById('set_question').innerHTML = asessments[index_page].question;
        initOption()
        initPageNumber()
         // set Number
        function initPageNumber(){
            document.getElementById('number-position').innerHTML = ''
            for (let i = 0; i < asessments.length; i++) {
                document.getElementById('number-position').innerHTML += `
                    <button onclick="change(null, ${i})" class="w-full ${i == index_page  ? 'bg-blue-300'
                    : (answers[i] ? 'bg-blue-500' : 'bg-gray-200')} h-1 rounded-md"></button>`;
            }
        }
        // previous/next button
        function change(params, position) {
            if(position == null) {
                index_page > 0 && params == 'prev' ? index_page-=1 : null
                index_page < asessments.length-1 && params == 'next' ? index_page+=1 : null
            } else {
                index_page = position
            }
            document.getElementById('next-button').hidden = (index_page == asessments.length-1)
            document.getElementById('submit-button').hidden = !(index_page == asessments.length-1)
            document.getElementById('set_question').innerText = asessments[index_page].question
            initOption()
            initPageNumber()
        }
        // set Answer
        function setAnswer(params) {
            answers[index_page] = params
            initPageNumber()
            let answer_array = []
            answers.forEach((answer, index) => {
                answer_array.push({
                    question_id : asessments[index].id,
                    answer : answer,
                })
            });
            document.getElementById('input-answers').innerHTML = JSON.stringify(answer_array);
            
        }
        // init options
        function initOption() {
            if(asessments[index_page].type == 'options'){
                let options = asessments[index_page].options.split(',')
                document.getElementById('set-option').innerHTML = ' '
                options.forEach((option, option_index) => {
                    document.getElementById('set-option').innerHTML += 
                    `<div>
                        <input ${answers[index_page] == option ? 'checked' : ''} type="radio" id="${option_index}" 
                        name="answer_${index_page}" class="peer hidden" value="text" onChange="setAnswer('${option}')">
                        <label for="${option_index}" class="answer-label">
                            ${option}
                        </label>
                    </div>`
                });
            } else {
                document.getElementById('set-option').innerHTML = ' '
                document.getElementById('set-option').innerHTML = 
                `<div>
                    <input type="text" value="${answers[index_page] ?? ''}" onChange="getEssayAnswer('essay_${asessments[index_page].id}')" value="" id="essay_${asessments[index_page].id}" name="${asessments[index_page].id}" class="w-full p-2 border border-blue-200 rounded-lg placeholder="Input data">
                </div>`
            }
        }
        // Get Essay Answer 
        function getEssayAnswer(id){
            var input = document.getElementById(id).value
            setAnswer(input)
        }
    </script>
@endsection