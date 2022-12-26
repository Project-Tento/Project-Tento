function takeQuizButtonFunction(x, y){
    var topicBox = document.getElementById('theTopicName');
    topicBox.setAttribute('value', x);

    var topicID = document.getElementById('theTopicID');
    topicID.setAttribute('value', y);

    var buttonTopic = document.getElementById('submit-topic');
    buttonTopic.click();
    //window.location.href="../../dynamic-mcq/take-quiz/take-quiz.php";
}