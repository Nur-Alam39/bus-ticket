<!DOCTYPE html>
<html>
	<title>Confirmation</title>
	<link rel="icon" href="icon/bus_logo.jpg" />
	<head>
		<?php include "linker.php";?>
		<style>
			.container{
				padding:3%;
				margin-top:5%;
				border-radius:10px;
				box-shadow:0px 0px 8px #999999;
			}
		</style>
	</head>
	<body>
		<div class='container-fluid text-center' style='margin-top:8%;'>
			<img src='icon_step2.png' class='img-fluid'/>
		</div>
		<div class='row' style='margin:0;padding:0;'>
		 <div class='col-lg-6' style='padding-left:4%'>
			<form action="payment_confirm.php" name="buy_seat" method="POST">
				<div class="container">
					<h5>Passenger Information</h5>
					<label style='font-weight:bold;'>Name:</label> 
					<input type='text' name='name' id='name' class='form-control'>
					<label style='font-weight:bold;'>Mobile:</label> 
					<input name='mobile' id='mobile' type='text' class='form-control'><br>
					<label style='font-weight:bold;'>Gender:</label>
					<div class="custom-control custom-radio custom-control-inline">
					  <input type="radio" id="male" name="gender" class="custom-control-input">
					  <label class="custom-control-label" for="male">Male</label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
					  <input type="radio" id="female" name="gender" class="custom-control-input">
					  <label class="custom-control-label" for="female">Female</label>
					</div>
					<br><label style='font-weight:bold;'>Payment Method:</label>
					<div class="custom-control custom-radio custom-control-inline">
					  <input type="radio" id="bkash" name="p_m" class="custom-control-input">
					  <label class="custom-control-label" for="bkash">bkash</label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
					  <input type="radio" id="rocket" name="p_m" class="custom-control-input">
					  <label class="custom-control-label" for="rocket">Rocket</label>
					</div>
					<div class="">
						<p style="text-alignment:'justify';">Note:<br> Your ticket(s) would be reserved and inactive for 30 minutes from the time of booking.Pay through bKash to our Merchant Account No: 01791715774 and confirm your transaction ID within 30 minutes to get the confirmed ticket. </p>
					</div>
					<center><input style="width:;margin-top:0px;" class="btn cus_button1" type="submit" name="submit" id="btn" value="Confirm Reservation"></input></center>
				</div>
			</form >
		 </div>
		 <div class='col-lg-6'>
			<div class="container">
				<?php
				
					$busid = $_POST['busid']?? '';
					$start = $_POST['start']?? '';
					$end = $_POST['end']?? '';

				echo "".$start."";
				echo "<h5>Journey Information</h5>";
				echo "".$start."-".$end."<br>";
				echo "Bus Name<br>";
				echo "Date:<br>Time:<br>";
				echo "Seat No: A1<br>";
				echo "Fare: 400/-(per seat)<br>";
				?>
			</div>
			<div class="container">
				<h5>Payment Information</h5>
				Ticket Price:400/-<br>
				System Fee:22/-<br>
				Total:422/-
			</div>
		 </div>
		</div>
		<?php include "footer.php";?>
	</body>
</html>