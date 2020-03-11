<!-- === Modal === -->
<?php 
$user_id = $_SESSION['user_id'];
$Query   = $db->prepare("SELECT year FROM users WHERE id = ?");
$Query->execute(array($user_id));
$r = $Query->fetch(PDO::FETCH_OBJ);
if(empty($r->year)){
  $year = "Add year ";
} else {
  $year = "Update year";
}
$year_db = $r->year;


 ?>

                    <div class="modal fade" id="year" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                               <div class="modal-header">
                                   <h5 class="modal-title"><?php echo $year; ?></h5>
                                   <button type="button" class="close" data-dismiss="modal" aria-label="close">
                                       <span aria-hidden="true">&times;</span>
                                   </button>
                               </div><!-- modal-header --> 
                               <div class="modal-body">
                                   <form action="">
                                       <div class="form-group">
                                         <input type="text" class="form-control profile-input" id="add_year" placeholder="Add year of Completion ..." value="<?php if(isset($hostel_db)): echo $year_db; endif;?>">
                                         <div class="year-error error"></div>
                                       </div><!-- form-group -->
                                       <div class="modal-footer">
                                           
                                           <button type="button" class="btn btn-success" onclick="add_year_url(this.form.add_year.value);">Save</button>
                                       </div><!-- modal-footer -->
                                   </form>
                               </div><!-- modal-body -->
                            </div><!-- modal-content -->
                            
                        </div><!-- modal-dialog -->
                        
                    </div><!-- modal -->