<!DOCTYPE html>
<html>
<head>
	<title>Welcome to FindN</title>
	<link rel="stylesheet" type="text/css" href="assets/css/loginpage.css">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>


	<img class="wave" src="assets/images/wavy.png">
	<div class="container">
		<div class="img">
			<img src="assets/images/Logo1.png">
		</div>
		<div class="login-content">
			<div class="form">
				<img src="assets/images/login-image.png">
				<h2 class="title">Welcome</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Username</h5>
           		   		<input type="text" id="user" class="input">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" id="pass" class="input">
            	   </div>
            	</div>
            	<a href="#">Forgot Password?</a>
            	<input type="submit" class="btn" id="btn-login" value="Login">
				<!-- <button class="btn" id="btn-login" >click</button> -->
			</div>
			
		
        </div>
    </div>
    <script type="text/javascript" src="assets/js/main.js"></script>
	<script type="text/javascript" src="assets/js/jquery/jquery.min.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script type="text/javascript" >
	   $(document).on('click','#btn-login',function(){  
        var user  = $("#user").val();
        var pass = $("#pass").val();

		if(user =='' || pass ==''){
			swal(
				'Fill Up',
				'Please Check Your Username and Password',
				'warning'
			)
		}else{

			// //Login Ajax
			$.ajax({
				url: "user-login",
				type: "POST",
				data:{username:user,password:pass},
				beforeSend : function()
				{
					alert("processing");
				},
				success: function(data){
					//redirect to pages
					if(data == "Admin"){
						// window.location = "findershomepage";
							$.ajax({
								url: "shopAdmin-login",
								type: "POST",
								data:{},
								success: function(data){
									 window.location = "shopadmin-dashboard";
								}
							});
							//end
					}else if(data == "superadmin"){
						alert("superadmin");
					}
					else{
						swal(
							'User Not Found',
							'Please Check Your Username and Password',
							'error'
						)
					}
					// alert(data);
				}
			});
			
		}
		
    	});
	</script>

</body>
</html>