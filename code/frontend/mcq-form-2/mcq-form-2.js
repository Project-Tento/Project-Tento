(function workingTimer() {
    var countTo = 30; //specifies the total time in seconds
    var min = Math.floor(countTo / 60); //calculating minute
    var sec = countTo - (min * 60); //calculating second
    var counter = 0;

    var time = document.getElementById('timer');

    time.innerHTML = "00 : 30";


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
            redirectToScorePage();
        }


    }


    //calls function updateTimer every 1 second
    setInterval(updateTimer, 1000);

})();


function redirectToScorePage() {
    window.location.href = 'score.html';
}
