<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
<link rel="stylesheet" type="text/css" href="css/main.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter" >
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG" style="
					padding-top: 150px;
				">
				</div>
				
				<form class="login100-form validate-form" id="form" method="post" action="" >
					<span class="login100-form-title">
						Member SignUp
					</span>
					<div class="form-message"></div>
					<div class="form-control">
						<input class="input100" type="text" name="name" placeholder="Name" id="name">
						<span class="focus-input100"></span>
						<small>Error message</small>
					</div>
					<div class="form-control">
						<input class="input100" type="Number" name="number"  placeholder="Enter your Mobile number" id="number">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
						<i class="fas fa-check-circle"></i>
						<i class="fas fa-times-circle"></i>
						<small>Error message</small>
					</div>
					<div class="form-control" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="email" name="email" id="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
						<i class="fas fa-check-circle"></i>
						<i class="fas fa-times-circle"></i>
						<small>Error message</small>
					</div>

					<div class="form-control" data-validate = "Password is required">
						<input class="input100" type="password" name="password" id="password" placeholder="Password"> 
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
						<i class="fas fa-check-circle"></i>
						<i class="fas fa-times-circle"></i>
						<small>Error message</small>
					</div>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" name="submit"  onclick = "insert();">
							submit
						</button>
					</div>
					<br>
					<br>
					<div class="text-center p-t-136">
						<a class="txt2" href="login.php" 
						style="margin-left: 80px;">
							Already Have An Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	<script src="js/signup.js"></script>
	<script type="text/javascript">
      // Prevent form from submit or refresh
      
      function handleForm(event) { event.preventDefault(); }
      form.addEventListener('submit', handleForm);
      // Function
      function insert(){
        $(document).ready(function(){
          $.ajax({
            // Action
            url: 'validate.php',
            // Method
            type: 'POST',
            data: {
              // Get value
              name: $("input[name=name]").val(),
              email: $("input[name=email]").val(),
              number: $("input[name=number]").val(),
              password: $("input[name=password]").val(),
              action: "insert"
            },
            success:function(response){
              // Response is the output of action file
              if(response == 1){
                alert("Data Added Successfully!");
              }
              else if(response == 2){
                alert("Email Is Already exist");
              }
			//   else{
			// 	alert(response);
			//   }
            }
          });
        });
      }
    </script>
</body>

</html>