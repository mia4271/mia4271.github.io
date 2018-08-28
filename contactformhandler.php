<?php
  $name = $_POST['name'];
  $visitor_email = $_POST['email'];
  $message = $_POST['message'];

  $email_from = 'miayumengs@yahoo.com';

  $email_subject = "New Form Submission From cmai.ca";

  $email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                "User Message: $message.\n";

  $to = "miashi142857@gmail.com";

  $headers = "From: $email_from \r\n";
  $headers .= "Reply-To: $visitor_email \r\n";
  mail ($to,$email_subject,$email_body,$headers);
  header("Location: contactus.html");
?>
