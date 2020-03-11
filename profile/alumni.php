 <?php include 'db.php'; ?>



<!DOCTYPE html>
<html>
<head>
	<title>Alumni Page</title>
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/css/style.css">
	<link rel="stylesheet" href="../assets/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="../assets/css/profile.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/datatable.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/jquery.dataTables.min.css">
	<style type="text/css">
		.bg {
			width: 150px;
			height: 150px;
		}
		#img {
			width: 70px;
			height: 70px;
			margin:0 auto;
			-webkit-border-radius: 50%;
			-moz-border-radius: 50%;
			-ms-border-radius: 50%;
			-o-border-radius: 50%;
			border-radius: 50%;
			border:3px inset rgba(0,0,0,0.4);
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-expand-sm navbar-light bg-light custom-nav">
	<div class="container">
		<a href="#" class="navbar-brand">Maseno School Alumni Page</a>
		<button type="button" class="navbar-toggler" data-target="#mynav" data-toggle="collapse">
			<span class="navbar-toggler-icon"></span>

		</button><!-- button -->
		<div class="collapse navbar-collapse" id="mynav">

			 <ul class="navbar-nav ml-auto">
			 	<li class="nav-item">

			 		<a href="../index.php" class="nav-link btn-success logout-btn">Home</a>

			 	</li>


			 </ul>
		</div><!-- collapse -->
	</div><!-- container -->
</nav><!-- nav close -->

	<table  id="table1"   class="table table-bordered table-hover" >
		<thead  class="thead-dark">
			<tr>
				<th>Profile</th>
				<th> Name</th>
				<th>Year of Completion</th>
				<th> Admission </th>
				<th> Occupation </th>
				<th> Residence </th>

			</tr>
		</thead>
		<tbody>
			<?php

				$result = $db->prepare("SELECT * FROM users ORDER BY id ");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){
			?>
			<tr class="record">
				<td><?php echo "<img class='img-fluid' id='img'  src='img/".$row['image']."'>"; ?></td>
				<td><?php echo $row['name']; ?></td>
				<td><?php echo $row['year']; ?></td>
				<td><?php echo $row['admnumber']; ?></td>
				<td><?php echo $row['occupation']; ?></td>
				<td><?php echo $row['residence']; ?></td>

			</tr>
			<?php
				}
			?>
		</tbody>
</table>

<script src="../assets/js/jquery.min.js" ></script>
<script src="../assets/js/popper.min.js" ></script>
<script  src="../assets/js/bootstrap.min.js" ></script>
<script src="../assets/js/jquery-3.3.1.js" type="text/javascript"></script>
<sricpt src="../assets/js/jquery.dataTables.min.js" ></sricpt>
<script type="text/javascript">


</script>
</body>
</html>
