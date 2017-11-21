<?php
$myfile = fopen("/tmp/test.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("/tmp/test.txt"));
fclose($myfile);
?>
