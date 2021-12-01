<?php

// echo "Processing";

// $conn =mysqli_connect('localhost','root','giveaccess','ajax_test');

if(isset($_POST['postname']))
{
    // $name = mysqli_real_escape_string($conn,$_POST['postname']);
    echo "Your name from POST is:" .$_POST['postname'];
    echo "Your name from POST is 1:" .$_POST['postname1'];
    // $query = "INSERT INTO test(names) VALUES ('$name')";
    // if(mysqli_query($conn,$query))
    // {
    //     echo "User Added";
    // }
    // else
    // {
    //     echo "Problem occured";
    // }
}

if(isset($_GET['pname']))
{
    echo "Your name is:" .$_GET['pname'];
}




?>