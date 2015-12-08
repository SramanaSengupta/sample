<?php
//if "email" variable is filled out, send email
  if (isset($_REQUEST['email1']))  {
  
  //Email information
  $admin_email = "someone@example.com";
  $email = $_REQUEST['email56'];
  $subject = $_REQUEST['subject78'];
  $comment = $_REQUEST['comment89'];
  
  //send email
  mail($admin_email, "$subject", $comment, "From:" . $email);
  
  //Email response
  echo "Thank you for contacting us!";
  }
  
  //if "email" variable is not filled out, display the form
  else  {
?>
