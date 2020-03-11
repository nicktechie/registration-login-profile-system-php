<!-- === Modal === -->
<?php 
$user_id = $_SESSION['user_id'];
$Query   = $db->prepare("SELECT occupation FROM users WHERE id = ?");
$Query->execute(array($user_id));
$r = $Query->fetch(PDO::FETCH_OBJ);
if(empty($r->occupation)){
  $occupation = "Add occupation ";
} else {
  $occupation = "Update occupation";
}
$occupation_db = $r->occupation;


 ?>

                    <div class="modal fade" id="occupation" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                               <div class="modal-header">
                                   <h5 class="modal-title"><?php echo $occupation; ?></h5>
                                   <button type="button" class="close" data-dismiss="modal" aria-label="close">
                                       <span aria-hidden="true">&times;</span>
                                   </button>
                               </div><!-- modal-header --> 
                               <div class="modal-body">
                                   <form action="">
                                       <div class="form-group">
                                         <input type="text" class="form-control profile-input" id="add_occupation" placeholder="Add occupation ..." value="<?php if(isset($occupation_db)): echo $occupation_db; endif;?>">
                                         <div class="occupation-error error"></div>
                                       </div><!-- form-group -->
                                       <div class="modal-footer">
                                          
                                           <button type="button" class="btn btn-success" onclick="add_occupation_url(this.form.add_occupation.value);">Save</button>
                                       </div><!-- modal-footer -->
                                   </form>
                               </div><!-- modal-body -->
                            </div><!-- modal-content -->
                            
                        </div><!-- modal-dialog -->
                        
                    </div><!-- modal -->