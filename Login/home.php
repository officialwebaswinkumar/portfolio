<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Product Landing Page</title>
</head>
<body>
 <nav>
   <div class="logo">Welcome</div>
   <!-- toggle menu button -->
   <span class="menubtn" onclick="openNav()">&#9776;</span>
 
   <div class="navLinks">
     <ul>
       <li><a href="#">Home</a></li>
       <li><a href="#">About</a></li>
       <li><a href="profile.php">My Profile</a></li>
       <li><a href="logout.php">Logout</a></li>
     </ul>
   </div>
 </nav>
 <br><br>
   <div class="container-login100">
    <div class="wrap-login100">
    <span class="login100-form-title">
						<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum doloribus facilis expedita quod impedit magni unde blanditiis dolor, eaque earum labore optio nobis adipisci aperiam odio consectetur deserunt illo ad?</p>
					</span>
</div>
</div>
   
   <!-- Header content with banner image -->
   <div class="row">
     <div class="column1">
     <?php if (isset($_SESSION['success'])) : ?>
            <div class="error success" >
                <h3>
                    <?php
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                    ?>
                </h3>
            </div>
        <?php endif ?>
  
        <!-- information of the user logged in -->
        <!-- welcome message for the logged in user -->
        <?php  if (isset($_SESSION['name'])) : ?>
<p>
                Welcome
                <strong>
                    <?php echo $_SESSION['name']; ?>
                </strong>
            </p> 
<p>
<a href="login.php?logout='1'" style="color: red;">
                    Click here to Logout
                </a>
            </p>
 
 
 
        <?php endif ?>
     </div>
     <div class="column2">
       <img src="https://www.hmablogs.com/wp-content/uploads/2022/06/banner-img.png" alt="banner" width="500px">
     </div>
   </div>
   
   
   <!-- javascript to make side menu appear -->
 <script>
   function openNav() {
     document.getElementById("sidenav").style.width = "50%";
   }
   function closeNav() {
     document.getElementById("sidenav").style.width = "0%";
   }
 </script>
 
</body>
</html>