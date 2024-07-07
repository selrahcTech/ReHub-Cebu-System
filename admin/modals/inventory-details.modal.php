<!-- Delete Inventory Modal -->
<div class="modal fade" id="delete_<?php echo $row['inv_id'];?>" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel_<?php echo $row['inv_id'];?>" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel_<?php echo $row['inv_id'];?>">Confirm Delete</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="text-align: center;">
                <p style="font-weight: bold; font-size: 20px;">Are you sure you want to delete this Tool?</p>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger delete-btn" data-id="<?php echo $row['inv_id'];?>">Delete</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('.delete-btn').click(function(e) {
            e.preventDefault();
            var invId = $(this).data('id');
            $.ajax({
                url: '../actions/delete-inventory.php',
                type: 'POST',
                data: { invId: invId },
                success: function(response) {
                    // Handle the response if needed
                    console.log(response);
                },
                error: function(xhr, status, error) {
                    // Handle the error if needed
                    console.log(error);
                }
            });
        });
    });
</script>
<!-- Edit-->
<div class="modal fade" id="edit_<?php echo $row['inv_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h3 class="modal-title text-center" id="exampleModalLabel" style="color: black; font-weight: bold;">Edit Tool</h3>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                
                </button>
            </div>
            <div class="modal-body">
            <form action="../actions/edit-inventory.php" method="post">
            <div class="row form-group" style="display: none;">
                    <div class="col-sm-4">
                        <label class="control-label" style="position:relative; top:7px;">Tool ID:</label>
                    </div>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="invid" value="<?php echo $row['inv_id']; ?> " readonly>
                    </div>
                </div>
                    <div class="row form-group">
                        <div class="col-sm-4">
                            <label class="control-label" style="position:relative; top:7px;">Tool Name:</label>
                        </div>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="invname" value="<?php echo $row['inv_name']; ?>" required>
                        </div>
                        
                    </div>
                </div>
            
            <!-- End of Modal Body -->
            <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" name="submit" class="btn btn-primary">Save Changes</button>
                <!-- <a class="btn btn-primary" href="../includes/logout.inc.php">Logout</a> -->
                </form>
            </div>
        </div>
    </div>
</div>