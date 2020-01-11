<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$role="user";
$usernameError = $emailError = $passwordError = $sameUsernameError = $sameEmailError = "";
$db = mysqli_connect('localhost', 'root', 'root', 'pizza2go');

// REGISTER USER
if (isset($_POST['submit'])) {
  // receive all input values from the form  $username = mysqli_real_escape_string($db, $_POST['username']);
  $name = $_POST['name'];
  $surName = $_POST['surName'];
  $telephone = $_POST['telephone'];
  $email = $_POST['email'];
  $address = $_POST['address'];
  $city = $_POST['city'];
  $username = $_POST['username'];
  $password = $_POST['password'];
 

  if (empty($_POST["username"])) {
    $usernameError = "Username is required!";
  } 
  if (empty($_POST["email"])) {
    $emailError = "Email is required!";
  } 
  if (empty($_POST["password"])) {
    $passwordError = "Password is required!";
  } 

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $userName_check_query = "SELECT * FROM users WHERE UserName ='$username'";
  $isExistUsername = mysqli_query($db, $userName_check_query);
  
 // if username exists
  if (mysqli_num_rows($isExistUsername) > 0) {
        $sameUsernameError = "Username already exists";

    }
  
  $userEmail_check_query = "SELECT * FROM users WHERE Email ='$email'";
  $isExistEmail = mysqli_query($db, $userEmail_check_query);
  if (mysqli_num_rows($isExistEmail) > 0) {
    
            $sameEmailError ="Email already exists";
        
    } 
  
 

  // Finally, register user if there are no errors in the form
  if (empty($usernameError) && empty($emailError) && empty($passwordError) && empty($sameUsernameError) && empty($sameEmailError)) {

  	$query = "INSERT INTO users (Name, SurName, PhoneNumber, Email, Address, City, Role, UserName, Password) 
  			  VALUES('$name', '$surName', '$telephone', '$email', '$address', '$city', '$role', '$username', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
  }
  else {
 
  }
}












?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Sign Up</title>

<link rel="stylesheet" href="css/design-iconic-font.min.css">

<link rel="stylesheet" href="css/LS-form.css">
</head>
<body>
<div style="position:absolute;left:10px;top:10px;color:red;font-size: 30px;">

</div>

<div class="main">
<section class="signup">

<div class="container">
<div class="signup-content">
<form action="LS-form.php" method="POST" id="signup-form" class="signup-form">
	  	

<h2 class="form-title">Sign Up</h2>


<div class="form-group">
<input type="text" class="form-input" name="name" id="name" placeholder="Your Name" style="margin-bottom: 25px" >

<div class="form-group">
<input type="text" class="form-input" name="surName" id="surName" placeholder="Your Surname" />
</div>
<div class="form-group">
<input type="tel" class="form-input" name="telephone" id="telephone" placeholder="Phone Number" />
</div>
<div class="form-group"> 
<input type="email" class="form-input" name="email" id="email" placeholder="Your Email"value="<?php echo $email;  ?>" />
<span class="error1" style="color: red;font-size: 15px;position: absolute;left: 440px;top: 370px;"><?php echo $emailError." ".$sameEmailError;?></span>

</div>
<div class="form-group">
<input type="text" class="form-input" name="address" id="address" placeholder="Your Address" />
</div>
<div class="form-group">
<input type="text" class="form-input" name="city" id="city" placeholder="Your City" />
</div>


<div class="form-group">
<input type="text" class="form-input" name="username" id="userName" placeholder="Username" value="<?php echo $username; ?>"/>
<span class="error2"  style="width:150px;color: red;font-size: 15px;position: absolute;left: 420px;top: 600px;"><?php echo $usernameError." ".$sameUsernameError;?></span>

</div>
<div class="form-group">
<input type="password" class="form-input" name="password" id="password" placeholder="Password" />
<span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
<span class="error3"  style="color: red;font-size: 15px;position: absolute;left: 420px;top: 680px;"><?php echo $passwordError;?></span>

</div>


<div class="form-group">
<input type="submit" name="submit" id="submit" class="form-submit" value="Sign up" />
</div>
</form>
<p class="loginhere">
Have already an account ? <a href="L-form.php" class="loginhere-link">Login here</a>
</p>
</div>
</div>
</section>
</div>
<div class="header1" style="display: none;"></div>

<script src="scripts/jquery.min.js" type="7ba176c96d36e3d20864ed5f-text/javascript"></script>
<script src="scripts/main.js" type="7ba176c96d36e3d20864ed5f-text/javascript"></script>

<script async src="scripts/textjavasecript.js" type="7ba176c96d36e3d20864ed5f-text/javascript"></script>

<script src="scripts/rocket-loader.min.js" data-cf-settings="7ba176c96d36e3d20864ed5f-|49" defer=""></script></body>
</html>