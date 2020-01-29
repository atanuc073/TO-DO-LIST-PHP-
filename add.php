<?php ob_start();?>

<?php

include 'db.php';

if(isset($_POST['send'])){

	$task_name=$_POST['task'];


	$query="INSERT INTO task(name) VALUES ('$task_name') ";

	$add_task=mysqli_query($connection,$query);

	if($add_task){

		echo "The task is added successfully";
	}
	else{
		die("QUERY FAILED".mysqli_error($connection));
	}

}
?>
