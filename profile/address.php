<?php include 'functions/func.php'; ?>
<?php if(!isset($_SESSION['user_id'])): ?>
	<?php $_SESSION['unutherrized'] = "Please Enter Email & Password"; ?>
	<?php header("location:../index.php"); ?>
	<?php endif; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Profile</title>
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/css/style.css">
	<link rel="stylesheet" href="../assets/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="../assets/css/profile.css">
</head>
<body>
	<?php include '../parts/nav.php'; ?>
    <div class="container contents">
    	<div class="row">
    		<div class="col-md-3">
    			<div class="left-area">
    				<?php links(); ?>
    			</div><!-- left-area -->
    		</div><!-- col -->
<?php 
$user_id = $_SESSION['user_id'];
$Query   = $db->prepare("SELECT address FROM users WHERE id = ?");
$Query->execute(array($user_id));
$r = $Query->fetch(PDO::FETCH_OBJ);
if(empty($r->address)){
  $address = "Add Address";
} else {
  $address = "Update Address";
}
$address_db = $r->address;


 ?>
            	<div class="col-md-9">
    			<div class="right-area">
    				<h4><?php echo $address; ?></h4><hr>
                    <div class="form-group">
                        
                    </div>
                    <form >
                        <div class="form-group">
                           <input id="autocomplete" placeholder="Enter your address"
             type="text" class="form-control profile-input" value="<?php if(isset($address_db)): echo $address_db; endif;?>"></input>
             <div class="address-error error"></div>
                        </div><!-- form-group -->
                        <div class="form-group">
                            <button type="button" name="picture" class="btn btn-success" onclick="add_address(this.form.autocomplete.value);">Save</button>
                        </div><!-- form-group -->
                    </form>
                    <?php include 'parts/admnumber.php'; ?>
                    <?php include 'parts/dob.php'; ?>
                     <?php include 'parts/hostel.php'; ?>
                      <?php include 'parts/occupation.php'; ?>
                      <?php include 'parts/residence.php'; ?>
                      <?php include 'parts/year.php'; ?>
                      <?php include 'parts/town.php'; ?>
                 <?php include 'parts/name.php'; ?>
                 <?php include 'parts/change_password.php'; ?>
    			</div><!-- right-area -->
    		</div><!-- col -->
    	</div><!-- row -->
    </div><!-- container -->

	<script type="text/javascript" src="../assets/js/jquery.min.js"></script>
   <script src="../assets/js/popper.min.js"></script>
	<script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/profile.js"></script>
    <script>
     
</body>
</html>