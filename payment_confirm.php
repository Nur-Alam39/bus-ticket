<!DOCTYPE html>
<html>
	<title>Payment and Reserve</title>
	<link rel="icon" href="icon/bus_logo.jpg" />
	<head>
		<?php include "linker.php";?>
		<?php include "bkash_verify.php";?>
		<script src="serverTime.js" type="text/javascript"></script>
		<style>
			#payment_confirm .container-fluid
			{
				padding:2%;
				margin-left:2%;
				border-radius:10px;
				box-shadow:0px 0px 8px #999999;
			}
		</style>
		
	</head>
	<body onload="startTime()">
		<div class='container-fluid text-center' style='margin-top:5%;'>
			<img src='icon_step3.png' class='img-fluid'/>
		</div>
			<div class='row' style='margin:0;padding:0;margin-top:2%;' id='payment_confirm'>
				<div class='col-lg-6' style='margin-bottom:5%;'>
					<?php
						 $booking_time=$_POST['booking_time'];
						 $name=$_POST['name'];
						 $mobile=$_POST['mobile'];
						 $connect = mysqli_connect("localhost", "root", "","bus_service");
					?>
					<div class="container-fluid" style='padding:5%;'>
						<form action="" name="payment_reserve" method="POST">
								<h5>Please follow the following steps for confirming your reservation:</h5><br>
								<p style='text-align:justify;'>
									Step 1:Please pay for your tickets through bKash to our Merchant Account Number given below within next 30 minutes, else your ticket will be cancelled.
								</p>
									<table class='table table-striped table-bordered'>
										<tr>
											<th>Merchant Account No.</th>
											<th>Payment Amount</th>
											<th>Reserve Reference Number</th>
										</tr>
										<tr>
											<td>017********</td>
											<td>422/-</td>
											<td>csb324</td>
										<tr>
									</table>
								<p style='text-align:justify;'>
									Step 2:After paying through bKash, please enter the Transaction ID received from bKash below and press the verify button: 
								</p>	
								<input type='text' class='form-control' id='trnx_id' name='trnx_id' style='cursor:pointer;;font-size:14px;text-align:center;' placeholder='Enter Your bkash Transaction ID'/>
								<input style="width:20%;margin-top:2%" class="btn cus_button1 verify <?php echo $disabled1; ?>" type="submit" name="submit" value='Verify bkash' id="verify_btn"></input>
								<a style="width:20%;margin-top:2%;color:" href='ticket.php' class="btn btn-primary <?php echo $disabled; ?>">Ticket</a><br>
								<!-- Error Message -->
								<span><?php echo $error; ?></span>
						</form>
					</div>
				</div>
				<div class='col-lg-6' style='margin:0;padding-left:4%;'>
					<div class='row' style='padding:%;margin-bottom:%'>
						<div class='col-lg-5' style='padding:%;margin-left:0%'>
							<div class=' container-fluid text-center' style='padding:6%;margin:0%;margin-bottom:12%;'>
								<h4 style='font-weight:bold;' id="serverTime">Minitues</h4>remaining to pay
							</div>
							<div class=' container-fluid' style='padding:3%;margin:0%;margin-bottom:5%;list-style:none'>
								<?php 
									echo
									"<label style='font-size:14px;font-weight:bold;margin-top:px;'>Details information</label>
										<li>Name:".$name."</li>
										<li>Mobile No.".$mobile."</li>
										<li>From:".$from."</li>
										<li>To: ".$to."</li>
										<li>Bus Name: ".$bus_name."</li>
										<li>Date:".$date."  Time: ".$time."</li>
										<li>Seat No(s):".$seat."</li>
										<li>Total Fare: ".$fare."/-</li>
										<li>Payment Method: ".$method."</li>
									";
								?>
							</div>
						</div>
						<div class='col-lg-6 container-fluid' style='list-style:number;margin-left:0%;padding:2%;margin-left:4%'>
							<label style='font-size:14px;font-weight:bold;'>Pay through bkash</label><br>
							<ul>
							<li>Dial *247#</li>
							<li>Choose 'Payment'</li>
							<li>Mobile No.01911248212</li>
							<li>Enter our Merchant bkash no. 017********</li>
							<li>Enter Payment Amount </li>
							<li>Enter reference number: your mobile number</li>
							<li>Enter counter number: 1</li>
							<li>Enter your PIN</li>
							</ul>
							You will receive a confirmation message from bkash where you find the transaction number.
						</div>  
					</div>
				</div>  
			</div>  
			<?php include "footer.php";?>
	</body>
</html>