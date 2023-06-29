<!-- View Modal -->
<?php include '../APP/connection.php'; ?>
<?php include '../APP/CRUDProcess.php'; ?>

<div class="modal fade" id="ViewStudent<?php echo $row['StudentID']; ?>" tabindex="-1" role="dialog" aria-labelledby="viewModalLabel<?php echo $row['StudentID']; ?>" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="viewModalLabel<?php echo $row['StudentID']; ?>">Edit Record</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Edit form -->
        <form action="../APP/CRUDProcess.php" method="POST">
          <div class="form-group">
            <label for="StudentID">Student ID</label>
            <input type="number" class="form-control" name="StudentID" value="<?php echo $row['StudentID']; ?>"readonly>
          </div>
          <div class="form-group">
            <label for="FName">First Name</label>
            <input type="text" class="form-control" name="FirstName" value="<?php echo $row['FName']; ?>"readonly>
          </div>
          <div class="form-group">
            <label for="MName">Middle Name</label>
            <input type="text" class="form-control" name="MiddleName" value="<?php echo $row['MName']; ?>"readonly>
          </div>
           <div class="form-group">
            <label for="LName">Last Name</label>
            <input type="text" class="form-control" name="LastName" value="<?php echo $row['LName']; ?>"readonly>
          </div>
           <div class="form-group">
            <label for="Course">Course</label>
            <input type="text" class="form-control" name="Course" value="<?php echo $row['Course']; ?>"readonly>
          </div>
           <div class="form-group">
            <label for="Email">Email</label>
            <input type="Email" class="form-control" name="Email" value="<?php echo $row['Email']; ?>"readonly>
          </div>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          

        </form>
      </div>
    </div>
  </div>
</div>