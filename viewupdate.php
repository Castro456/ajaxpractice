<?php
$conn =mysqli_connect('localhost','root','giveaccess','mydata');
$query = "SELECT id,task,time_kept,progress FROM task_table";
if($result= mysqli_query($conn,$query)) {
    while($rows=mysqli_fetch_assoc($result)) {
?>	
		<tr id= "<?= $rows['id'];?>">
			<td data-target="task" id="t1"><?= $rows['task'];?></td>
			<td data-target="time" ><?= $rows['time_kept'];?></td>
			<td data-target="progress"><?= $rows['progress'];?></td>
			<td><button type="button" class="btn btn-success btn-sm update" data-toggle="modal"  
			data-role="update"
			data-id="<?=$rows['id'];?>"
			>Update</button></td>
		</tr>
<?php	
	}
	}
	else {
		echo "<tr >
		<td colspan='5'>No Result found !</td>
		</tr>";
	}
	mysqli_close($conn);
?>