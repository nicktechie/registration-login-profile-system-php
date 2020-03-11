<!-- === Modal === -->
<?php 
$user_id = $_SESSION['user_id'];
$Query   = $db->prepare("SELECT residence FROM users WHERE id = ?");
$Query->execute(array($user_id));
$r = $Query->fetch(PDO::FETCH_OBJ);
if(empty($r->residence)){
  $residence = "Add residence ";
} else {
  $residence = "Update residence";
}
$residence_db = $r->residence;


 ?>

                    <div class="modal fade" id="residence" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                               <div class="modal-header">
                                   <h5 class="modal-title"><?php echo $residence; ?></h5>
                                   <button type="button" class="close" data-dismiss="modal" aria-label="close">
                                       <span aria-hidden="true">&times;</span>
                                   </button>
                               </div><!-- modal-header --> 
                               <div class="modal-body">
                                   <form action="">
                                       <div class="form-group">
                                         <input type="text" class="form-control profile-input" id="add_residence" placeholder="Add residence ..." value="<?php if(isset($residence_db)): echo $residence_db; endif;?>">
                                         <div class="residence-error error"></div>
                                       </div><!-- form-group -->
                                       <div class="modal-footer">
                                           
                                           <button type="button" class="btn btn-success" onclick="add_residence_url(this.form.add_residence.value);">Save</button>
                                       </div><!-- modal-footer -->
                                   </form>
                               </div><!-- modal-body -->
                            </div><!-- modal-content -->
                            
                        </div><!-- modal-dialog -->
                        
                    </div><!-- modal -->