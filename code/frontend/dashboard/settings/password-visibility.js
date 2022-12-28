
const updateCurrentPassword = document.getElementById('updateCurrentPass');
const updateNewPassword = document.getElementById('updateNewPass');
const updateConfirmPassword = document.getElementById('updateConfirmPass');


function toggleUpdateCurrentPasswordVisibility(x) {
    // Toggle the type attribute using
    // getAttribure() method
    const type = updateCurrentPassword.getAttribute('type') === 'password' ? 'text' : 'password';

    updateCurrentPassword.setAttribute('type', type);

    // Toggle the eye and bi-eye icon
    x.classList.toggle('bi-eye');
};

function toggleUpdateNewPasswordVisibility(x) {
    // Toggle the type attribute using
    // getAttribure() method
    const type = updateNewPassword.getAttribute('type') === 'password' ? 'text' : 'password';

    updateNewPassword.setAttribute('type', type);

    // Toggle the eye and bi-eye icon
    x.classList.toggle('bi-eye');
};


function toggleUpdateConfirmPasswordVisibility(x) {
    // Toggle the type attribute using
    // getAttribure() method
    const type = updateConfirmPassword.getAttribute('type') === 'password' ? 'text' : 'password';

    updateConfirmPassword.setAttribute('type', type);

    // Toggle the eye and bi-eye icon
    x.classList.toggle('bi-eye');
};