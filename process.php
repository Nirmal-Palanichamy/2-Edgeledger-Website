<?php
  if (isset($_POST['email']))  {
  
    //Email information
    $admin_email = "nirmal.palanichamy@gmail.com";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    
    //send email
    mail($admin_email, "New Form Submission", " - " . $phone, "From:" . $email);
    
    header('Location: https://udemy.com');
  }