<?php

if (isset($_POST['submit'])) {


  $name = $_POST['name'];
  $mailFrom = $_POST['email'];
  $message = $_POST['message'];

  $mailTo = "miayumengs@yahoo.com";
  $headers = "From: ".$mailFrom;
  $txt = "New Form Submission From cmai.ca".$name.".\n\n".$message;


  mail ($mailTo,$mailFrom, $txt, $headers);
header("Location: contact.php?mailsend");

}

?>
