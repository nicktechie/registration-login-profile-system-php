<!-- === Modal === -->
<?php 
$user_id = $_SESSION['user_id'];
$Query   = $db->prepare("SELECT admnumber FROM users WHERE id = ?");
$Query->execute(array($user_id));
$r = $Query->fetch(PDO::FETCH_OBJ);
if(empty($r->admnumber)){
  $admnumber = "Add admnumber ";
} else {
  $admnumber = "Update admnumber";
}
$admnumber_db = $r->admnumber;


 ?>

                    <div class="modal fade" id="admnumber" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                               <div class="modal-header">
                                   <h5 class="modal-title"><?php echo $admnumber; ?></h5>
                                   <button type="button" class="close" data-dismiss="modal" aria-label="close">
                                       <span aria-hidden="true">&times;</span>
                                   </button>
                               </div><!-- modal-header --> 
                               <div class="modal-body">
                                   <form action="">
                                       <div class="form-group">
                                         <input type="text" class="form-control profile-input" id="add_admnumber" placeholder="Add admission number ..." value="<?php if(isset($admnumber_db)): echo $admnumber_db; endif;?>">
                                         <div class="admnumber-error error"></div>
                                       </div><!-- form-group -->
                                       <div class="modal-footer">
                                           
                                           <button type="button" class="btn btn-success" onclick="add_admnumber_url(this.form.add_admnumber.value);">Save</button>
                                       </div><!-- modal-footer -->
                                   </form>
                               </div><!-- modal-body -->
                            </div><!-- modal-content -->
                            
                        </div><!-- modal-dialog -->
                        
                    </div><!-- modal -->