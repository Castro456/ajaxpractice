<?php


$conn =mysqli_connect('localhost','root','giveaccess','mydata');
$query = "SELECT id,task,progress FROM task_table";
$result= mysqli_query($conn,$query);
$names= mysqli_fetch_all($result, MYSQLI_ASSOC);
echo json_encode($names);


?>