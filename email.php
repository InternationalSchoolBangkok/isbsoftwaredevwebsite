<?php
$subject = "SD Inquiry From ".$_POST["name"];
$msg =
"Client Organization: ".$_POST["organization"].
"\nClient Email: ".$_POST["email"].
"\n\nMessage From Client:\n".$_POST["message"];
// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);
// send email
$headers = "From: contact@studentdevelopers.isb.ac.th";//for local testing replace this with "contact@noname.local"
mail("15998@students.isb.ac.th",$subject,$msg,$headers);
header("Location: contact.php");
?>
