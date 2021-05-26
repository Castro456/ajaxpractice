<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>View</title>
</head>
<body>
<form action="del.php" method="get" id="getform">
<table>
<thead>
<tr>
<th colspan="7" ><h1>Tasks</h1></th>
</tr>
<tr>
  <!-- <th scope="col">Check</th> -->
  <th scope="col">#</th>
  <th scope="col">Task</th>
  <th scope="col">Date</th>
  <th scope="col">User</th>
  
  <th scope="col">Delete</th>
  <!-- <th scope="col">Done</th> -->
</tr>
</thead>
<?php
$conn =mysqli_connect('localhost','root','giveaccess','mydata');
$query = "SELECT id,task,time_kept,progress FROM task_table";

if($result= mysqli_query($conn,$query))
{
 while($rows=mysqli_fetch_assoc($result))  
{ ?>
 <tr>
    <td class="table-primary"><?php echo $rows['id'] ?></td>   
    <td class="table-warning"><?php echo $rows['task'] ?></td>
    <td class="table-info"><?php echo $rows['time_kept'] ?></td>
    
    <td class="table-dark"><?php echo $rows['progress'] ?></td>
    <td class="table-danger">
      <button  id="del" value="<?php echo $rows['id']?>">Delete
      </button>
</form>

    </td>
    <!-- <td class="table-danger"> -->
      <!-- <button  id="done" value="<?php echo $rows['id']?>">Done
      </button>
    </td> -->
  </tr>
<?php
}
}
?> 
<!-- </form> -->
</table>
<script>
        document.getElementById("getform").addEventListener("submit",view);
        // document.getElementById("doneform").addEventListener("submit",done1);
        function view(e){
        e.preventDefault();
        var del = document.getElementById("del").value;
        console.log(del);
        return false;
        var xhr = new XMLHttpRequest();
        xhr.open("GET","del.php?delete="+del,true);
        xhr.onload = function(){
          alert(this.responseText);
            console.log(this.responseText);
        }
        xhr.send();
        }

        // function done1(e){
        // e.preventDefault();
        // var don = document.getElementById("done").value; 
        // console.log(don);
        // return false;
        // var xhr = new XMLHttpRequest();
        // xhr.open("GET","done.php?done="+don,true);
        // xhr.onload = function(){
        //   alert(this.responseText);
        //     console.log(this.responseText);
        // }
        // xhr.send();
        // }
</script>
</body>
</html>