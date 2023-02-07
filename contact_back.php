<?php

  session_start();
  header('location: ');

  $con = mysqli_connect('localhost','root','');

  mysqli_select_db($con, 'crowdfunding');

  $FullName = $_POST['Fname'];
  $email = $_POST['Email'];
  $subject = $_POST['Subject1'];
  $message = $_POST['Message1'];


  

  $s = "SELECT * FROM contact WHERE Fname = '$FullName' ";

  $result = mysqli_query($con,$s);

  $num = mysqli_num_rows($result);

  if($num==1){
      echo"Username aleready taken";
  }else{
      $reg ="INSERT INTO contact(Fname , Email , Subject1 , Message1) VALUES('$FullName' , '$email' , ' $subject' ,'$message')";
      mysqli_query($con, $reg);
      echo "Message send Successfully....";
  }
?>