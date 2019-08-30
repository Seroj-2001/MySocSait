<?php 

session_start();
$con=mysqli_connect("localhost","root","","reg");
if(isset($_COOKIE['admin'])){
	$_SESSION['admin']=true;
}
if(isset($_SESSION['admin'])){
	header("location:user/user.php");
	die();
}
if (isset($_POST['btn'])) {
$email=$_POST['email'];
$password=$_POST['password'];

if (!empty($email) && !empty($password)) {
$password=md5($password);
$select=mysqli_query($con,"SELECT * FROM  users WHERE email='$email' AND password='$password'" );
  $rows=mysqli_num_rows($select);
  if ($rows==1) {
    $assoc=mysqli_fetch_assoc($select);

$id=$assoc['id'];
 $_SESSION['id']=$id;
 $_SESSION['admin'] = true;
 	if(isset($_POST['save'])){
 		setcookie("admin",true,time()+60*60*24*365);
 	}
  header("location:user/user.php?id = '$id'");

  }else{
  	$message = "Մուտքանունը կամ ծածկանունը Սխալ Է";
  	echo "<script type='text/javascript'>alert('$message');</script>";  	
  }
}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>MyWebSayt</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link rel="icon" href="img/icon.png" type="image/x-icon">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>
<body>
	<div class="header">
		<h1>MyWebSayt</h1>
	</div>
	<div class="card">
		<h2>Don't Have an Account?</h2>
		<button class="btn"><a href="register/register.php">Sign up</a></button>
	</div>
	<div class="log">
		<h3><img width="70px" height="70px" src="../img/user.png"></h3><br>
		<br><br>
	<form action="login.php" method="post" >
		<i class="fas fa-user"></i>
		<input type="email" name="email"	class="email" placeholder="Email"> <br> <br> <br>
		<i class="fas fa-lock"></i>
		<input type="password" name="password"	class="password" placeholder="Password">	<br> <br>
		<button type="submit" class="logbtn" name="btn"> Log in</button>	
	</form>
		
	</div>
	
</body>
</html>