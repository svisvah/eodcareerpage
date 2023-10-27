<?php

$header = "From: noreply@example.com\r\n";
$header.= "MIME-Version: 1.0\r\n";
$header.= "Content-Type: text/html; charset=ISO-8859-1\r\n";
$header.= "X-Priority: 1\r\n";

if(isset($_POST['submit'])) {
    $name = $_POST['firstname'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $phone = $_POST['phone'];

    $description = $_POST['description'];
    $to = "moorthyp.eod@gmail.com"; // Replace with your own email address
    $headers = "From: $email";

    if(mail($to, $email, $description, $phone, $header)) {
       
    } else {
        echo "Oops! Something went wrong.";
  header('Location: index.php');
    }
  
}
?>
