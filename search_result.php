<!DOCTYPE html>
<html>
	<title>Available Bus</title>
	<link rel="icon" href="icon/bus_logo.jpg" />
	<head>
		<?php include "linker.php";?>
		<script>
			//for single bus
			$(document).ready(function(){
			 $('.bus_detail_info').click(function(){
			   var id = this.id;
			   var splitid = id.split('_');
			   var busid = splitid[1];
			   // AJAX request
			   $.ajax({
				url: 'bus_info.php',
				type: 'post',
				data: {busid: busid},
				success: function(response){ 
				  // Add response in Modal body
				  $('#bus_detail_b').html(response);

				  // Display Modal
				  $('#ModalforBusDetail').modal('show'); 
				}
			  });
			 });
			});
			
			//for seat
			$(document).ready(function(){
			 $('.bus_seat').click(function(){
			   var id = this.id;
			   var splitid = id.split('_');
			   var busno = splitid[1];
			   // AJAX request
			   $.ajax({
				url: 'seat_info.php',
				type: 'post',
				data: {busno: busno},
				success: function(response){ 
				  // Add response in Modal body
				  $('#bus_seat_b').html(response);

				  // Display Modal
				  $('#ModalforBusSeat').modal('show'); 
				}
			  });
			 });
			});
		</script>
		<style>
			.navbar-nav li{
				margin-left:%;
			}
		</style>
		
	</head>
	<body>
	<!-- ModalforBusInfo -->
	<div class="modal fade" id="ModalforBusDetail">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" style='color:#079d49'>Bus Information</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body" id="bus_detail_b"> </div>
			</div>
		</div>
	</div>
	<!-- ModalforBusSeat -->
	 <div class="modal fade" id="ModalforBusSeat">
		<div class="modal-dialog modal-lg">
			<div class="modal-content" style='border-radius:;'>
				<div class="modal-header">
					<h4 class="modal-title" style='color:#079d49'>Trip Information</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body" id="bus_seat_b" style='margin-bottom:2%'></div>
			</div>
		</div>
	</div>
	<div class='container-fluid text-center' style='margin-top:7%;'>
		<!--<div class="progress" style='height:70px;font-size:14px;'>
		  <div class="progress-bar" role="progressbar" style="width:20%;border:px solid #b3b3b3;background-color:white">
			<div class='circle' style='background-color:#079d49;'>1</div>
			<label style='color:black'>Search </label>
		  </div>
		  <div class="progress-bar" role="progressbar" style="width:20%;background-color:white;border:">
			<div class='circle'style='background-color:#079d49;'>2</div>
			<label style='color:black'>Book </label>
		  </div>
		  <div class="progress-bar" role="progressbar" style="width:20%;background-color:white;border:">
			<div class='circle'>3</div>
			<label style='color:black'>Confirm </label>
		  </div>
		  <div class="progress-bar" role="progressbar" style="width:20%;background-color:white;border:">
			<div class='circle'>4</div>
			<label style='color:black'>Pay </label>
		  </div>
		  <div class="progress-bar" role="progressbar" style="width:20%;background-color:white;">
			<div class='circle'>5</div>
			<label style='color:black'>Ticket </label>
		  </div>
		</div>-->
		<img src='icon_step.PNG' class='img-fluid'/>
	</div>
	<div class='container-fluid' style='margin-top:2%;margin-bottom:4%'>
		<?php
			$connect=mysqli_connect("localhost","root","","bus_service");
			$from=$_POST["source"];
			$to=$_POST["dstn"];
			$type=$_POST["type"];
			$date=$_POST["journey_date"];
			$i=1;
			echo "<h5 style='color:#666;text-align:center;'>".$from."-".$to."<br>Date: ".$date."</h5>";
		?>
	</div>
	<div class="container-fluid" style='margin-bottom:15%;margin-top:-4%;'>
		<table class='table table-striped' style='margin-top:0px;text-align:center'>
			<thead>
				<tr>
					<th>#</th>
					<th>Bus Name</th>
					<th style='list-style:none;text-align:;'>Bus type</th>
					<th>Departure Time</th>
					<th>Available Seats</th>
					<th>Fare</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php		
					$sql = "SELECT * FROM `bus_lists` WHERE `start` LIKE '$from' AND `end` LIKE '$to' AND `date` LIKE '$date'";
					$records=mysqli_query($connect,$sql);
					while($data=mysqli_fetch_array($records))
					{
						$id=$data['id'];
						echo "<tr style='height:120px'>";
							echo "<td>".$i."</td>";
							echo "<td style='list-style:none;text-align:middle;'class='text-muted'>
									<h2 class='btn bus_detail_info' data-toggle='modal' data-target='#ModalforBusDetail' id='businfo_".$id."' style='padding:0;color:#333333;font-size:20px;font-weight:bold;text-decoration:;'>
										".$data['bus_company']."
									</h2>
									<li>Coach#".$data['bus_no']."</li>
									<li><small>Cancellation policy</small></li>
								  </td>";
							echo "<td style='list-style:none;text-align:;'class='text-muted'>
									<small><li>".$data['bus_type']."</li>
									<li>Class: Bussiness</li>
									<li>Engine: Scania</li>
									<li>Convey: Ferry</li></small>
								  </td>";
							echo "<td style='list-style:none;'>
									<h5>".$data['time']."</h5>
									<li class='text-muted'><small>Depart from: Khulna(Sonadanga)</small></li>
									<li class='text-muted'><small>Last stopage: Dhaka(Gulistan)</small></li>
								 </td>";
							echo "<td style='list-style:none;text-align:middle;'>
									<h5 style='margin-bottom:auto;margin-top:auto;text-align:middle'>
										".$data['seats']."
									</h5>
									<li class='text-muted'><small>Total seats: 40</small></li>
								 </td>";
							echo "<td style='list-style:none;text-align:middle;' class='text-muted'>
									<h5 style='color:#079d49;font-weight:bold;'>BDT ".$data['fare']."/-</h5>
									<li>(Per seat)</li>
									<li><small>Charge applicable</small></li>
								  </td>";
							echo "<td style='text-align:middle;margin-bottom:auto;margin-top:50%;'>
									<button data-toggle='modal' data-target='#ModalforBusSeat' style='padding-left:5%;padding-right:5%;margin-top:25%;' class='btn btn-md btn-success bus_seat' id='seat_" .$data['trip_no']."'>
										View Seat
									</button>
								  </td>";
						echo "</tr><br>";
						$i=$i+1;
					}
				?>
			</tbody>
			</table>
	</div>
	<?php include "footer.php";?>
	</body>
</html>
