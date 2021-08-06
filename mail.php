<?php
//get data from form  
{

$name = $_POST['nameinput'];
$email= $_POST['emailinput'];
$message= $_POST['textareamessage'];
$to = "martina_murdjovska@hotmail.com";
$subject = "Mail From my website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;

// $headers = "From: martinamurdzovska@gmail.com" . "\r\n" .
// "CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("thankyou.html");
?>
}