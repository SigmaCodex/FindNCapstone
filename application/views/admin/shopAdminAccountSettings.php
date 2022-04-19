<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Admin Account Settings</title>

    <link rel="stylesheet" href="assets/css/shopAdminAccountSettings.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>


<!-- Content Inside -->
<div class="container my-2 ">
    <div class="wrapper bg-white mt-sm-5">
        <h4 class="tit pb-4 border-bottom">Admin Account Settings</h4>

        <div class="d-flex align-items-start "> 

            <div class="pp title-info" id="img-section" >Profile Photo
                <p>Accepted file type (.png .jpg). Less than 5MB</p> 
            </div> 
        </div>
        <div class="py-2"> 
            <div class="d-flex">
                <div class="avatar-upload col-md-6 pt-md-0 pt-3">
                    <div class="avatar-edit">
                        <input type='file' id="imageUpload" name="imageUpload" accept=".png, .jpg, .jpeg" />
                        <label for="imageUpload"></label>
                    </div>
                    <div class="avatar-preview">
                        <div id="imagePreview"></div>
                    </div>
                </div>  
            </div>    
        </div>    

        <div class="py-2">
            <div class="title-info"> <b>USER INFORMATION</b>
            </div>
            <div class="row py-2">
                <div class="col-md-6"> <label for="firstname">First Name</label> <input type="text" class="bg-light form-control"> </div>
                <div class="col-md-6 pt-md-0 pt-3"> <label for="lastname">Last Name</label> <input type="text" class="bg-light form-control"> </div>
                <div class="col-md-6 pt-md-0 pt-3"> <label for="lastname">Birthday</label> <input type="date" class="bg-light form-control"> </div>
                <div class="col-md-6 pt-md-0 pt-3"> <label for="gender">Gender</label>  
                <select name="country" id="country" class="bg-light">
                    <option value="select" selected>(Select)</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
                </div>
            </div>
            <br>
            <div class="title-info"> <b>ACCOUNT INFORMATION</b>
             <div class="row py-2">
                <div class="col-md-6"> <label for="username">Username</label> <input type="text" class="bg-light form-control"> </div>
                <div class="col-md-6 pt-md-0 pt-3"> <label for="email">Email</label> <input type="email" class="bg-light form-control"> </div>
                <div class="col-md-6"> 
                    <label for="phone">Phone Number</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">+63</span>
                        </div>
                        <input type="number" class="form-control" id="phone-num" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>
            </div>

            <div class="d-sm-flex align-items-center pt-3 " id="change">
                <div class="title-info mx-3"> <b>CHANGE PASSWORD</b>
                    <p>Do not share your password to anyone.</p>   
                </div>
                <div class="ml-auto mx-1" > <button class="btn danger">Change</button> </div>
            </div>
            <br>
            <br>
            <div class="py-2 pb-4 mx-3 "> <button class="btn btn-primary mr-3">Save Changes</button> <button class="btn border button">Cancel</button> </div>
        </div>
    </div>
    
</div>


</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        function btn(){
            let side_bar = document.getElementById("side_bar_show")

            if (side_bar.style.display === "none") {
                side_bar.style.display = "block"
            } else {
                side_bar.style.display = "none"
            }
        }
    </script>

    <script>
        $("#phone-num").on("input", function() {
            if (/^0/.test(this.value)) {
                this.value = this.value.replace(/^0/, "")
            }
        })
    </script>
</html>








