
<!-- Complete -->
<div class="modal fade" id="complete_<?php echo $row['w_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel" style="color: black; font-weight: bold; text-align: center;">Service Completed?</h4>
            </div>
            <div class="modal-body">
            <form action="../actions/edit-order.php" method="post">
                    <div class="row form-group" style="display: none;">
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="wid" value="<?php echo $row['w_id']; ?>" readonly>
                        </div>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="worderid" value="<?php echo $row['w_orderid']; ?>" readonly>
                        </div>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="wcustomer" value="<?php echo $row['w_customer']; ?>" required>
                        </div>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="waddress" value="<?php echo $row['w_address']; ?>" required>
                        </div>
                        <div class="col-sm-8">
                            <input type="date" id="wdate" name="wdate" class="form-control" value="<?php echo $row['w_created']; ?>">
                        </div>
                        <div class="col-sm-8">
                            <input type="date" id="wdue" name="wdue" class="form-control" value="<?php echo $row['w_due']; ?>">
                        </div>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="wcost" value="<?php echo $row['w_cost']; ?>" required>
                        </div>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="wservice" value="<?php echo $row['ser_id']; ?>" required>
                        </div>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="wassigned" value="<?php echo $row['s_id']; ?>" required>
                        </div>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="wprio" value="<?php echo $row['p_id']; ?>" required>
                        </div>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="wcomment" value="<?php echo $row['w_comment']; ?>" >
                        </div>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="wcomplete" value="complete">
                        </div> 
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" name="submit" class="btn btn-primary">Confirm</button>
                    </div>
            </form>
            </div>
        </div>
    </div>
</div>

<!-- View-->
<div class="modal fade" id="view_<?php echo $row['w_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel" style="color: black; font-weight: bold; text-align: center;">View Details</h4>
            </div>
            <div class="modal-body">
            <form action="../actions/edit-order.php" method="post">
                
                    <div class="row form-group">
                        <div class="col-sm-4">
                            <label class="control-label" style="position:relative; top:7px;">Work Order ID:</label>
                        </div>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="wid" value="<?php echo $row['w_id']; ?> " readonly>
                        </div>
                    </div>
                    
                    <div class="row form-group">
                        <div class="col-sm-4">
                            <label class="control-label" style="position:relative; top:7px;">Order ID:</label>
                        </div>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="worderid" value="<?php echo $row['w_orderid']; ?>" readonly>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-sm-4">
                            <label class="control-label" style="position:relative; top:7px;">Customer Name:</label>
                        </div>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="wcustomer" value="<?php echo $row['w_customer']; ?>" readonly>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-sm-4">
                            <label class="control-label" style="position:relative; top:7px;">Address:</label>
                        </div>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="wcustomer" value="<?php echo $row['w_address']; ?>" readonly>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-sm-4">
                            <label class="control-label" style="position:relative; top:7px;">Priority:</label>
                        </div>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="wprio" value="<?php echo $row['p_desc']; ?>" readonly>
                        </div>                       
                    </div>

                    <div class="row form-group">
                        <div class="col-sm-4">
                            <label class="control-label" style="position:relative; top:7px;">Status:</label>
                        </div>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="wstatus" value="<?php echo $row['st_desc']; ?>" readonly>
                        </div>
                    </div>


                    <div class="row form-group">
                        <div class="col-sm-4">
                            <label class="control-label" style="position:relative; top:7px;">Assigned</label>
                        </div>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="wassigned" value="<?php echo $row['s_name']; ?>" readonly>
                        </div>
                    </div>

                     <div class="row form-group">
                        <div class="col-sm-4">
                            <label class="control-label" style="position:relative; top:7px;">Created:</label>
                        </div>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="wcreated" value="<?php echo $row['w_created']; ?> " readonly>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-sm-4">
                            <label class="control-label" style="position:relative; top:7px;">Due Date:</label>
                        </div>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="wdue" value="<?php echo $row['w_due']; ?> " readonly>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-sm-4">
                            <label class="control-label" style="position:relative; top:7px;">Cost:</label>
                        </div>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="wcost" value="<?php echo $row['w_cost']; ?> " readonly>
                        </div>
                    </div>

                <div class="row form-group">
                    <div class="col-sm-4">
                        <label class="control-label" style="position:relative; top:7px;">Remarks:</label>
                    </div>
                    <div class="col-sm-8">
                        <textarea class="form-control" name="wcomment" readonly><?php echo $row['w_comment']; ?></textarea>
                    </div>
                </div>

             
                </div>         
            <!-- End of Modal Body -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <!-- <a class="btn btn-primary" href="../includes/logout.inc.php">Logout</a> -->
                </form>
            </div>
        </div>
    </div>
