<?php include '../../connection/db.php'; ?>
<?php 




//dob

function add_dob_account(){
	GLOBAL $db;
	if(isset($_GET['add_dob']) && $_GET['add_dob'] == 'true'){
		$dob_val = $_POST['dob_val'];
		$user_id = $_SESSION['user_id'];
		$Query = $db->prepare("SELECT dob FROM users WHERE id = ?");
		$Query->execute(array($user_id));
		$r = $Query->fetch(PDO::FETCH_OBJ);
		$r->dob;
		if(empty($r->dob)){
			$Insert = $db->prepare("UPDATE users SET dob = ? WHERE id = ?");
			$Insert->execute(array($dob_val, $user_id));
			if($Insert){
				$_SESSION['dob_success'] = '<i class="fa fa-check-circle"></i> Your date of birth is successfully added';
				echo json_encode(array('error' => 'success'));
			} else {
				echo json_encode(array('error' => 'error'));
			}
		} else {
			$Insert = $db->prepare("UPDATE users SET dob = ? WHERE id = ?");
			$Insert->execute(array($dob_val, $user_id));
			if($Insert){
				$_SESSION['dob_success'] = '<i class="fa fa-check-circle"></i> Your date of birth account is successfully Updated';
				echo json_encode(array('error' => 'success'));
			} else {
				echo json_encode(array('error' => 'error'));
			}
		}
	}
}

add_dob_account();

//admnuber
function add_admnumber_account(){
	GLOBAL $db;
	if(isset($_GET['add_admnumber']) && $_GET['add_admnumber'] == 'true'){
		$admnumber_val = $_POST['admnumber_val'];
		$user_id = $_SESSION['user_id'];
		$Query = $db->prepare("SELECT admnumber FROM users WHERE id = ?");
		$Query->execute(array($user_id));
		$r = $Query->fetch(PDO::FETCH_OBJ);
		$r->admnumber;
		if(empty($r->admnumber)){
			$Insert = $db->prepare("UPDATE users SET admnumber = ? WHERE id = ?");
			$Insert->execute(array($admnumber_val, $user_id));
			if($Insert){
				$_SESSION['admnumber_success'] = '<i class="fa fa-check-circle"></i> Your admission number  is successfully added';
				echo json_encode(array('error' => 'success'));
			} else {
				echo json_encode(array('error' => 'error'));
			}
		} else {
			$Insert = $db->prepare("UPDATE users SET admnumber = ? WHERE id = ?");
			$Insert->execute(array($admnumber_val, $user_id));
			if($Insert){
				$_SESSION['admnumber_success'] = '<i class="fa fa-check-circle"></i> Your admission number is successfully Updated';
				echo json_encode(array('error' => 'success'));
			} else {
				echo json_encode(array('error' => 'error'));
			}
		}
	}
}

add_admnumber_account();

//year of completion

function add_year_account(){
	GLOBAL $db;
	if(isset($_GET['add_year']) && $_GET['add_year'] == 'true'){
		$year_val = $_POST['year_val'];
		$user_id = $_SESSION['user_id'];
		$Query = $db->prepare("SELECT year FROM users WHERE id = ?");
		$Query->execute(array($user_id));
		$r = $Query->fetch(PDO::FETCH_OBJ);
		$r->year;
		if(empty($r->year)){
			$Insert = $db->prepare("UPDATE users SET year = ? WHERE id = ?");
			$Insert->execute(array($year_val, $user_id));
			if($Insert){
				$_SESSION['year_success'] = '<i class="fa fa-check-circle"></i> Your year of completion is successfully added';
				echo json_encode(array('error' => 'success'));
			} else {
				echo json_encode(array('error' => 'error'));
			}
		} else {
			$Insert = $db->prepare("UPDATE users SET year = ? WHERE id = ?");
			$Insert->execute(array($year_val, $user_id));
			if($Insert){
				$_SESSION['year_success'] = '<i class="fa fa-check-circle"></i> Your year of completion is successfully Updated';
				echo json_encode(array('error' => 'success'));
			} else {
				echo json_encode(array('error' => 'error'));
			}
		}
	}
}

add_year_account();

