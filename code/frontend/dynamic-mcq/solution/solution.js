function colorAll(x){
    const greenButton = document.querySelectorAll('#greenButton');
    for(let i=0; i<x; i++){
        greenButton[i].click();
    }
}

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

//onclick event of greenbutton
function colorThisGreen(x){
    x=x-1;
    const answerBoxes = document.querySelectorAll('.answer');
    var answerValue = answerBoxes[x].getAttribute('value');
    //we know that this is question1
    //index of radio button 0-3

    var correctIdx;
    const radioButtons = document.querySelectorAll('.radioButton'); //all radiobuttons
    for(let i=0; i<4; i++){
        var y = x*4 + i;
        var checkValue = radioButtons[y].getAttribute('value');
        if(checkValue == answerValue){
            correctIdx = y;
            markCorrectAnswer(y);
        }
    }

}
