(function workingTimer() {
    var time = document.getElementById('timer');
    var setTime = document.getElementById('time').getAttribute('value');

    if(setTime == 0){
        time.classList.add('d-none');
        return;
    }
    
    //console.log(setTime);

    var countTo = setTime*60; //specifies the total time in seconds
    var min = Math.floor(countTo / 60); //calculating minute
    var sec = countTo - (min * 60); //calculating second
    var counter = 0;

    var minS = String(min);
    var secS = String(sec);

    if (min > 9) {

        minS = minS;
    }
    else {
        minS = "0" + minS;
    }

    if (sec < 10) {
        secS = "0" + secS;
    }
    else {
        secS = secS;
    }

    time.innerHTML = minS + " : " + secS;


    function updateTimer() {

        //increment time
        if (sec <= 0 && counter < countTo) {
            counter++;
            min--;
            sec = 59;
        } else if (counter >= countTo) {
            sec = 0;
            min = 0;
        } else {
            counter++;
            sec--;
        }

        if (min > 9) {

            time.innerHTML = min;
        }
        else {
            time.innerHTML = "0" + min;
        }

        if (sec < 10) {
            time.innerHTML += " : 0" + sec;
        }
        else {
            time.innerHTML += " : " + sec;
        }


        //change color after a certain amount of time
        if (min == 0 && sec <= 10)
            time.style.color = "red";
        else
            time.style.color = "#181887";


        //if timer runs out
        if (min == 0 && sec == 0) {
            submitForm();
        }


    }


    //calls function updateTimer every 1 second
    setInterval(updateTimer, 1000);

})();

function submitForm()
{
    var submitBtn = document.getElementById('submit-answers');
    submitBtn.click();
    setTimeout(() => {  redirectToLoading(); }, 4000);
    
}

function redirectToLoading() {
    
    window.location.href = 'loader.php';
}

