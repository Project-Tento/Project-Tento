// .js file for registration page
//password toggling function
// switch tab function 
//conditional page load (to register or login tab) from another page
//Author: Nafisa Maliyat

var loginBox = document.getElementById('login');
var regBox = document.getElementById('register');
var forgetBox = document.getElementById('forgot');
var loginTab = document.getElementById('loginTab');
var regTab = document.getElementById('registerTab');

var togglePassword = document.getElementById('togglePassword');
const signInPassword = document.getElementById('sPassword');
const registerPassword = document.getElementById('rPassword');
const confirmPassword = document.getElementById('confirmPassword');
var container = document.getElementById('container');


function onload() {
    var option = window.location.hash.substring(1);
    if (option == 'register'){
        regTabFun();
    }

    else{
        loginTabFun();
    }

        
}


function loginTabFun() {
    container.style.height = "500px";
    regBox.style.visibility = "hidden";
    loginBox.style.visibility = "visible";
    forgetBox.style.visibility = "visible";
    loginTab.style.backgroundColor = "#F8F8FF";
    regTab.style.backgroundColor = "transparent";
    regTab.style.borderBottomColor = "transparent";
    document.title="Tento | Log in";
    window.location.href="reg-form.html#login";
}


function regTabFun() {
    container.style.height = "640px";
    regBox.style.visibility = "visible";
    loginBox.style.visibility = "hidden";
    forgetBox.style.visibility = "hidden";
    regTab.style.backgroundColor = "#F8F8FF";
    loginTab.style.backgroundColor = "transparent";
    loginTab.style.borderBottomColor = "transparent";
    document.title="Tento | Register";
    window.location.href="reg-form.html#register";
}


function toggleSignInPasswordVisibility(x) {
    // Toggle the type attribute using
    // getAttribure() method
    const type = signInPassword.getAttribute('type') === 'password' ? 'text' : 'password';

    signInPassword.setAttribute('type', type);

    // Toggle the eye and bi-eye icon
    x.classList.toggle('bi-eye');
};


function toggleRegisterPasswordVisibility(x) {
    // Toggle the type attribute using
    // getAttribure() method
    const type = registerPassword.getAttribute('type') === 'password' ? 'text' : 'password';

    registerPassword.setAttribute('type', type);

    // Toggle the eye and bi-eye icon
    x.classList.toggle('bi-eye');
};




function toggleConfirmPasswordVisibility(x) {
    // Toggle the type attribute using
    // getAttribure() method
    const type = confirmPassword.getAttribute('type') === 'password' ? 'text' : 'password';

    confirmPassword.setAttribute('type', type);

    // Toggle the eye and bi-eye icon
    x.classList.toggle('bi-eye');
};





var closeFormButton = document.getElementById('exit-login-button');
function closeForm(){
    window.location.href="../landingPage/landingPage.html";
}
