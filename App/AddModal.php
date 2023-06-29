<?php 
include '../App/connection.php';
include '../App/CRUDProcess.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>


	<!-- Add Modal -->
	<div class="modal fade" id="AddStudentModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="myModalLabel">Add New Student</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<!-- Form inside the modal -->
					<form action="../App/CRUDProcess.php" method="POST">
						<div class="form-group">
							<label for="name">First Name</label>
							<input type="text" class="form-control" name="FirstName" placeholder="Enter your First Name">
						</div>
						<div class="form-group">
							<label for="email">Middle Name</label>
							<input type="text" class="form-control" name="MiddleName" placeholder="Enter your Middle Name">
						</div>
						<div class="form-group">
							<label for="message">Last Name</label>
							<input type="text" class="form-control" name="LastName" placeholder="Enter your Last Name">
						</div>
						<div class="form-group">
							<label for="message">Course</label>
							<input type="text" class="form-control" name="Course" placeholder="Enter your Course">
						</div>
						<div class="form-group">
							<label for="message">Email</label>
							<input type="email" class="form-control" name="Email" placeholder="Enter your Email">
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary" name="AddNewStudent">Submit</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>






	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
