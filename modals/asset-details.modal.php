<!-- Edit-->
<div class="modal fade" id="edit_<?php echo $row['w_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">View / Edit Details</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                
                </button>
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
                            <label class="control-label" style="position:relative; top:7px;">Asset ID:</label>
                        </div>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="waid" value="<?php echo $row['w_name']; ?>" required>
                        </div>
                        
                        
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-4">
                            <label class="control-label" style="position:relative; top:7px;">Asset Name:</label>
                        </div>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="wasset" value="<?php echo $row['w_asset']; ?>" required>
                        </div>
                        
                        
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-4">
                            <label class="control-label" style="position:relative; top:7px;">Priority:</label>
                        </div>
                        <div class="col-sm-8" >
                        <div class="custom-select" style="width:100%;">
                        <select name="wprio" id="wprio" value="<?php echo $row['w_prio']; ?>">
                            <option value="High">High</option>
                            <option value="Medium">Medium</option>
                            <option value="Low">Low</option>
                            <option value="Last">Last</option>
                        </select>
                        </div>
                        </div>
                    </div>
                    
                    <div class="row form-group">
                  
                    <div class="col-sm-4">
                            <label class="control-label" style="position:relative; top:7px;">Status:</label>
                        </div>
                        <div class="col-sm-8" >
                        <div class="custom-select" style="width:100%;">
                    
                            <select name="wstatus" id="wstatus" value="<?php echo $row['w_status']; ?>">
                                <option value="Planning">Planning</option>
                                <option value="Progress">Progress</option>
                                <option value="Nothing">Nothing</option>
                                <option value="Dropped">Dropped</option>
                            </select>
                    
                        </div>
                    </div> 
                    </div>
                    <div class="row form-group">
                  
                    <div class="col-sm-4">
                            <label class="control-label" style="position:relative; top:7px;">Assigned:</label>
                        </div>
                        <div class="col-sm-8" >
                        <div class="custom-select" style="width:100%;">
                    
                        <select name="wassigned" id="wassigned" value="<?php echo $row['w_assgined']; ?>">
                            <option value="Charles">Charles</option>
                            <option value="Francis">Francis</option>
                         
                        </select>
                    
                        </div>
                    </div> 
                    </div>
                    <div class="row form-group">
                  
                  <div class="col-sm-4">
                          <label class="control-label" style="position:relative; top:7px;">Date Created:</label>
                      </div>
                      <div class="col-sm-8" >
                      <div class="custom-select" style="width:100%;">
                  
                      <input type="date" id="wdate" name="wdate" value="<?php echo $row['w_created']; ?>">
                        
                       
                      </select>
                  
                      </div>
                  </div> 
                  </div>
                  <div class="row form-group">
                  
                  <div class="col-sm-4">
                          <label class="control-label" style="position:relative; top:7px;">Due Date:</label>
                      </div>
                      <div class="col-sm-8" >
                      <div class="custom-select" style="width:100%;">
                  
                      <input type="date" id="wdue" name="wdue" value="<?php echo $row['w_due']; ?>">
                        
                       
                      </select>
                  
                      </div>
                        </div> 
                     </div>
                     <div class="row form-group">
                        <div class="col-sm-4">
                            <label class="control-label" style="position:relative; top:7px;">Cost:</label>
                        </div>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="wcost" value="<?php echo $row['w_cost']; ?> " required>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-4">
                            <label class="control-label" style="position:relative; top:7px;">Description:</label>
                        </div>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="wcost" value="<?php echo $row['w_desc']; ?> " required>
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

<!-- Delete -->
<div class="modal fade" id="delete_<?php echo $row['a_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                
            </div>
            <div class="modal-body">
                <form action="../actions/delete-asset.php" method="post">
                    <input type="hidden" class="form-control" name="aid" value="<?php echo $row['a_id']; ?> " readonly>
                    <input type="hidden" class="form-control" name="aname" value="<?php echo $row['a_name']; ?> " readonly>
                    <input type="hidden" class="form-control" name="anum" value="<?php echo $row['a_num']; ?> " readonly>
                    <input type="hidden" class="form-control" name="asnum" value="<?php echo $row['as_num']; ?> " readonly>
                    <input type="hidden" class="form-control" name="astatus" value="<?php echo $row['st_id']; ?> " readonly>
                    <input type="hidden" class="form-control" name="adate" value="<?php echo $row['a_date']; ?> " readonly>

                    <!-- End of Modal Body -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" name="submit" class="btn btn-primary">Delete Asset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
