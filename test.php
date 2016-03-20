<?php
$subject = "SD Inquiry From ";
$msg = "hueston heus";
$msg = wordwrap($msg,70);
// send email
$headers = "From: contact@studentdevelopers.isb.ac.th";//for local testing replace this with "contact@noname.local"
mail("15998@students.isb.ac.th",$subject,$msg,$headers);
//header("Location: contact.php");
?>
