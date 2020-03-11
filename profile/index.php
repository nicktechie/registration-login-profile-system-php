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
    <?php if(isset($_SESSION['image_success'])): ?>
        <div class="alert alert-success all-msg text-center success-msg">
            <?php echo $_SESSION['image_success']; ?>
        </div>
    <?php endif; ?>
    <?php unset($_SESSION['image_success']); ?>

    <?php if(isset($_SESSION['address_success'])): ?>
        <div class="alert alert-success all-msg text-center success-msg">
            <?php echo $_SESSION['address_success']; ?>
        </div>
    <?php endif; ?>
    <?php unset($_SESSION['address_success']); ?>

    <?php if(isset($_SESSION['name_update'])): ?>
        <div class="alert alert-success all-msg text-center success-msg">
            <?php echo $_SESSION['name_update']; ?>
        </div>
    <?php endif; ?>
    <?php unset($_SESSION['name_update']); ?>

    <?php if(isset($_SESSION['password_success'])): ?>
        <div class="alert alert-success all-msg text-center success-msg">
            <?php echo $_SESSION['password_success']; ?>
        </div>
    <?php endif; ?>
    <?php unset($_SESSION['password_success']); ?>

    <?php if(isset($_SESSION['residence_success'])): ?>
        <div class="alert alert-success all-msg text-center success-msg">
            <?php echo $_SESSION['residence_success']; ?>
        </div>
    <?php endif; ?>
    <?php unset($_SESSION['residence_success']); ?>

     <?php if(isset($_SESSION['dob_success'])): ?>
        <div class="alert alert-success all-msg text-center success-msg">
            <?php echo $_SESSION['dob_success']; ?>
        </div>
    <?php endif; ?>
    <?php unset($_SESSION['dob_success']); ?>

    <?php if(isset($_SESSION['admnumber_success'])): ?>
        <div class="alert alert-success all-msg text-center success-msg">
            <?php echo $_SESSION['admnumber_success']; ?>
        </div>
    <?php endif; ?>
    <?php unset($_SESSION['admnumber_success']); ?>

    <?php if(isset($_SESSION['hostel_success'])): ?>
        <div class="alert alert-success all-msg text-center success-msg">
            <?php echo $_SESSION['hostel_success']; ?>
        </div>
    <?php endif; ?>
    <?php unset($_SESSION['hostel_success']); ?>

    <?php if(isset($_SESSION['occupation_success'])): ?>
        <div class="alert alert-success all-msg text-center success-msg">
            <?php echo $_SESSION['occupation_success']; ?>
        </div>
    <?php endif; ?>
    <?php unset($_SESSION['occupation_success']); ?>

    <?php if(isset($_SESSION['town_success'])): ?>
        <div class="alert alert-success all-msg text-center success-msg">
            <?php echo $_SESSION['town_success']; ?>
        </div>
    <?php endif; ?>
    <?php unset($_SESSION['town_success']); ?>

    <?php if(isset($_SESSION['username_success'])): ?>
        <div class="alert alert-success all-msg text-center success-msg">
            <?php echo $_SESSION['username_success']; ?>
        </div>
    <?php endif; ?>
    <?php unset($_SESSION['username_success']); ?>

    <?php if(isset($_SESSION['year_success'])): ?>
        <div class="alert alert-success all-msg text-center success-msg">
            <?php echo $_SESSION['year_success']; ?>
        </div>
    <?php endif; ?>
    <?php unset($_SESSION['year_success']); ?>
    <div class="container contents">
    	<div class="row">
    		<div class="col-md-3">
    			<div class="left-area">
    				<?php links(); ?>
    			</div><!-- left-area -->
    		</div><!-- col -->
    		<div class="col-md-9">
    			<div class="right-area">
                    <div class="row">
                        <div class="col-md-3">
                            <h5> User Information</h5>
                        </div><!-- col -->
                        <div class="col-md-9">
                           
                        </div>
                    </div><!-- row -->
    				<hr>
                    <?php user_info(); ?>
                    
                    

                 <?php include 'parts/admnumber.php'; ?>
                  <?php include 'parts/hostel.php'; ?>
                   <?php include 'parts/occupation.php'; ?>
                    <?php include 'parts/residence.php'; ?>
                    <?php include 'parts/town.php'; ?>
                    <?php include 'parts/username.php'; ?>
                 <?php include 'parts/year.php'; ?>
                  <?php include 'parts/dob.php'; ?>
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
    
    <script type="text/javascript">
    $(document).ready(function(){
        setTimeout(function(){
        $(".all-msg").fadeOut("slow");
        },2000);
    })
</script>
</body>
</html>