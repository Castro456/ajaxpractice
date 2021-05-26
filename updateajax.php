<?php
	$conn =mysqli_connect('localhost','root','giveaccess','mydata');

	if(isset($_POST['id'])){
		$id=$_POST['id'];
		$task=$_POST['task'];
		$result = mysqli_query($conn, "UPDATE `task_table` 
		SET
		task='$task' WHERE id=$id" );
		if($result)
		{
			return "Data Updated";
		}
	}
	else{
		echo "Not Connceted";
	}

?>
