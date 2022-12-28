function markIncorrectAnswer(x){
    const boxes = document.querySelectorAll('.box');
    boxes[x].classList.add('incorrectBox');

    const circles = document.querySelectorAll('.circle');
    circles[x].classList.add('incorrectCircle');
}

function markCorrectAnswer(x){
    const boxes = document.querySelectorAll('.box');
    boxes[x].classList.add('correctBox');

    const circles = document.querySelectorAll('.circle');
    circles[x].classList.add('correctCircle');
}

