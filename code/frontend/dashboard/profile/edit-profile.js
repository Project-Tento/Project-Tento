
var edit_button = document.getElementById("edit-pfp");

edit_button.addEventListener("click", function () 
{
  document.getElementById("get-name").disabled = false;
  document.getElementById("get-bio").disabled = false;
  document.getElementById("get-ins").disabled = false;

  var dropdown = document.querySelector(".dropdown");
  dropdown.classList.remove("d-none");

  var level = document.querySelector(".level-value");
  level.classList.add("d-none");

  var save_button = document.querySelector(".save-profile-button");
  save_button.classList.remove("d-none");

  var change_photo = document.querySelector(".change-photo");
  change_photo.classList.remove("d-none");
  
});


//const imgDiv = document.querySelector('.profile-pic-div');
const img = document.querySelector('#photo-view');
const file = document.querySelector('#file1');

file.addEventListener('change', function(){
  //this refers to file
  const choosedFile = this.files[0];

  if (choosedFile) {

      const reader = new FileReader(); //FileReader is a predefined function of JS

      reader.addEventListener('load', function(){
          img.setAttribute('src', reader.result);
      });

      reader.readAsDataURL(choosedFile);
  }
});


