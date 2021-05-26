<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Only PHP</title>
</head>
<body>
    
    <?php
    $conn =mysqli_connect('localhost','root','giveaccess','mydata');
    $query = "SELECT id,task,time_kept,user,progress FROM task_table";
    if($result= mysqli_query($conn,$query))
    {
      while($rows=mysqli_fetch_assoc($result))  
    { ?>
    <tr>
        <td><?php echo $rows['id'] ?></td>   
        <td><?php echo $rows['task'] ?></td>
        <td><?php echo $rows['time_kept'] ?></td>       
        <td><?php echo $rows['user'] ?></td>       
        <td><?php echo $rows['progress'] ?></td>  
        <td>
      <button  class="delete" value="<?php echo $rows['id']?>">Delete
      </button> 
        </td>
    </tr>
    <?php
    }  }
    else{
        echo "0 results";
    }
    ?> 

</body>
</html>