//hostel
function add_hostel_account(){
	GLOBAL $db;
	if(isset($_GET['add_hostel']) && $_GET['add_hostel'] == 'true'){
		$hostel_val = $_POST['hostel_val'];
		$user_id = $_SESSION['user_id'];
		$Query = $db->prepare("SELECT hostel FROM users WHERE id = ?");
		$Query->execute(array($user_id));
		$r = $Query->fetch(PDO::FETCH_OBJ);
		$r->hostel;
		if(empty($r->hostel)){
			$Insert = $db->prepare("UPDATE users SET hostel = ? WHERE id = ?");
			$Insert->execute(array($hostel_val, $user_id));
			if($Insert){
				$_SESSION['hostel_success'] = '<i class="fa fa-check-circle"></i> Your hostel  is successfully added';
				echo json_encode(array('error' => 'success'));
			} else {
				echo json_encode(array('error' => 'error'));
			}
		} else {
			$Insert = $db->prepare("UPDATE users SET hostel = ? WHERE id = ?");
			$Insert->execute(array($hostel_val, $user_id));
			if($Insert){
				$_SESSION['hostel_success'] = '<i class="fa fa-check-circle"></i> Your hostel  is successfully Updated';
				echo json_encode(array('error' => 'success'));
			} else {
				echo json_encode(array('error' => 'error'));
			}
		}
	}
}

add_hostel_account();

//occupation
function add_occupation_account(){
	GLOBAL $db;
	if(isset($_GET['add_occupation']) && $_GET['add_occupation'] == 'true'){
		$occupation_val = $_POST['occupation_val'];
		$user_id = $_SESSION['user_id'];
		$Query = $db->prepare("SELECT occupation FROM users WHERE id = ?");
		$Query->execute(array($user_id));
		$r = $Query->fetch(PDO::FETCH_OBJ);
		$r->occupation;
		if(empty($r->occupation)){
			$Insert = $db->prepare("UPDATE users SET occupation = ? WHERE id = ?");
			$Insert->execute(array($occupation_val, $user_id));
			if($Insert){
				$_SESSION['occupation_success'] = '<i class="fa fa-check-circle"></i> Your occupation  is successfully added';
				echo json_encode(array('error' => 'success'));
			} else {
				echo json_encode(array('error' => 'error'));
			}
		} else {
			$Insert = $db->prepare("UPDATE users SET occupation = ? WHERE id = ?");
			$Insert->execute(array($occupation_val, $user_id));
			if($Insert){
				$_SESSION['occupation_success'] = '<i class="fa fa-check-circle"></i> Your occupation  is successfully Updated';
				echo json_encode(array('error' => 'success'));
			} else {
				echo json_encode(array('error' => 'error'));
			}
		}
	}
}

add_occupation_account();

//residence
function add_residence_account(){
	GLOBAL $db;
	if(isset($_GET['add_residence']) && $_GET['add_residence'] == 'true'){
		$residence_val = $_POST['residence_val'];
		$user_id = $_SESSION['user_id'];
		$Query = $db->prepare("SELECT residence FROM users WHERE id = ?");
		$Query->execute(array($user_id));
		$r = $Query->fetch(PDO::FETCH_OBJ);
		$r->residence;
		if(empty($r->residence)){
			$Insert = $db->prepare("UPDATE users SET residence = ? WHERE id = ?");
			$Insert->execute(array($residence_val, $user_id));
			if($Insert){
				$_SESSION['residence_success'] = '<i class="fa fa-check-circle"></i> Your residence  is successfully added';
				echo json_encode(array('error' => 'success'));
			} else {
				echo json_encode(array('error' => 'error'));
			}
		} else {
			$Insert = $db->prepare("UPDATE users SET residence = ? WHERE id = ?");
			$Insert->execute(array($residence_val, $user_id));
			if($Insert){
				$_SESSION['residence_success'] = '<i class="fa fa-check-circle"></i> Your residence  is successfully Updated';
				echo json_encode(array('error' => 'success'));
			} else {
				echo json_encode(array('error' => 'error'));
			}
		}
	}
}

add_residence_account();

//town

function add_town_account(){
	GLOBAL $db;
	if(isset($_GET['add_town']) && $_GET['add_town'] == 'true'){
		$town_val = $_POST['town_val'];
		$user_id = $_SESSION['user_id'];
		$Query = $db->prepare("SELECT town FROM users WHERE id = ?");
		$Query->execute(array($user_id));
		$r = $Query->fetch(PDO::FETCH_OBJ);
		$r->town;
		if(empty($r->town)){
			$Insert = $db->prepare("UPDATE users SET town = ? WHERE id = ?");
			$Insert->execute(array($town_val, $user_id));
			if($Insert){
				$_SESSION['town_success'] = '<i class="fa fa-check-circle"></i> Your town  is successfully added';
				echo json_encode(array('error' => 'success'));
			} else {
				echo json_encode(array('error' => 'error'));
			}
		} else {
			$Insert = $db->prepare("UPDATE users SET town = ? WHERE id = ?");
			$Insert->execute(array($town_val, $user_id));
			if($Insert){
				$_SESSION['town_success'] = '<i class="fa fa-check-circle"></i> Your town  is successfully Updated';
				echo json_encode(array('error' => 'success'));
			} else {
				echo json_encode(array('error' => 'error'));
			}
		}
	}
}

