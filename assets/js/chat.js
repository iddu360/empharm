const form=document.querySelector(".typing-area"),
inputField=form.querySelector(".input-field"),
sendBtn=form.querySelector("button"),
chatBox=document.querySelector(".chat-box");

form.onsubmit = (e) => {
  e.preventDefault();   //prevent form from submitting
}


sendBtn.onclick=()=>{
    //ajax starts
    let xhr = new XMLHttpRequest(); //creating xml object
    xhr.open("POST", "./php/insert-chat.php", true);
    xhr.onload = () => {
      if (xhr.readyState === XMLHttpRequest.DONE) {
        if (xhr.status === 200) {
          inputField.value="";  //clear input field after submission
          scrollToBottom();
        }
      }
    }
    // data to php through ajax
    let formData = new FormData(form);  //creating new formdata object
    xhr.send(formData); //sending formdata to php
}

chatBox.onmouseenter=()=>{
  chatBox.classList.add("active");
}

chatBox.onmouseleave=()=>{
  chatBox.classList.remove("active");
}

setInterval(()=>{
  //ajax starts
  let xhr = new XMLHttpRequest(); //creating xml object
  xhr.open("POST", "./php/get-chat.php", true);
  xhr.onload = () => {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        let data = xhr.response;
        chatBox.innerHTML=data;
        if(!chatBox.classList.contains("active")){
          scrollToBottom();
        }
      }
    }
  }

  // data to php through ajax
  let formData = new FormData(form);  //creating new formdata object
  xhr.send(formData); //sending formdata to php
},500);   //function runs every after 500ms

function scrollToBottom(){
  chatBox.scrollTop=chatBox.scrollHeight;
}