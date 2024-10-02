<?php 
//sprintf()

//%s is used for inserting strings into the formatted output.
//%d or %i is used for inserting signed decimal integers into the formatted output.
//%f is used for inserting floating-point (decimal) numbers into the formatted output.
$fname="Rayhan";  
$lname="Amin";
$age=24;
$height= 5.4;
 $result=sprintf("Name:%s %s Age:%d height:%f ft", $fname,$lname, $age, $height);
 //(1) String formatting
 echo $result;

