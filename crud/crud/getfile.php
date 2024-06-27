<?php
$fptr=fopen("myfile.txt","r");
echo fgets($fptr);

 //fgets reads only one line in file
 //and we can read it whole by writing in while loop

 echo fgetc($fptr);
?>