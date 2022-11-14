
var edit_button = document.getElementById("edit-pfp");

const imgDiv = document.querySelector('.profile-pic-div');
const img = document.querySelector('#photo');
const file = document.querySelector('#file');
const uploadBtn = document.querySelector('#uploadBtn');

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
  
});

imgDiv.addEventListener('mouseenter', function(){
    uploadBtn.style.display = "block";
});

//if we hover out from img div

imgDiv.addEventListener('mouseleave', function(){
    uploadBtn.style.display = "none";
});


function changeFile(x){
    //this refers to file
    const choosedFile = x.files[0];

    if (choosedFile) {

        const reader = new FileReader(); //FileReader is a predefined function of JS

        reader.addEventListener('load', function(){
            img.setAttribute('src', reader.result);
        });

        reader.readAsDataURL(choosedFile);

        return true;
    }
    else 
        return false;
};


