

var loginBox = document.getElementById("login");
var regBox = document.getElementById("register");
var regTab = document.getElementById("registerTab");
var loginTab = document.getElementById("loginTab");
var forgetBox = document.getElementById("forgot");
var loginTab = document.getElementById("login");
var regTab = document.getElementById("registration");
var hidePassword = document.getElementById('togglePasswordHide');
var showPassword = document.getElementById('togglePasswordShow');
var togglePassword = document.getElementById('togglePassword');
const signInPassword = document.getElementById('sPassword');
const registerPassword = document.getElementById('rPassword');
const confirmPassword = document.getElementById('confirmPassword');
var container = document.getElementById('container');





function changeForm(x) {
    $(".form-signin").toggleClass("form-signin-left");
    $(".form-signup").toggleClass("form-signup-left");
    $(".signup-inactive").toggleClass("signup-active");
    $(".signin-active").toggleClass("signin-inactive");
    $(".container").style.height = "580px";
    $(".register").style.visibility = "visible";
    $("login").style.visibility = "hidden";
    $("forgot").style.visibility = "hidden";
}



function loginTabFun(x) {
    event.preventDefault();
    container.style.height = "500px";
    regBox.style.visibility = "hidden";
    loginBox.style.visibility = "visible";
    forgetBox.style.visibility = "visible";
    loginTab.style.backgroundColor = "rgba(255, 255, 255, 0.3)";
    regBar.style.borderBottomColor = "transparent";
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





