<?php
//file_put_contents('test.txt', file_get_contents('php://input'));
$filename = 'members.txt';
$old = file_get_contents($filename);
file_put_contents($filename,$old."\n".file_get_contents('php://input'))
?>