</div>



<!-- delete -->
<div class="modal fade" id="delete_<?php echo $row['w_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel" style="color: black;">Delete Service</h4></center>
            </div>
            <form action="../actions/delete-order.php" method="post">
                <div class="modal-body">	
                    <p class="text-center" style="color: black;">Are you sure you want to delete?</p>
                    <h2 class="text-center" style="color: black;"><?php echo $row['w_customer']; ?></h2>
                    <input type="hidden" name="wid" value="<?php echo $row['w_id'];?>">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" name="submit" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Yes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $row['w_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel" style="color: black; font-weight: bold; text-align: center;">Edit Job Service Details</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
            <form action="../actions/edit-order.php" method="post">
                    <div class="row form-group" style="display: none;">
                        <div class="col-sm-4">
                            <label class="control-label" style="position:relative; top:7px;">Order ID:</label>
                        </div>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="wid" value="<?php echo $row['w_id']; ?>" readonly>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-sm-4">
                            <label class="control-label" style="position:relative; top:7px;">Order ID:</label>
                        </div>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="worderid" value="<?php echo $row['w_orderid']; ?>" readonly>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-sm-4">
                            <label class="control-label" style="position:relative; top:7px;">Customer's Name:</label>
                        </div>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="wcustomer" value="<?php echo $row['w_customer']; ?>" required>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-sm-4">
                            <label class="control-label" style="position:relative; top:7px;">Customer's Address:</label>
                        </div>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="waddress" value="<?php echo $row['w_address']; ?>" required>
                        </div>
                    </div>
                    
                    <div class="row form-group">
                        <div class="col-sm-4">
                            <label class="control-label" style="position:relative; top:7px;">Date Created:</label>
                        </div>
                        <div class="col-sm-8">
                            <input type="date" id="wdate" name="wdate" class="form-control" value="<?php echo $row['w_created']; ?>">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-sm-4">
                            <label class="control-label" style="position:relative; top:7px;">Due Date:</label>
                        </div>
                        <div class="col-sm-8">
                            <input type="date" id="wdue" name="wdue" class="form-control" value="<?php echo $row['w_due']; ?>">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-sm-4">
                            <label class="control-label" style="position:relative; top:7px;">Cost:</label>
                        </div>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="wcost" value="<?php echo $row['w_cost']; ?>" required>
                        </div>
                    </div>

                    <?php
                        include "../includes/connect.inc.php"; 
                        
                        $sql="SELECT * FROM services"; 

                        echo "<div class='form-group'>";
                        echo "<label>Services: </label>";
                        echo "<select name='wservice' value='' class='form-control'>Staff Name</option>"; 
                        
                        
                        foreach ($conn->query($sql) as $row){
                            echo "<option value=$row[ser_id]>$row[ser_desc]</option>"; 
                        }
                        echo "</select>";
                        echo"</div>";
                    ?>
                    
                    <?php
                        include "../includes/connect.inc.php"; 
                        
                        $sql="SELECT * FROM staff"; 

                        echo "<div class='form-group'>";
                        echo "<label>Staff: </label>";
                        echo "<select name='wassigned' value='' class='form-control'>Staff Name</option>"; 
                        
                        foreach ($conn->query($sql) as $row){
                            echo "<option value=$row[s_id]>$row[s_name]</option>"; 
                        }
                        echo "</select>";
                        echo"</div>";

                    ?>
                    
                        
                    <?php
                        include "../includes/connect.inc.php"; 
                        
                        $sql="SELECT * FROM priority"; 

                        echo "<div class='form-group'>";
                        echo "<label>Job Priority: </label>";
                        echo "<select name='wprio' value='' class='form-control'>Priority</option>"; 
                        
                        foreach ($conn->query($sql) as $row){
                            echo "<option value=$row[p_id]>$row[p_desc]</option>"; 
                        }
                        echo "</select>";
                        echo"</div>";

                    ?>
                    </div>  
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" name="submit" class="btn btn-primary">Save Changes</button>
                    </div>
            </form>
        </div>
    </div>
</div>


                    
