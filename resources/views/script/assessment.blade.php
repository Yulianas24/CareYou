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
          if (index_page > 0 && params == 'prev') {
              index_page-=1
          }
          else if(params = 'next' && index_page < asessments.length-1) {
              if(answers[index_page]){
                   index_page+=1
              }
          }
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