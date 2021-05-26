<?php
$conn =mysqli_connect('localhost','root','giveaccess','mydata');


    $key= $_GET['done'];
    $querydone="UPDATE task_table SET progress = 2 WHERE id = $key "; 
    $value=mysqli_query($conn,$querydone);
    echo "Done";



?>