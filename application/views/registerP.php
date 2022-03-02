<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="asset/css/registerP.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">Registration</div>
    <div class="content">
      <form action="#">
        <div class="user-details">
          <div class="input-box">
            <span class="details">First Name</span>
            <input type="text" placeholder="Enter your first name" required>
          </div>
          <div class="input-box">
            <span class="details">Last Name</span>
            <input type="text" placeholder="Enter your last name" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" placeholder="Enter your email" required>
          </div>
          <div class="input-box">
            <span class="details">Birthday</span>
            <input type="date" required>
          </div>
          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" placeholder="Enter your password" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" placeholder="Enter your Email" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" placeholder="Enter your password" required>
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="password" placeholder="Confirm your password" required>
          </div>
        </div>
        <div class="gender-details">
          <input type="radio" name="gender" id="dot-1">
          <input type="radio" name="gender" id="dot-2">
          <input type="radio" name="gender" id="dot-3">
          <span class="gender-title">Gender</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Male</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">Female</span>
          </label>
          <label for="dot-3">
            <span class="dot three"></span>
            <span class="gender">Prefer not to say</span>
            </label>
          </div>
        </div>
        <div class="gender-details">
          <input type="radio" name="vacstatus" id="dot-1">
          <input type="radio" name="vacstatus" id="dot-2">
          <span class="gender-title">Vaccination Status</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">1st Dose</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">2nd Dose</span>
          </label>
          </div>
        </div>
<div class="imagebody">
    <div class="container1">
    <span class="gender-title">Vaccination Card</span>
        <div class="wrapper">
            <div class="image">
                <img src=" " alt="">
            </div>
            <div class="content1">
                <div class="icon"><i class="fas fa-cloud-upload-alt"></i></div>
                <div class="icon">No image yet</i></div>
            </div>
            <div id="cancel-btn"><i class="fas fa-times"></i></div>
            <div class="file-name">File name here</div>
        </div>
            <input id="default-btn" type="file" hidden>
            <button onclick="uploadImage()" id="custom-btn">Choose a file</button>
        <div class="button">
          <input type="submit" value="Register">
        </div>
    </div>
</div>
      </form>
    </div>
  </div>

<script>
const fileName = document.querySelector(".file-name");
const defaultBtn = document.querySelector("#default-btn");
const wrapper = document.querySelector(".wrapper");
const cutomBtn = document.querySelector("#custom-btn");
const img = document.querySelector("img");
let regExp = /[0-9a-zA-Z\^\&\'\@\{\}\[\]\,\$\=\!\-\#\(\)\.\%\+\~\_ ]+$/;

function uploadImage(){
  defaultBtn.click();
}
defaultBtn.addEventListener("change",function(){
  const file = this.files[0];
  if(file){
    const reader = new FileReader();
    reader.onload = function(){
      const result = reader.result;
      img.src = result;
      wrapper.classList.add("active");
    }
      reader.readAsDataURL(file);   
  }
  if(this.value){
      let valueStore = this.value.match(regExp);
      fileName.textContent = valueStore;
  }
});
</script>
</body>
</html>
