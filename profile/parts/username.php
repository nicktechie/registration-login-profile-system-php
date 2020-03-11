<!-- === Modal === -->
<?php 
$user_id = $_SESSION['user_id'];
$Query   = $db->prepare("SELECT username FROM users WHERE id = ?");
$Query->execute(array($user_id));
$r = $Query->fetch(PDO::FETCH_OBJ);
if(empty($r->town)){
  $username = "Add username ";
} else {
  $username = "Update username";
}
$username_db = $r->username;


 ?>

                    <div class="modal fade" id="username" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                               <div class="modal-header">
                                   <h5 class="modal-title"><?php echo $username; ?></h5>
                                   <button type="button" class="close" data-dismiss="modal" aria-label="close">
                                       <span aria-hidden="true">&times;</span>
                                   </button>
                               </div><!-- modal-header --> 
                               <div class="modal-body">
                                   <form action="">
                                       <div class="form-group">
                                         <input type="text" class="form-control profile-input" id="add_username" placeholder="Add username ..." value="<?php if(isset($username_db)): echo $username_db; endif;?>">
                                         <div class="username-error error"></div>
                                       </div><!-- form-group -->
                                       <div class="modal-footer">
                                          
                                           <button type="button" class="btn btn-success" onclick="add_username_url(this.form.add_username.value);">Save</button>
                                       </div><!-- modal-footer -->
                                   </form>
                               </div><!-- modal-body -->
                            </div><!-- modal-content -->
                            
                        </div><!-- modal-dialog -->
                        
                    </div><!-- modal -->