<?php

  session_start();
  header('location: index.php');

  $con = mysqli_connect('localhost','root','');

  mysqli_select_db($con, 'crowdfunding');

  $Username = $_POST['Uname'];
  $email = $_POST['Email'];
  $number = $_POST['MNumber'];
  $password = $_POST['Pass'];
  $Cpassword = $_POST['Cpassword'];

  

  $s = "SELECT * FROM registration WHERE Uname = '$Username' ";

  $result = mysqli_query($con,$s);

  $num = mysqli_num_rows($result);

  if($num==1){
      echo"Username aleready taken";
  }else{
      $reg ="INSERT INTO registration(Uname , Email , MNumber ,  Pass , Cpassword) VALUES('$Username' , '$email' , ' $number' ,'$password' , '$Cpassword')";
      mysqli_query($con, $reg);
      echo "registration Successfull....";
  }
?>