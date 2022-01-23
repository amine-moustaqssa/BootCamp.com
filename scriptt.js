const correctAnswers=['b','b','b','b','b','b','b','b','b','b'];
const form=document.querySelector('.quiz-form')
const result=document.querySelector('.result')
const percentage=document.querySelector('.percentage')
const mainText=document.querySelector('.main-text')
const echecQuiz=document.querySelector('.home-btn')
const reussiQuiz=document.querySelector('.suivant-btn')
form.addEventListener('submit',e=>{
    e.preventDefault();
    let score=0;
    const userAnswer=[form.q1.value,form.q2.value,form.q3.value,form.q4.value,form.q5.value,form.q6.value,form.q7.value,form.q8.value,form.q9.value,form.q10.value]
    // check answers
    userAnswer.forEach((answer,index)=>{
        if(answer===correctAnswers[index]){
            score++;
        }
    })
    
    // show result
    scrollTo(0,0)
    result.classList.remove('d-none')
    let output=0;
    const timer = setInterval(() => {
    percentage.textContent=`${output}/10`
        if(output===score){
            clearInterval(timer)
        }else{
            output++;
        }
    }, 100);
    setTimeout(() => {
        form.classList.add('d-none')
        if(score>=5){
            result.querySelector('.valid').classList.remove('d-none')
            reussiQuiz.classList.remove('d-none')
            mainText.classList.add('d-none')
        }else{
            result.querySelector('.invalid').classList.remove('d-none')
            echecQuiz.classList.remove('d-none')
            mainText.textContent='Tu n\'es pas encore prêt pour cet bootcamp'
        }   
    }, 100);
})
