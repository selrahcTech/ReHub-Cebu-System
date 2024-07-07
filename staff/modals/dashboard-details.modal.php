<!-- req -->
<div class="modal fade" id="request_<?php echo $row['w_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title text-center" id="exampleModalLabel" style="color: black; font-weight: bold;">Request the Service?</h3>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="../actions/req-servicereq.php" method="post">
                    <input type= hidden class="form-control" name="wid" value="<?php echo $row['w_id']; ?>" readonly>
                    <input type= hidden class="form-control" name="srorderid" value="<?php echo $row['w_orderid']; ?>" readonly>
                    <input type= hidden class="form-control" name="srcustomer" value="<?php echo $row['w_customer']; ?>" readonly>
                    <input type= hidden class="form-control" name="serid" value="<?php echo $row['ser_id']; ?>" readonly>
                    <input type= hidden class="form-control" name="pid" value="<?php echo $row['p_id']; ?>" readonly>
                    <input type= hidden class="form-control" name="stid" value="<?php echo $row['st_id']; ?>" readonly>
                    <input type= hidden class="form-control" name="sraddress" value="<?php echo $row['w_address']; ?>" readonly>
                    <input type= hidden class="form-control" name="srcreated" value="<?php echo $row['w_created']; ?>" readonly>
                    <input type= hidden class="form-control" name="srdue" value="<?php echo $row['w_due']; ?>" readonly>
                    <input type= hidden class="form-control" name="srcost" value="<?php echo $row['w_cost']; ?>" readonly>
                    
                    <?php
                       
                        include("../includes/connect.inc.php"); 
                
                        if (isset($_SESSION["username"])) {
                            $username = $_SESSION["username"];
                        } else {
                            $username = "Guest";
                        }

                        $sname = isset($row['s_name']) ? $row['s_name'] : "";

                        if (!empty($username)) {
                            $sname = $username;
                        }

                        $sql = "SELECT s_id FROM staff WHERE s_name = :sname";
                        $stmt = $conn->prepare($sql);
                        $stmt->bindParam(':sname', $sname);
                        $stmt->execute();
       
                        if ($stmt->rowCount() > 0) {
                           
                            $row = $stmt->fetch(PDO::FETCH_ASSOC);
                            $s_id = $row["s_id"];
                        } else {
                            
                            $s_id = "N/A"; 
                        }
                        ?>
                        <input type= hidden class="form-control" name="sid" value="<?php echo $s_id; ?>" readonly>

                    <!-- End of Modal Body -->
                    <div class="modal-footer">
                        <button type="submit" name="submit" class="btn btn-primary">Request</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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