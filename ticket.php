<!DOCTYPE html>
<html>
	<title>Ticket</title>
	<link rel="icon" href="icon/bus_logo.jpg" />
	<head>
	<style></style>
	<script>
		function printContent(el){
		var restorepage = document.body.innerHTML;
		var printcontent = document.getElementById(el).innerHTML;
		document.body.innerHTML = printcontent;
		window.print();
		document.body.innerHTML = restorepage;
		}
	</script>
	<?php include "linker.php";?>
	</head>
	<body>
		<div class='container-fluid text-center' style='margin-top:8%;'>
			<div class="progress" style='height:70px;font-size:14px;'>
			  <div class="progress-bar" role="progressbar" style="width:20%;border:px solid #b3b3b3;background-color:white">
				<div class='circle' style='background-color:#079d49;'>1</div>
				<label style='color:black'>Search </label>
			  </div>
			  <div class="progress-bar" role="progressbar" style="width:20%;background-color:white;border:">
				<div class='circle'style='background-color:#079d49;'>2</div>
				<label style='color:black'>View </label>
			  </div>
			  <div class="progress-bar" role="progressbar" style="width:20%;background-color:white;border:">
				<div class='circle'style='background-color:#079d49;'>3</div>
				<label style='color:black'>Confirm </label>
			  </div>
			  <div class="progress-bar" role="progressbar" style="width:20%;background-color:white;border:">
				<div class='circle'style='background-color:#079d49;'>4</div>
				<label style='color:black'>Pay </label>
			  </div>
			  <div class="progress-bar" role="progressbar" style="width:20%;background-color:white;">
				<div class='circle'style='background-color:#079d49;'>5</div>
				<label style='color:black'>Ticket </label>
			  </div>
			</div>
		</div>
		<div class='container-fluid'  style='padding:0%;margin:0;margin-top:2%'>
			<div class='container-fluid' id='ticket' style='padding-left:%;padding-bottom:1%;width:90%;border-radius:5px;box-shadow:0px 0px 8px #999999;'>
				<p style='font-size:20px;margin-top:10px;margin-left:30px;color:#079d49;'>Gopalganj Bus Service</p>
				<p style='font-size:11px;margin-top:-20px;margin-left:122px;color:#079d49;'>FAST, EASY & SIMPLE
				<p style="width:100%;height:3px;background-color:#079d49;margin-top:-12px;margin-left:0px;"></p>
							
				<center><p style="font-size:20px;text-alignment:center;">Tungipara Express</p></center>
				<p style="font-size:14px;text-alignment:center;margin-left:%;margin-top:-10px;">Passenger Name: Nur Alam</p>
				<p style="font-size:14px;text-alignment:center;margin-left:%;">Mobile No. 01911248212</p>
				<p style="font-size:14px;text-alignment:center;margin-left:%;">From: Khulna<label style="margin-left:30px;">To: Dhaka</label><br>
				<p style="font-size:14px;text-alignment:center;margin-left:%;">Bus Name: Tungipara Express <label style="margin-left:30px;">Coach No.576</label><br>
				<p style="font-size:14px;text-alignment:center;margin-left:%;">Date:07.03.18  Time: 07.00 AM<br>
				<p style="font-size:14px;text-alignment:center;margin-left:%;">Seat No(s): A1<br>
				<p style="font-size:14px;text-alignment:center;margin-left:%;">Total Fare: 422/-<br>
				<p style="font-size:14px;text-alignment:center;margin-left:%;">Ticket Issued Time: 26 Mar,2018 09:12:15
			</div>
			<div class='row' style='margin:0;padding:0;'>
				<div class='col-lg-7' style='padding-left:1%;'>
					<label style='font-size:15px;margin-top:10px;margin-left:5%' class='text-center'>
						*Note: Please print this ticket and bring the ticket, when you will get in the bus.
					</label>
				</div>
				<div class='col-lg-5' style='padding-left:%;margin-top:1%'>
					<button style="margin-right:5%" class="btn cus_button1" onclick="printContent('ticket')" >
						Print Ticket
					</button>
					<button style="margin-right:5%" class="btn cus_button1" onclick="printContent('ticket')" >
						Save as PDF
					</button>
					<button style="margin-right:5%" class="btn cus_button1" onclick="printContent('ticket')" >
						 E-Ticket
					</button>
					<button style="margin-right:5%" class="btn cus_button1" onclick="printContent('ticket')" >
						 Email
					</button>
				</div>
			</div>
		</div>
		<?php include "footer.php";?>
	</body>
</html>