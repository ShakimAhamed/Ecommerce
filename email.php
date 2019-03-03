<?php
include 'dbconnect.php';

if (isset($_REQUEST['email']))  
{
  
  //Email information
  $admin_email = "sakimahamed37@gmail.com";
  $email = $_REQUEST['email'];
  $subject = $_REQUEST['sub'];
  $comment = $_REQUEST['msg'];
  
  //send email
  mail($admin_email, "$subject", $comment, "From:" . $email);
  
  //Email response
  echo "Thank you for contacting us!";
  header('Location: contact.php');
  }
  
  //if "email" variable is not filled out, display the form
  else  {
      header('Location: contact.php');
  }

?>