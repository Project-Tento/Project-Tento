function colorAll(x) {
    const greenButton = document.querySelectorAll('#greenButton');
    const redButton = document.querySelectorAll('#redButton');
    for (let i = 0; i < x; i++) {
        greenButton[i].click();
        redButton[i].click();
    }
}

function markIncorrectAnswer(x) {
    if (x == -1)
        return;
    const boxes = document.querySelectorAll('.box');
    boxes[x].classList.add('incorrectBox');

    const circles = document.querySelectorAll('.circle');
    circles[x].classList.add('incorrectCircle');
}

function markCorrectAnswer(x) {
    const boxes = document.querySelectorAll('.box');
    boxes[x].classList.add('correctBox');

    const circles = document.querySelectorAll('.circle');
    circles[x].classList.add('correctCircle');

    
}




//onclick event of greenbutton
function colorThisGreen(x) {
    x = x - 1;
    const answerBoxes = document.querySelectorAll('.answer');
    var answerValue = answerBoxes[x].getAttribute('value');
    //we know that this is question1
    //index of radio button 0-3

    var correctIdx;
    const radioButtons = document.querySelectorAll('.radioButton'); //all radiobuttons
    for (let i = 0; i < 4; i++) {
        var y = x * 4 + i;
        var checkValue = radioButtons[y].getAttribute('value');
        if (checkValue == answerValue) {
            correctIdx = y;
            markCorrectAnswer(y);
        }
    }

}


//onclick of redbutton
//x is userAnswerValue
//y is index
function colorThisRed(userValue, y) {

    y = y - 1; //questionNumber - 1

    var userIdx = -1; //user input index of radio button

    //user answer is null
    if (userValue == 'null') {
        ;
    }
    //user 
    else { //not null
        const radioButtons = document.querySelectorAll('.radioButton'); //all radiobuttons

        for (let i = 0; i < 4; i++) { //4 loops for 4 radio buttons
            var z = y * 4 + i; //index of radio button
            var checkValue = radioButtons[z].getAttribute('value');

            //checking radio button value with user input value
            if (checkValue == userValue) {
                userIdx = z; //we got the index of radiobutton
                
                //we know which radio button was clicked previously by user
                const answerBoxes = document.querySelectorAll('.answer');
                var answerValue = answerBoxes[y].getAttribute('value');

                if (userValue == answerValue) {
                    ;
                }
                else {

                    
                    markIncorrectAnswer(userIdx);
                }
                break;
            }
        }



    }


}