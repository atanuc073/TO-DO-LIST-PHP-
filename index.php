<!DOCTYPE html>
<?php ob_start();?>
<?php 
include 'db.php';

$query=" SELECT * FROM task ";

$fetch_task=mysqli_query($connection,$query);

?>
<html>
	<head>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
		<script type="text/javascript"></script>
		<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjsMfHjOMaLkfuWVxZxUPnCJA712mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeKldGmJRAkycuHAHRg32OmUcww&on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<meta charset="utf-8">
 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		<title></title>
	</head>
	<body>
		<div class="container">
			<div class="row" style="margin-top : 70px">
				<center><h1>TO DO LIST</h1></center>
				<div class="col-md-10 col-md-offset-1">
					<table class="table table-dark">
						<button type="button" data-target="#myModal" data-toggle="modal" class="btn btn-success">Add Task</button>
						<button type="button" class="btn btn-default pull-right">Print</button>
						<hr><br>
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Task</h4>
      </div>
      <div class="modal-body">
        <form method="post" action="add.php">
        	<div class="form-group">
        		<label>Task Name</label>
        		<input type="text" required="" name="task" class="form-control">
        		
        	</div>
        	<input type="submit" name="send" value="Add Task" class="btn btn-success">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
						<thead>
							<tr>
								<th scope="col">No.</th>
								<th scope="col">Task</th>
							</tr>
						</thead>
						<tbody>
							<tr>
<?php 

while($row = mysqli_fetch_assoc($fetch_task)){

	$id=$row['id'];
	$name=$row['name'];
	?>						
								<tr>
								<th scope="row"><?php echo $id; ?></th>
								<td class="col-md-10"><?php echo $name; ?></td>
								<td><a href="" class="btn btn-success">Edit</a></td>
								<td><a href="" class="btn btn-danger">Delete</a></td>
							</tr>
								
							<?php

							}  
							// end of while loop

							?>

							
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</body>
</html>