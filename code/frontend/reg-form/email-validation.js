/*
    //Title: Validation while typing
    //Author: Shanta Maria
    //Date: 18/10/2022
*/

function validation()
{
    var form = document.getElementById("register-form");
    var email = document.getElementById("register-email").value;
    var text = document.getElementById("emailWarning");;
    
    var pattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/

    if(email.match(pattern))
    {
        form.classList.add("valid");
        form.classList.remove("invalid");
        text.innerHTML = "Looks Good!";
        text.style.color = "#00ff00";
    }
    else
    {
        form.classList.add("invalid");
        form.classList.remove("valid");
        text.innerHTML = "Please Enter A Valid Email Address";
        text.style.color = "#ff0000";
    }
    if(email=="")
    {
        form.classList.remove("valid");
        form.classList.remove("invalid");
        text.innerHTML = "";
        text.style.color = "#00ff00";
    }
}