<!-- Delete Modal -->
<?php include '../APP/connection.php'; ?>
<?php include '../APP/CRUDProcess.php'; ?>

<div class="modal fade" id="DeleteStudent<?php echo $row['StudentID']; ?>" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel<?php echo $row['StudentID']; ?>" aria-hidden="true">
	<div class="modal-dialog modal-delete-student" role="document">
		
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="deleteModalLabel<?php echo $row['StudentID']; ?>">Delete Record</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<p>Are you sure you want to delete this record?</p>
				<form action="../APP/CRUDProcess.php" method="POST">
					<input type="hidden" name="DelStudent"  value="<?php echo $row['StudentID']; ?>">
					
				
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
					<button type="submit" class="btn btn-danger">Delete</button>
			</div>
		</div>
		</form>

	</div>
</div>
<!-- Delete Multiple -->
<div class="modal fade" id="DeleteMultipleRecordsModal" tabindex="-1" aria-labelledby="DeleteMultipleRecordsModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="DeleteMultipleRecordsModalLabel">Delete Confirmation</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete the selected records?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-danger" name="delete_selected_confirm">Delete</button>
            </div>
        </div>
    </div>
</div>
