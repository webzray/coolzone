<?php
//get data from form  

$name= $_POST['name'];
$email= $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$to = "contact@coolzoneentertainers.lk";
$subject = "Mail From CoolZone";
$txt ="Name = " . $name . "\r\n  Email = " . $email . "\r\n  Phone = " . $phone . "\r\n  Message = " . $message;
$headers = "From: noreply@coolzoneentertainers.lk" . "\r\n" .
"CC: webzray.tech@gmail.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
	$successMessage = "Success";
}

//redirect

header("Location:index.html");
?>