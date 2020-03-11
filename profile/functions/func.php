    <?php include '../connection/db.php'; ?>
<?php 
function links(){
	GLOBAL $db;
	$user_id = $_SESSION['user_id'];
	$Query = $db->prepare("SELECT * FROM users WHERE id = ?");
	$Query->execute(array($user_id));
	$r = $Query->fetch(PDO::FETCH_OBJ);

	if(empty($r->image)){
		$photo = "<img src='img/no_img.png' class='user_img'>";
		$photo_link = "<a href='add_photo.php'>Update Photo</a>";
	}else{
		$photo = "<img src='img/$r->image' class='user_img'>";
		$photo_link = "<a href='add_photo.php'>Update Photo </a>";
	}

	if(empty($r->admnumber)){
        $admnumber = "<a href='#' data-target='#admnumber' data-toggle='modal'>Add Admnumber No. </a>";
	}else{
		$admnumber = "<a href='#' data-target='#admnumber' data-toggle='modal'>Update Admnumber No. </a>";
	}

	if(empty($r->year)){
        $year = "<a href='#' data-target='#year' data-toggle='modal'>Add Year of Completion </a>";
	}else{
		$year = "<a href='#' data-target='#year' data-toggle='modal'>Update Year of Completion </a>";
	}
	
	if(empty($r->address)){
		$address =  "<a href='address.php'>Add Address </a>";
	} else {
		$address =  "<a href='address.php'>Update Address </a>";
	}
	if(empty($r->hostel)){
		$hostel = "<a href='#' data-target='#hostel' data-toggle='modal'>Add Hostel </a>";
	} else {
		$hostel = "<a href='#' data-target='#hostel' data-toggle='modal'>Update Hostel </a>";
	}
	if(empty($r->occupation)){
		$occupation = "<a href='#' data-target='#occupation' data-toggle='modal'>Add Occupation </a>";
	} else {
		$occupation = "<a href='#' data-target='#occupation' data-toggle='modal'>Update Occupation </a>";
	}
	if(empty($r->residence)){
		$residence = "<a href='#' data-target='#residence' data-toggle='modal'>Add Residence </a>";
	} else {
		$residence = "<a href='#' data-target='#residence' data-toggle='modal'>Update Residence </a>";
	}
	if(empty($r->town)){
		$town = "<a href='#' data-target='#town' data-toggle='modal'>Add Town </a>";
	} else {
		$town = "<a href='#' data-target='#town' data-toggle='modal'>Update Town </a>";
	}
	if(empty($r->username)){
		$username = "<a href='#' data-target='#username' data-toggle='modal'>Add Username </a>";
	} else {
		$username = "<a href='#' data-target='#username' data-toggle='modal'>Update Username </a>";
	}
	if(empty($r->dob)){
		$dob = "<a href='#' data-target='#dob' data-toggle='modal'>Add DoB </a>";
	} else {
		$dob = "<a href='#' data-target='#dob' data-toggle='modal'>Update DoB </a>";
	}

	echo "<ul class='list-group'>
	        $photo
	      <li class='list-group-item first-li'>$photo_link</li>
		  <li class='list-group-item'>$admnumber</li>
		  <li class='list-group-item'>$year</li>
		  <li class='list-group-item'>$address</li>
		 <li class='list-group-item'>$hostel</li>
		 <li class='list-group-item'>$occupation</li>
		 <li class='list-group-item'>$residence</li>
		 <li class='list-group-item'>$town</li>
		 <li class='list-group-item'>$username</li>
		 <li class='list-group-item'>$dob</li>
         <li class='list-group-item'><a href='#' data-target='#update_password' data-toggle='modal'>Update Password </a></li>
         <li class='list-group-item'><a href='#' data-target='#update_name' data-toggle='modal'>Update Name </a></li>
	</ul>";
}

function update_picture(){
   GLOBAL $db;
   $user_id = $_SESSION['user_id'];
   if(isset($_POST['picture'])){
   	$img_name = $_FILES['file']['name'];
   	$tmp_name = $_FILES['file']['tmp_name'];
   	$store    = "img/";
   	$extensions = array('png', 'PNG', 'jpg', 'jpeg');
   	$split = explode(".", $img_name);
   	$img_exten = $split[1];
   	if(in_array($img_exten, $extensions)){
   		move_uploaded_file($tmp_name, "$store/$img_name");
   		$Query = $db->prepare("UPDATE users SET image = ? WHERE id = ?");
   		$Query->execute(array($img_name, $user_id));
   		if($Query){
   			$_SESSION['image_success'] = "<i class='fa fa-check-circle'></i> Your image is successfully updated!";
   			header("location:index.php");
   		}else{
   			echo "sorry query not work";
   		}

   	}else{
   		echo "<div class='text-danger'>Invalid Image Extension!</div>";
   	}

   }
}

function user_info(){
	GLOBAL $db;
	$user_id = $_SESSION['user_id'];
	$Query = $db->prepare("SELECT * FROM users WHERE id = ?");
	$Query->execute(array($user_id));
	$r = $Query->fetch(PDO::FETCH_OBJ);
	$_SESSION['online_user'] = $r->name;
	$name = ucwords($r->name);
	$admission = $r->admnumber;
	$year = $r->year;
	$address = $r->address;
	$hostel = $r->hostel;
	$occupation = $r->occupation;
	$residence = $r->residence;
	$town = $r->town;
	$username = $r->username;
	$dob = $r->dob;



	echo "<div class='row user-info'>
          <div class='col-md-3'>
           <span>Name</span>
          </div>
          <div class='col-md-9'>$name</div>

	</div>
    <div class='row user-info'>
          <div class='col-md-3'>
           <span>Admission Number</span>
          </div>
          <div class='col-md-9'>$admission</div>

	</div>

	 <div class='row user-info'>
          <div class='col-md-3'>
           <span>Year of completion</span>
          </div>
          <div class='col-md-9'>$year</div>

	</div>

	<div class='row user-info'>
          <div class='col-md-3'>
           <span>Address</span>
          </div>
          <div class='col-md-9'>$address</div>

	</div>

	<div class='row user-info'>
          <div class='col-md-3'>
           <span>Hostel</span>
          </div>
          <div class='col-md-9'>$hostel</div>

	</div>

	<div class='row user-info'>
          <div class='col-md-3'>
           <span>Occupation</span>
          </div>
          <div class='col-md-9'>$occupation</div>

	</div>
	<div class='row user-info'>
          <div class='col-md-3'>
           <span>Residence</span>
          </div>
          <div class='col-md-9'>$residence</div>

	</div>
	<div class='row user-info'>
          <div class='col-md-3'>
           <span>Town</span>
          </div>
          <div class='col-md-9'>$town</div>

	</div>
	<div class='row user-info'>
          <div class='col-md-3'>
           <span>Username</span>
          </div>
          <div class='col-md-9'>$username</div>

	</div>
	<div class='row user-info'>
          <div class='col-md-3'>
           <span>Date of Birth</span>
          </div>
          <div class='col-md-9'>$dob</div>

	</div>



	";
}


 ?>