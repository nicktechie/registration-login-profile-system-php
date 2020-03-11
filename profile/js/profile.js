
//Add admission Number
function add_admnumber_url(admnumber_val){
	var admnumber_val = $.trim(admnumber_val);
	
	if(admnumber_val.length == ""){
		$(".admnumber-error").html('admnumber Field is required');
		$("#add_admnumber").css("border-color","red");
	} else { 
		$.ajax({
			type : 'POST',
			url  : 'ajax/profile.php?add_admnumber=true',
			data : {'admnumber_val': admnumber_val},
			dataType : 'JSON',
			success : function(feedback){
				if(feedback['error'] == 'success'){
					location = 'index.php';
				}
			}
		})

	}
}

//year of completion

function add_year_url(year_val){
	var year_val = $.trim(year_val);
	
	if(year_val.length == ""){
		$(".year-error").html('year Field is required');
		$("#add_year").css("border-color","red");
	} else { 
		$.ajax({
			type : 'POST',
			url  : 'ajax/profile.php?add_year=true',
			data : {'year_val': year_val},
			dataType : 'JSON',
			success : function(feedback){
				if(feedback['error'] == 'success'){
					location = 'index.php';
				}
			}
		})

	}
}

//hostel

function add_hostel_url(hostel_val){
	var hostel_val = $.trim(hostel_val);
	
	if(hostel_val.length == ""){
		$(".hostel-error").html('hostel Field is required');
		$("#add_hostel").css("border-color","red");
	} else { 
		$.ajax({
			type : 'POST',
			url  : 'ajax/profile.php?add_hostel=true',
			data : {'hostel_val': hostel_val},
			dataType : 'JSON',
			success : function(feedback){
				if(feedback['error'] == 'success'){
					location = 'index.php';
				}
			}
		})

	} 
}


//Occupation

function add_occupation_url(occupation_val){
	var occupation_val = $.trim(occupation_val);
	
	if(occupation_val.length == ""){
		$(".occupation-error").html('occupation Field is required');
		$("#add_occupation").css("border-color","red");
	} else { 
		$.ajax({
			type : 'POST',
			url  : 'ajax/profile.php?add_occupation=true',
			data : {'occupation_val': occupation_val},
			dataType : 'JSON',
			success : function(feedback){
				if(feedback['error'] == 'success'){
					location = 'index.php';
				}
			}
		})

	} 
}

//residence

function add_residence_url(residence_val){
	var residence_val = $.trim(residence_val);
	
	if(residence_val.length == ""){
		$(".residence-error").html('residence Field is required');
		$("#add_residence").css("border-color","red");
	} else {
		$.ajax({
			type : 'POST',
			url  : 'ajax/profile.php?add_residence=true',
			data : {'residence_val': residence_val},
			dataType : 'JSON',
			success : function(feedback){
				if(feedback['error'] == 'success'){
					location = 'index.php';
				}
			}
		})

	} 
}

//town

function add_town_url(town_val){
	var town_val = $.trim(town_val);
	
	if(town_val.length == ""){
		$(".town-error").html('town Field is required');
		$("#add_town").css("border-color","red");
	} else { 
		$.ajax({
			type : 'POST',
			url  : 'ajax/profile.php?add_town=true',
			data : {'town_val': town_val},
			dataType : 'JSON',
			success : function(feedback){
				if(feedback['error'] == 'success'){
					location = 'index.php';
				}
			}
		})

	}
}

//username

function add_username_url(username_val){
	var username_val = $.trim(username_val);
	
	if(username_val.length == ""){
		$(".username-error").html('username Field is required');
		$("#add_username").css("border-color","red");
	} else { 
		$.ajax({
			type : 'POST',
			url  : 'ajax/profile.php?add_username=true',
			data : {'username_val': username_val},
			dataType : 'JSON',
			success : function(feedback){
				if(feedback['error'] == 'success'){
					location = 'index.php';
				}
			}
		})

	} 
}


// === Add dob ===  
function add_dob_url(dob_val){
	var dob_val = $.trim(dob_val);
	
	if(dob_val.length == ""){
		$(".dob-error").html('dob Field is required');
		$("#add_dob").css("border-color","red");
	} else { 
		$.ajax({
			type : 'POST',
			url  : 'ajax/profile.php?add_dob=true',
			data : {'dob_val': dob_val},
			dataType : 'JSON',
			success : function(feedback){
				if(feedback['error'] == 'success'){
					location = 'index.php';
				}
			}
		})

	}
}


function change_password(current_pwd, new_pwd){
	var current_pwd = $.trim(current_pwd);
	var new_pwd     = $.trim(new_pwd);
	if(current_pwd.length == ""){
		$(".current-error").html("Current Password is required");
		$("#current").css("border-color", "red");
	} else {
		$(".current-error").html("");
		$("#current").css("border-color", "green");
	}

	if(new_pwd.length == ""){
		$(".new-error").html("New Password is required");
		$("#new_password").css("border-color", "red");
	} else {
		$(".new-error").html("");
		$("#new_password").css("border-color", "green");
	}

	if(current_pwd.length != "" && new_pwd.length != ""){
		$.ajax({
			type : 'POST',
			url  : 'ajax/profile.php?password=true',
			data : {'current_password': current_pwd, 'new_password': new_pwd},
			dataType : 'JSON',
			success : function(feedback){
				
              if(feedback['error'] == 'success'){
              	location = "index.php";
              } else if(feedback['error'] == "pattren"){
              	$(".new-error").html(feedback['msg']);
              	$("#new_password").css('border-color',"red");
              } else if(feedback['error'] == "current_password_wrong"){
              	$(".current-error").html(feedback['msg']);
              	$("#current").css("border-color","red");
              }
			}
		})

	}

}


function change_name(name){
	var name = $.trim(name);
	if(name.length == ""){
		$('.name-error').html('Name is required');
		$("#update_name").css('border-color',"red");
	} else {
		$('.name-error').html('');
		$("#update_name").css('border-color',"green");
	}
	if(name.length != ""){
		$.ajax({
			type : 'POST',
			url  : 'ajax/profile.php?change_name=true',
			data : {'change_name' :name},
			dataType : 'JSON',
			success : function(feedback){
				if(feedback['error'] == 'success'){
					location = "index.php";
				} else if(feedback['error'] == 'pattren'){
					$('.name-error').html(feedback['msg']);
		$("#update_name").css('border-color',"red");
				}
			}

		})
	}
}

function add_address(address) {
	var address = $.trim(address);
	if(address.length == ""){
		$(".address-error").html("Address is required");
		$("#autocomplete").css("border-color","red");
	} else {
		$.ajax({
			type : 'POST',
			url  : 'ajax/profile.php?address=true',
			data : {'add_address': address},
			dataType : 'JSON',
			success : function(feedback){
				if(feedback['error'] == "success"){
					location = "index.php";
				}
			}

		})
	}
}
