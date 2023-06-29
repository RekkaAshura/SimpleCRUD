<?php
@session_start();
if (!isset($_SESSION["isLoggedIn"]) || !$_SESSION["isLoggedIn"]){
    header('location: index.php');
}
?>
<?php include "../App/connection.php";

include "../App/GetTableContent.php";


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>CRUD</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

    <div class="container mt-3">
      <div class="text-end mb-2">
        <a href="../APP/logout.php" class="btn btn-secondary">Logout</a>
    </div>
    <h2>Student Information</h2>

    <table class="table table-bordered">
        <thead>
            <button type="submit" class="btn btn-success" data-toggle="modal" data-target="#AddStudentModal">Add New Student </button>
            
            <tr>
                <th><a href="#" class="btn btn-danger" data-toggle="modal" data-target="#DeleteMultipleRecordsModal">Delete Checked </a></th> 
                <th>Student ID</th>
                <th>First Name</th>
                <th>Middle Name</th>
                <th>Last Name</th>
                <th>Course</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
          <tr>
            <?php
            while($row = mysqli_fetch_assoc($result))
            {
                ?>
                <td><input type="checkbox" name="selected" value="<?php echo $row['StudentID']; ?>"></td>
                <td><?php echo $row['StudentID']; ?></td>
                <td><?php echo $row['FName']; ?></td>
                <td><?php echo $row['MName']; ?></td>
                <td><?php echo $row['LName']; ?></td>
                <td><?php echo $row['Course']; ?></td>
                <td><?php echo $row['Email']; ?></td>
                <td>
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#EditStudent<?php echo $row['StudentID']; ?>">Edit </a>
                    <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#DeleteStudent<?php echo $row['StudentID']; ?>">Delete </a>
                    <a href="#" class="btn btn-secondary" data-toggle="modal" data-target="#ViewStudent<?php echo $row['StudentID']; ?>">View </a>
                </td>
            </tr>
            <?php include '../APP/DeleteModal.php'; ?>
            <?php include '../APP/EditStudents.php'; ?>
            <?php include '../APP/ViewStudents.php'; ?>

            <?php
        }

        ?>
        <?php include '../APP/AddModal.php'; ?>


    </tbody>
</table>
</div>

</body>
</html>
