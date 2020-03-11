<!-- === Modal === -->
<?php 
$user_id = $_SESSION['user_id'];
$Query   = $db->prepare("SELECT hostel FROM users WHERE id = ?");
$Query->execute(array($user_id));
$r = $Query->fetch(PDO::FETCH_OBJ);
if(empty($r->hostel)){
  $hostel = "Add hostel ";
} else {
  $hostel = "Update hostel";
}
$hostel_db = $r->hostel;


 ?>

                    <div class="modal fade" id="hostel" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                               <div class="modal-header">
                                   <h5 class="modal-title"><?php echo $hostel; ?></h5>
                                   <button type="button" class="close" data-dismiss="modal" aria-label="close">
                                       <span aria-hidden="true">&times;</span>
                                   </button>
                               </div><!-- modal-header --> 
                               <div class="modal-body">
                                   <form action="">
                                       <div class="form-group">
                                         <input type="text" class="form-control profile-input" id="add_hostel" placeholder="Add hostel ..." value="<?php if(isset($hostel_db)): echo $hostel_db; endif;?>">
                                         <div class="hostel-error error"></div>
                                       </div><!-- form-group -->
                                       <div class="modal-footer">
                                           
                                           <button type="button" class="btn btn-success" onclick="add_hostel_url(this.form.add_hostel.value);">Save</button>
                                       </div><!-- modal-footer -->
                                   </form>
                               </div><!-- modal-body -->
                            </div><!-- modal-content -->
                            
                        </div><!-- modal-dialog -->
                        
                    </div><!-- modal -->