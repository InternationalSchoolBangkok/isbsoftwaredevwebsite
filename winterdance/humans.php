<?php
$file_contents = file_get_contents("members.txt");
$brd = nl2br($file_contents);
echo($brd);	
?>