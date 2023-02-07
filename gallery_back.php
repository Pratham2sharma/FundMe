<?php

  session_start();
  header('location:');

  $con = mysqli_connect('localhost','root','');

  mysqli_select_db($con, 'crowdfunding');

  $CampaignName = $_POST['CampaignName'];
  $image = $_POST['images'];
  $description = $_POST['Description3'];



   $reg ="INSERT INTO gallery( CampaignName , images ,  Description3  ) VALUES( '$CampaignName' , '$image' , '$description')";
   mysqli_query($con, $reg);
   echo "Form Submitted";
  
?>