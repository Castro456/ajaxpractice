<?php

$conn =mysqli_connect('localhost','root','giveaccess','mydata');

    $key= $_POST['delete'];
    $querydelete="DELETE  FROM task_table WHERE id=$key "; 
    $value=mysqli_query($conn,$querydelete);
    echo "Deleted";


?>