<?php
$conn = mysqli_connect("localhost:5501", "root", "", "guvitask");

// Choose a function depends on value of $_POST["action"]
if($_POST["action"] == "insert"){
  insert();
}

// Function
function insert(){
  global $conn;
  $name = $_POST["name"];
  $email = $_POST["email"];
  $number = $_POST["number"];
  $password = $_POST["password"];

  // Check if variable value is empty
  if(empty($name) || empty($email) || empty($number) || empty($password)){
    // Output
    echo "";
    exit;
  }

  // Check if email still available
  $sameEmail = mysqli_query($conn, "SELECT * FROM signup WHERE email = '$email'");
  if(mysqli_num_rows($sameEmail) > 0){
    // Output
    echo 2;
    exit;
  }

  // Insert value to database
  
  $stmt = $conn->prepare("INSERT INTO signup (name , email ,number ,password)values(?,?,?,?)");
  $stmt->bind_param("ssds", $name, $email, $number, $password);
  $stmt->execute();
  $stmt->close();
  $conn->close();
  echo 1;
}

// login valid
if($_POST["action"] == "login"){
  login();
}

// Function
function login(){
  global $conn;
  $email = $_POST["email"];
  $password = $_POST["password"];

  // Login Valid Check
  $loginCheck = mysqli_query($conn, "SELECT * FROM signup WHERE email = '$email' And password = '$password' ");
  if(mysqli_num_rows($loginCheck) > 0){
    echo 1;
    exit;
  }
else{
echo 2;
}
}
?>
