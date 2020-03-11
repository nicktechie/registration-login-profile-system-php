<!-- === Modal === -->
<?php 
$user_id = $_SESSION['user_id'];
$Query   = $db->prepare("SELECT town FROM users WHERE id = ?");
$Query->execute(array($user_id));
$r = $Query->fetch(PDO::FETCH_OBJ);
if(empty($r->town)){
  $town = "Add town ";
} else {
  $town = "Update town";
}
$town_db = $r->town;


 ?>

                    <div class="modal fade" id="town" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                               <div class="modal-header">
                                   <h5 class="modal-title"><?php echo $town; ?></h5>
                                   <button type="button" class="close" data-dismiss="modal" aria-label="close">
                                       <span aria-hidden="true">&times;</span>
                                   </button>
                               </div><!-- modal-header --> 
                               <div class="modal-body">
                                   <form action="">
                                       <div class="form-group">
                                         <input type="text" class="form-control profile-input" id="add_town" placeholder="Add town ..." value="<?php if(isset($town_db)): echo $town_db; endif;?>">
                                         <div class="town-error error"></div>
                                       </div><!-- form-group -->
                                       <div class="modal-footer">
                                           
                                           <button type="button" class="btn btn-success" onclick="add_town_url(this.form.add_town.value);">Save</button>
                                       </div><!-- modal-footer -->
                                   </form>
                               </div><!-- modal-body -->
                            </div><!-- modal-content -->
                            
                        </div><!-- modal-dialog -->
                        
                    </div><!-- modal -->