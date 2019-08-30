<?php
session_start();
//  connect to DB
$db = mysqli_connect("localhost","root","","reg");
mysqli_set_charset($db,"utf8");
if(isset($_POST['btn'])){
	if(empty($_POST['name'])){
		$message = "Խնդրում ենք լրացնել անունը";
  	echo "<style type='stylesheet'>alert('$message');</script>";  
	}else{
	$name = $_POST['name'];
}
	if(empty($_POST['lastname'])){
		$message = "Խնդրում ենք լրացնել ազգանունը";
  	echo "<script type='text/javascript'>alert('$message');</script>";  
	} else{
	$lastname = $_POST['lastname'];
}
		if(empty($_POST['email'])){
		$message = "Խնդրում ենք լրացնել Էլ․հասցէն";
  	echo "<script type='text/javascript'>alert('$message');</script>";  
	}else{
	$email = $_POST['email'];
}
	if(empty($_POST['password'])){
		$message = "Խնդրում ենք լրացնել գաղտնաբառը";
  	echo "<script type='text/javascript'>alert('$message');</script>";  
	}else{
	$password = $_POST['password'];
}
if(empty($_POST['conpassword'])){
		$message = "Խնդրում ենք կրկնել գաղտնաբառը ";
  	echo "<script type='text/javascript'>alert('$message');</script>";  
	}else{
	$conpassword = $_POST['conpassword'];
}
if(empty($_POST['date'])){
		$message = "Խնդրում ենք լրացնել տարեթիվը";
  	echo "<script type='text/javascript'>alert('$message');</script>";  
	}else{
	$date = $_POST['date'];
}
if(empty($_POST['gender'])){
		$message = "Խնդրում ենք լրացնել սեռը";
  	echo "<script type='text/javascript'>alert('$message');</script>";  
	}else{
	$gender = $_POST['gender'];
}
if(empty($_POST['country'])){
		$message = "Խնդրում ենք լրացնել քաղաքը";
  	echo "<script type='text/javascript'>alert('$message');</script>";  
	}else{
	$country = $_POST['country'];
}
	if(empty($_FILES['pic']['name'])){
		if($gender === 'male'){
  $img = "../img/Male.jpg";
}else{
	$img = "../img/Female.jpg";
}
 }
  else{
  $img = date("Y-m-d-H-i-s-").$_FILES['pic']['name'];
  copy($_FILES['pic']['tmp_name'],"../img/$img");
 }
	if($password == $conpassword){
		$password = $password;
		if(empty($_POST['name'] && $_POST['lastname'] && $_POST['email'] && $_POST['password'] && $_POST['country'] && $_POST['gender'] && $_POST['date'])){
			header("location:register.php");

		}
		if(!empty($_POST['name'] && $_POST['lastname'] && $_POST['email'] && $_POST['password'] && $_POST['country'] && $_POST['gender'] && $_POST['date'])){
		$sql = "INSERT INTO users(`img`,`name`,`lastname`,`email`,`password`,`date`,`gender`,`country`)VALUES('$img','$name','$lastname','$email','$password','$date','$gender','$country')";
		mysqli_query($db,$sql);
		


$message = "Շնորհավորում եմ,կարող եք այժմ մուտք գործել";
  	echo "<script type='text/javascript'>alert('$message');</script>";  
		


	}else{
		$message = "Խնդրում ենք լրացնել պարտադիր լրացման դաշտերը ";
  	echo "<script type='text/javascript'>alert('$message');</script>";  

	}

	}else{
		$message = "Ցավոք,Գաղտնաբառը չի համընկնում ";
  	echo "<script type='text/javascript'>alert('$message');</script>";  

	}

}

?>

<!DOCTYPE html>
<html>
<head>
	<title>MyWebSayt</title>
	<link rel="stylesheet" type="text/css" href="css/register.css">
	<link rel="icon" href="../img/icon.png" type="image/x-icon">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>
<body>
	<div class="header">
		<h1>MyWebSayt</h1>
	</div>

	<div class="card">
		<h2>Do You Have an Account?</h2>
		<button class="btn"><a href="../login.php" style="text-decoration:none;">Log in</a></button>
	</div>
	<div class="reg">
		<h3><img width="50px" height="50px" src="../img/registr.png"></h3> <br>
		<form enctype="multipart/form-data" action="" method="post" >
			<i class="fas fa-user"></i>
		<input type="text" class="name" name="name" placeholder="Name"> <br> <br>
		<i class="fas fa-user"></i>
		<input type="text" class="lastname" name="lastname" placeholder="Last Name">	<br> <br>
		<i class="far fa-envelope"></i>
		<input type="text" class="email" name="email" placeholder="Email">	<br> <br>
		<i class="fas fa-lock"></i>
		<input type="password" class="password" name="password" placeholder="Password">	<br> <br>
		<i class="fas fa-lock"></i>
		<input type="password" class="conpassword" name="conpassword" placeholder="Confirm Password">	<br> <br>
		<i class="fa fa-birthday-cake fa-fw w3-margin-right w3-text-theme"></i>
		<input type="text" class="conpassword" name="country" placeholder="Country">	<br> <br>
		<i class="fa fa-birthday-cake fa-fw w3-margin-right w3-text-theme"></i>
		<input type="date" name="date"><br><br>
		<input type="file" name="pic"><br><br>
		<input  type="radio" class="gender" name="gender" value="male"> <span>Male</span>
		<input type="radio" class="gender" name="gender" value="female"> <span>Female</span> <br> <br> <br>
		<input type="submit" value="Register" style="border-radius: 45px;border:none;" class="regbtn" name="btn">
	</form>

	</div>




	<script type="text/javascript">
	for(i=2019;i>=1900;i--){
		
		document.getElementById('year').innerHTML+='<option value="'+i+'">'+i+'</option>'
	}
	var month=['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec']
	for(i=0;i<month.length;i++){
		 var k=i+1
		 if (k<10) {
		 	k='0'+k
		 }
		document.getElementById('month').innerHTML+='<option value="'+k+'">'+month[i]+'</option>'
	}
	for(i=0;i<=30;i++){
		 var k=i+1
		 if (k<10) {
		 	k='0'+k
		 }
		document.getElementById('day').innerHTML+='<option value="'+k+'">'+k+'</option>'
	}
</script>
</body>
</html>