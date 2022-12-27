<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
/* Center the loader */

* {
    margin: 0;
    padding: 0;
    font-family: 'Poppins', sans-serif;
}
p {
    margin: 0%
}

html{
    background-color: #5adfe0;
    background-image: linear-gradient(180deg, #5adfe0 8%, #9ef0ff 34%, #ffffff 99%, #ffffff 100%);
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    height: 100vh;
}

h3 {
    font-size: 26px;
    color: #181887;
    text-align: center;
    padding-top:28%;
}

#loader {
  position: absolute;
  left: 50%;
  top: 40%;
  z-index: 1;
  width: 120px;
  height: 120px;
  margin: -76px 0 0 -76px;
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #181887;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

/* Add animation to "page content" */
.animate-bottom {
  position: relative;
  -webkit-animation-name: animatebottom;
  -webkit-animation-duration: 1s;
  animation-name: animatebottom;
  animation-duration: 1s
}

@-webkit-keyframes animatebottom {
  from { bottom:-100px; opacity:0 } 
  to { bottom:0px; opacity:1 }
}

@keyframes animatebottom { 
  from{ bottom:-100px; opacity:0 } 
  to{ bottom:0; opacity:1 }
}

#myDiv {
  display: none;
  text-align: center;
}
</style>
</head>
<body onload="myFunction()" style="margin:0;">

<div id="loader"></div>
<h3>Your score is being calculated...</h3>

<!-- <div style="display:none;" id="myDiv" class="animate-bottom">
  <h2>Tada!</h2>
  <p>Some text in my newly loaded page..</p>
</div> -->

<script>
var myVar;

function myFunction() {
  myVar = setTimeout(showPage, 3000);
}

function showPage() {
  window.location.href = "score-page/score.php";
}
</script>

</body>
</html>
