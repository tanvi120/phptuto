<?php
// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

$fptr = fopen("myfile2.txt", "w");
if (!$fptr) {
    die("Unable to open file for writing.");
}
fwrite($fptr, "This is the best file on this planet. Please dont argue with me on this one.\n"); 
fwrite($fptr, "This is another content\n"); 
fwrite($fptr, "This is another content3"); 
// fclose($fptr);
?>
