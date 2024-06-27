<?php
$fptr=fopen("myfile.txt","r");


if(!$fptr){
    die("not opened");
}
$content=fread($fptr,filesize("myfile.txt" ));
fclose($fptr); //close file
echo $content;
?>