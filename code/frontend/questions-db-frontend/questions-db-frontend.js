//  Title: .js for adding & showing 
//  Author: Nafisa Maliyat

var showAddQuestionSection = document.getElementById('display-section-show-questions');
var showShowQuestionSection = document.getElementById('display-section-show-questions');

var addQuestionSection = document.getElementById('add-questions');
var showQuestionSection = document.getElementById('show-questions');

//fix onload, clicking the non default (add-question button) shows both section at once
function displayAddQuestionSection(){
    addQuestionSection.style.display = "block";
    if(showQuestionSection.style.display == "block")
        showQuestionSection.style.display = "none";
}

function displayShowQuestionSection(){
    showQuestionSection.style.display = "block";
    if(addQuestionSection.style.display == "block")
        addQuestionSection.style.display = "none";
}

