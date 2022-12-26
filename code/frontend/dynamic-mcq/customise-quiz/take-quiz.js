
const defaultSettingDetails = document.querySelector('#default-setting-label');
const customizedSettingDetails = document.querySelector('#customized-setting-label');

//make the labels change color
const questionCountLabel = document.querySelector('.question-count-label');
const quizModeLabel = document.querySelector('.quiz-mode-label');
const totalTimeLabel = document.querySelector('.total-time-label');
const timeModeRadBtnLabel = document.querySelector('.time-mode-selection-radio');
const recommendedLabel = document.querySelector('#recommended-time');

//the checkboxes and radio buttons after selecting settings
const questionCountDropdown = document.querySelector('#get-question-count');
const timeDropdown = document.querySelector('#get-time');
const timeModeRadBtn1 = document.querySelector('#timed');
const timeModeRadBtn2 = document.querySelector('#untimed');



//change if default button is selected
function showDefaultSettingDetails(){
    defaultSettingDetails.classList.remove("d-none");
    customizedSettingDetails.classList.add("d-none");

    questionCountLabel.classList.add("grey");
    quizModeLabel.classList.add("grey");
    totalTimeLabel.classList.add("grey");
    timeModeRadBtnLabel.classList.add("grey");
    recommendedLabel.classList.add("d-none");

    //disable all radio button and dropdowns
    questionCountDropdown.disabled = true;
    timeDropdown.disabled = true;
    timeModeRadBtn1.disabled = true;
    timeModeRadBtn2.disabled = true;
}

//change if the custom option is selected
function showCustomSettingDetails(){
    defaultSettingDetails.classList.add("d-none");
    customizedSettingDetails.classList.remove("d-none");

    questionCountLabel.classList.remove("grey");
    quizModeLabel.classList.remove("grey");
    totalTimeLabel.classList.remove("grey");
    timeModeRadBtnLabel.classList.remove("grey");
    recommendedLabel.classList.remove("d-none");
    

    //disable all radio button and dropdowns
    questionCountDropdown.disabled = false;
    timeDropdown.disabled = false;
    timeModeRadBtn1.disabled = false;
    timeModeRadBtn2.disabled = false;


}


//if the question count is changed, the recommended time comes on
function dynamicdropdown(questionCount){
    if(questionCount == "5"){
        timeDropdown.value="10";
        recommendedLabel.classList.remove("d-none");
    } else if(questionCount == "10"){
        timeDropdown.value="20";
        recommendedLabel.classList.remove("d-none");
    } else if(questionCount == "15"){
        timeDropdown.value="30";
        recommendedLabel.classList.remove("d-none");
    } else if(questionCount == "20"){
        timeDropdown.value="40";
        recommendedLabel.classList.remove("d-none");
    }
}



//if the time dropdown value is selected differently, remove recommended label
function changeRecommndedLabel(time){
    if((questionCountDropdown.value == "5" && timeDropdown.value == "10")
        || (questionCountDropdown.value == "10" && timeDropdown.value == "20")
        || (questionCountDropdown.value == "15" && timeDropdown.value == "30")
        || (questionCountDropdown.value == "20" && timeDropdown.value == "40")){
            recommendedLabel.classList.remove("d-none");
    } else {
        recommendedLabel.classList.add("d-none");
    }
}



//when untimed mode selected, disable time selection dropdown
function disableTimeSelection(){
    timeDropdown.disabled = true;
    recommendedLabel.classList.add("d-none");
    totalTimeLabel.classList.add("grey");
}


//do the opposite at timed mode
function enableTimeSelection(){
    timeDropdown.disabled = false;
    recommendedLabel.classList.remove("d-none");
    totalTimeLabel.classList.remove("grey");
}