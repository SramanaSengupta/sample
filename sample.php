<?php
//if "email" variable is filled out, send email
  if (isset($_REQUEST['email1']))  {
  
  //Email information
  $admin_email = "someone@example.com";
  $email = $_REQUEST['email1'];
  $subject = $_REQUEST['subject11'];
  $comment = $_REQUEST['comment1'];
  
  //send email
  mail($admin_email, "$subject", $comment, "From:" . $email);
  
  //Email response
  echo "Thank you for contacting us!";
  }
  
  //if "email" variable is not filled out, display the form
  else  {
?>
