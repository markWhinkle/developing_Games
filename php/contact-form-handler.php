<?php
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $locate = $_POST['locate'];
  $visitor_email = $_POST['email'];
  $message = $_POST['message'];

  $email_from = 'developinggames.tech@gmail.com';
  $email_subject = "New Form Submission";

  $email_body = "User First Name:  $fname.\n".
                    "User Last Name: $lname.\n".
                    "User Location: $locate.\n".
                    "User Email: $visitor_email.\n".
                    "User Message: $message.\n";
  $to = "developinggames.tech@gmail.com";
  $headers = "From: $email_from \r\n";

  $headers .= "Reply-To: $visitor_email \r\n";

  mail($to,$email_subject,$email_body,$headers);
  header("Location: https://developinggames.tech/index.html");
  exit();
?>
