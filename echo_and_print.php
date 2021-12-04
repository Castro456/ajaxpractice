<?php
function checking()
{
  $fname = "Castro";
  $lname = "Zac";
  echo "$fname $lname";
}

checking();

// print is slower than echo because it does both the display and return value
$name = "Hello";
$display = print ("$name"); // print has a return value of 1
echo $display; // Output will be < Hello 1 >