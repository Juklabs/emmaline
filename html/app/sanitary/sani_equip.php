<!DOCTYPE html>
<?php
require_once ('/var/www/html/app/library/function.php');

require_once ('editEquip.php');
if (isset($_POST['submit_edit_equip']) && (!empty($_POST['edit_equipname']))) {
     editEquipInfo();
}
?>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>SANITATION EQUIPMENTS</title>
		<link rel="stylesheet" href="css/style_cn.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
		<link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	</head>
	<body>
		<div class="menu-bar" align="center">
			<ul>
				<li><a href="index.php">HOME</a></li>
				<li><a href="sani_emp.php">EMPLOYEE</a></li>
				<li><a href="sani_equip.php">EQUIPMENTS</a></li>
				<li><a href="sani_garbage.php">GARBAGE COLLECTOR</a></li>
			</ul>
		</div>
		
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					
					<h3>
					Check Equipments in Stock
					</h3>
					
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-12">
								<ul class="nav nav-tabs">
									<li class="active">
										<a href="sani_equip.php">Check Equipment Stock</a>
									</li>
									<li>
										<a href="equipUselog.php">Uselog History</a>
									</li>
									
								</ul>
								
								<div class="row">
									<nav class="search-bar">
										<div class="nav-wrapper">
											<form>
												<div class="input-field">
													<input id="search" type="search" class="light-table-filter" data-table="order-table" placeholder="Search equipment.." required="">
													<label for="search" class="active"><i class="material-icons">search</i></label>
													<i class="material-icons">close</i>
												</div>
											</form>
										</div>
									</nav>
								</div>
								
							</nav>
							<table class="table order-table">
								<thead>
									<tr class="success">
										
										<th>Equipment ID</th>
										<th>Equipment Name</th>
										<th>Equipment Type</th>
										<th>Status</th>
										<th>Delete</th>
										<th>Edit</th>
									</tr>
								</thead>
								<tbody>
									<?php include 'query/EquipmentList.php' ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-6">
							<a href="addEquipHome.php">
								<button type="button" class="btn btn-lg btn-success">
								
								Add
								
								</button>
							</a>
						</div>
					</div>
				</div>
				<script src="js/filter.js" type="application/javascript"></script>
				<script> LightTableFilter.init() </script>
				<script src="js/init.js" type="application/javascript"></script>
				<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="application/javascript"></script>
				<script src="js/materialize.js" type="application/javascript"></script>
				<script src="js/maskinput.js"></script>
				<script>
				$(document).ready(function(){
				$('.modal-trigger').leanModal({ dismissible: true });
				});
				</script>
			</div>
		</div>
	</div>
</body>
</html>