add_town_account();

//username

function add_username_account(){
	GLOBAL $db;
	if(isset($_GET['add_username']) && $_GET['add_username'] == 'true'){
		$username_val = $_POST['username_val'];
		$user_id = $_SESSION['user_id'];
		$Query = $db->prepare("SELECT username FROM users WHERE id = ?");
		$Query->execute(array($user_id));
		$r = $Query->fetch(PDO::FETCH_OBJ);
		$r->username;
		if(empty($r->username)){
			$Insert = $db->prepare("UPDATE users SET username = ? WHERE id = ?");
			$Insert->execute(array($username_val, $user_id));
			if($Insert){
				$_SESSION['username_success'] = '<i class="fa fa-check-circle"></i> Your username  is successfully added';
				echo json_encode(array('error' => 'success'));
			} else {
				echo json_encode(array('error' => 'error'));
			}
		} else {
			$Insert = $db->prepare("UPDATE users SET username = ? WHERE id = ?");
			$Insert->execute(array($username_val, $user_id));
			if($Insert){
				$_SESSION['username_success'] = '<i class="fa fa-check-circle"></i> Your username  is successfully Updated';
				echo json_encode(array('error' => 'success'));
			} else {
				echo json_encode(array('error' => 'error'));
			}
		}
	}
}

add_username_account();

//change password
function change_password(){
	GLOBAL $db;
	if(isset($_GET['password']) && $_GET['password'] == 'true'){
		$current_password = $_POST['current_password'];
		$new_password     = $_POST['new_password'];
		$user_id          = $_SESSION['user_id'];
		$Query = $db->prepare("SELECT password FROM users WHERE id = ?");
		$Query->execute(array($user_id));
		$r = $Query->fetch(PDO::FETCH_OBJ);
		$db_password = $r->password;
		if(password_verify($current_password, $db_password)){
         $password_reg = "/^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])[a-zA-Z0-9]{8,}$/";
         if(preg_match($password_reg, $new_password )){
         	$new_pwd = password_hash($new_password, PASSWORD_DEFAULT);
         $Update_Password = $db->prepare("UPDATE users SET password = ? WHERE id = ?");
         $Update_Password->execute(array($new_pwd, $user_id));
         if($Update_Password){
         	$_SESSION['password_success'] = '<i class="fa fa-check-circle"></i> Your Password is succesfully updated!';
         	echo json_encode(array('error' => 'success'));

         }
         } else {
         	echo json_encode(array('error' => 'pattren', 'msg' => '8 characters or longer. Combine upper and lowercase letters and numbers'));
         }
		} else {
			echo json_encode(array('error' => 'current_password_wrong', 'msg' => 'Current Paassword is wrong'));
		}
	}

}
change_password();

function update_name(){
	GLOBAL $db;
	if(isset($_GET['change_name']) && $_GET['change_name'] == 'true'){
		$name = $_POST['change_name'];
		$name_reg = "/^[a-zA-Z ]+$/";
		$user_id = $_SESSION['user_id'];
		if(preg_match($name_reg, $name)){
       $Query = $db->prepare("UPDATE users SET name = ? WHERE id = ?");
       $Query->execute(array($name, $user_id));
       if($Query){
       	$_SESSION['name_update'] = "<i class='fa fa-check-circle'></i> Your name is successfully updated";
       	echo json_encode(array('error' => 'success'));
       }
		} else {

			echo json_encode(array('error' => 'pattren', 'msg' => 'Name will be only character'));
		}
	}
}
update_name();

function add_address(){
	GLOBAL $db;
	if(isset($_GET['address']) && $_GET['address'] == 'true'){
		$address = $_POST['add_address'];
		$user_id = $_SESSION['user_id'];
		$Fetch_Query = $db->prepare("SELECT address FROM users WHERE id = ?");
		$Fetch_Query->execute(array($user_id));
		$Fetch_r = $Fetch_Query->fetch(PDO::FETCH_OBJ);
		$address_db = $Fetch_r->address;
		if(empty($address_db)){
        $Query = $db->prepare("UPDATE users SET address = ? WHERE id = ?");
        $Query->execute(array($address, $user_id));
        if($Query){
        	$_SESSION['address_success'] = "<i class='fa fa-check-circle'></i> Your address is successfully Added";
        	echo json_encode(array("error" => 'success'));
        }
		} else {
         $Query = $db->prepare("UPDATE users SET address = ? WHERE id = ?");
        $Query->execute(array($address, $user_id));
        if($Query){
        	$_SESSION['address_success'] = "<i class='fa fa-check-circle'></i> Your address is successfully Updated";
        	echo json_encode(array("error" => 'success'));
        }
		}
	}
}
add_address();





 ?>