const form = document.querySelector(".login form"),
  continueBtn = document.querySelector(".button input"),
  errorText = form.querySelector(".error-txt");

form.onsubmit = (e) => {
  e.preventDefault();   //prevent form from submitting
}

continueBtn.onclick = () => {
  //ajax starts
  let xhr = new XMLHttpRequest(); //creating xml object
  xhr.open("POST", "./php/login.php", true);
  xhr.onload = () => {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        let data = xhr.response;
        if (data == "success") {
          location.href="./users.php";
        } else {
          errorText.textContent = data;
          errorText.style.display = "block";
        }
      }
    }
  }
  // data to php through ajax
  let formData = new FormData(form);  //creating new formdata object
  xhr.send(formData); //sending formdata to php
}