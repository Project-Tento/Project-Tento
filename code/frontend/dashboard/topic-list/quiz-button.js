function takeQuizButtonFunction(x){
    var topicBox = document.getElementById('theTopicName');
    topicBox.setAttribute('value', x);

    var buttonTopic = document.getElementById('submit-topic');
    buttonTopic.click();
    //window.location.href="../../dynamic-mcq/take-quiz/take-quiz.php";
}