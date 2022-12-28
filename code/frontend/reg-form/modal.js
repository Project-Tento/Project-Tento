$('#signup').click(function () {
  //code for the email validation alert to appear
  $('.emailValidationAlert').addClass("show");
  $('.emailValidationAlert').removeClass("hide");
  $('.emailValidationAlert').addClass("showAlert");


  //code for the wrong pattern alert to appear
  $('.wrongPatternAlert').addClass("show");
  $('.wrongPatternAlert').removeClass("hide");
  $('.wrongPatternAlert').addClass("showAlert");
});

$('.email-validation-alert-close-btn').click(function () {
  $('.emailValidationAlert').removeClass("show");
  $('.emailValidationAlert').addClass("hide");
  $('.emailValidationAlert').removeClass("showAlert");
});


$('.wrong-pattern-close-btn').click(function () {
  $('.wrongPatternAlert').removeClass("show");
  $('.wrongPatternAlert').addClass("hide");
  $('.wrongPatternAlert').removeClass("showAlert");
});