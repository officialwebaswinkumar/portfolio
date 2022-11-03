<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" id="form1" action=""  method="POST">
					<span class="login100-form-title">
						Member Login
					</span>

					<div class="form-control"  data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" id="email" placeholder="Enter your email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
						</span>
						<small>Error message</small>
					</div>

					<div class="form-control" id="password" data-validate = "Password is required">
						<input class="input100"type="password" name="password" id="password" placeholder="Enter your password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
						</span>
						<small>Error message</small>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="submit" onclick="login();">
							Login
						</button>
					</div>
					<br>
					<br>
					<div class="text-center p-t-136">
						<a class="txt2" href="signups.php"
						style="margin-left: 70px;">
							New User ? Click here to Signup
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->
	<!-- <script src="js/login.js"></script> -->
	<script type="text/javascript">
      // Prevent form from submit or refresh
      
      function handleForm(event) { event.preventDefault(); }
      form1.addEventListener('submit', handleForm);
      // Function
      function login(){
        $(document).ready(function(){
          $.ajax({
            // Action
            url: 'validate.php',
            // Method
            type: 'POST',
            data: {
              // Get value
              email: $("input[name=email]").val(),
              password: $("input[name=password]").val(),
              action: "login"
            },
            success:function(response){
              // Response is the output of action file
              if(response == 1){
                alert("Login Successfully!");
				window.location.href="home.php";
              }
              else if(response == 2){
                alert("Invalid Login");
              }
			//   else{
			// 	alert(response);
			//   }
			},
			error:function(error){
				if(error != 1){
					alret('error')
				}
			}
		
          });
        });
      }
    </script>
}
</script>
</body>
</html>












