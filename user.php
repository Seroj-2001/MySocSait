<?php include('header.php'); ?>
<?php
session_start();
$con=mysqli_connect("localhost","root","","reg");
mysqli_set_charset($con,"utf8");
$id=$_SESSION['id'];
$select=mysqli_query($con,"SELECT * FROM  users WHERE id = '$id' ");
while($assoc = mysqli_fetch_array($select))
{ 
$name=$assoc['name'];
$lastname=$assoc['lastname'];
$country=$assoc['country'];
$date=$assoc['date'];
$image=$assoc['img'];
}

if(isset($_POST["subm"])){ 

if(empty($_FILES['pic']['name'])){
   $pic = "../img/header.jpg"; 
 }else{
  $pic = date("Y-m-d-H-i-s-").$_FILES['pic']['name'];
  $tmp = $_FILES['pic']['tmp_name'];
  copy($tmp,"../img/$pic");
 $in = mysqli_query($con,"INSERT INTO image (`image`,`name`,`user_id`)VALUES('$tmp','$pic','$id')");
}
if($in){
  header("location:user.php?result=1");
}else{
  header("location:user.php?result=0");
}
}
    ?>
<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">    
  <!-- The Grid -->
  <div class="w3-row">
    <!-- Left Column -->
    <div class="w3-col m3">
      <!-- Profile -->
      <div class="w3-card w3-round w3-white">
        <div class="w3-container">
         <h4 class="w3-center">My Profile</h4>
         <p class="w3-center"><img src="../img/<?php echo $image ?>" class="w3-circle" style="height:250px;width:250px" alt="Avatar"></p>
         <hr>
         <p><i class="fas fa-user fa-fw w3-margin-right w3-text-theme"></i><span>Name:</span><?php echo $name?></p>
         <p><i class="fa fa-pencil fa-fw w3-margin-right w3-text-theme"></i><span> Lastname:</span><?php echo $lastname?></p>
         <p><i class="fa fa-pencil fa-fw w3-margin-right w3-text-theme"></i><span>City:</span ><?php echo $country?></p>
         <p><i class="fa fa-birthday-cake fa-fw w3-margin-right w3-text-theme"></i><span>Birthday:</span><?php echo $date;?></p>
        </div>
      </div>
      <br>
       
      <!-- Accordion -->
      <div class="w3-card w3-round">
        <div class="w3-white">
          <button onclick="myFunction('Demo3')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-users fa-fw w3-margin-right"></i> My Photos</button>
          <div id="Demo3" class="w3-hide w3-container">

     <form action="" method="post" enctype="multiple/form-data">
          <input multiple type="file"  name="pic">
          <input type="submit" name="subm" value="Ներբեռնել" class="w3-theme-d1">
    </form>

         <div class="w3-row-padding">
         <br>
           <div class="w3-half">
      <img src="../img/<?php echo $image ?>" style="width:100%" class="w3-margin-bottom">
           </div>
         

         </div>
          </div>
        </div>      
      </div>
      <br>
  </div>
    
    <!-- Middle Column -->
    <div class="w3-col m7">
    
      <div class="w3-row-padding">
        <div class="w3-col m12">
          <div class="w3-card w3-round w3-white">
            <div class="w3-container w3-padding">
              <h3 class="w3-opacity">Հրապարակում</h3>
    <form enctype="multipart/form-data" action="addnews.php" method="post">
          <input class="w3-margin-bottom" type="text" name="title" placeholder="Վերնագիր">
             <input  class="w3-row-padding-margin w3-margin-bottom" style="height: 150px;"       type="text" placeholder="Ինչի մասին եք դուք մտածում <?php echo $name ?>"          name="text">
                      <input type="file" value="Nerberneq" name="pic">
              <input type="submit" value="Հրապարակել"  class="w3-theme-d1" name="btn">
      </form>
            </div>
          </div>
        </div>
      </div>
      <?php



 $select=mysqli_query($con,"SELECT * FROM  news ");
while($assoc = mysqli_fetch_array($select))
{ 
$title=$assoc['title'];
$img=$assoc['img'];
$text=$assoc['text'];
$date = date("Y-m-d h:i");
$user_id = $assoc['user_id'];

$row=mysqli_query($con,"SELECT * FROM  users WHERE id = '$user_id' ");
while($assoc = mysqli_fetch_array($row))
{ 
$anun=$assoc['name'];
$nkar=$assoc['img'];
}




?>


      <div class="w3-container w3-card w3-white w3-round  w3-margin" ><br>
        <img src="../img/<?php echo $nkar ?>" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
        <span class="w3-right w3-opacity"><?php echo $date ?></span>
        <h4><?php echo $anun ?></h4><br>
        <hr class="w3-clear">
        <h5><?php echo $title ?></h5><br>
        <p><?php echo $text ?></p>
          <div class="w3-row-padding" style="margin:0 -16px">
            <div class="w3-half">
              <img src="../img/<?php echo  $img ?>" style="height: 400px;width: 400px;" alt="Northern Lights" class="w3-margin-bottom">
            </div>
        </div>
      <button id="but" onclick="comment()"  class="w3-button w3-theme-d2 w3-margin-bottom">Comment</button>
<?php 
$select=mysqli_query($con,"SELECT * FROM  comment ");
while($assoc = mysqli_fetch_array($select))
{ 
$id_comment = $assoc['id'];
$text= $assoc['comment'];
$date = $assoc['date'];
$user_i = $assoc['user_i'];


$row=mysqli_query($con,"SELECT * FROM  users WHERE id = '$user_i' ");
while($assoc = mysqli_fetch_array($row))
{ 
$anun=$assoc['name'];
$nkar=$assoc['img'];
} ?>
        <form action="addcomment.php" method="post" >
          <textarea class="w3-margin " id="text" style="display:none;" name="text" autofocus></textarea>
       <input id="submit" name="submit"  style="display:none;" value="ՄԵկնաբանել" type="submit" class="w3-button w3-theme-d2 ">
      </form>

      <div class="w3-container w3-block w3-margin-bottom w3-theme-d2 " style="border:1px solid black;border-radius:45px;">
        <img src="../img/<?php echo $nkar ?> " style="border-radius: 45px;" class="w3-margin w3-theme-d2" height="40" width="40">
        <span ><?php echo $name ?></span>
        <p ><?php echo $text ?></p>
      </div>
<?php } ?>
    
      </div>

    <!-- End Middle Column -->
    </div>
<?php } ?>

  <!-- End Grid -->
  </div>
<!-- End Page Container -->

</div>



<br>
<?php include ('footer.php'); ?>