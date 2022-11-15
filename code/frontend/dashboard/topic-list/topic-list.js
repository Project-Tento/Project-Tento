
function selectLevel(x){
    x.classList.toggle('levelSelected');
}

function topicDropDownStaysOpen(x){
    const makeItStayOpen = document.querySelector(".topic-dropdown");
    makeItStayOpen.classList.add("open");
}

function clearFilter(){
    var checkboxes = document.querySelectorAll(".checkbox");
    console.log(checkboxes.length);
    for(let i=0; i<checkboxes.length; i++){
        checkboxes[i].checked = false;
    }
    const makeItStayOpen = document.querySelector(".topic-dropdown");
    makeItStayOpen.classList.add("open");
}

function makeExamButtonsVisible(x){
    const hiddenBlock = document.querySelectorAll(".hidden-by-default");
    for(let i = 0; i<hiddenBlock.length; i++){
        if(i==x)
            continue;
        hiddenBlock[i].classList.add("hidden");
    }
        
    hiddenBlock[x].classList.toggle("hidden");

}
