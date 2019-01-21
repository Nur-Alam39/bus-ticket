<!DOCTYPE html>
<html>
	<title>Select Seat</title>
	<link rel="icon" href="icon/bus_logo.jpg" />
	<head>
		<link rel = "stylesheet"type = "text/css"href = "style.css" />
		<link rel = "stylesheet"type = "text/css"href = "image_slide.css" />
		<script type="text/javascript" src="validation.js"></script>
		<script src="http://code.jquery.com/jquery-latest.js"></script>
		<script type="text/javascript" >
			$(document).ready(function(){
				$('.chkbx').click(function(){
					var text="";
					$('.chkbx:checked').each(function(){
						text+=$(this).val()+'\n';
					});
					text=text.substring(0,text.length-1);
					$('#selectedtext').val(text);
					var count = $("[type='checkbox']:checked").length;
					$('#count').val($("[type='checkbox']:checked").length);
					var fare = $("[type='checkbox']:checked").length;
					$('#fare').val($("[type='checkbox']:checked").length*400);
				});
			});
		</script>
		<style>
		.container{
			display: block;
			position: relative;
			padding-left: 25px;
			margin-bottom: 12px;
			cursor: pointer;
			font-size: 14px;
		}
		.container input{
			position: absolute;
			opacity: 0;
			cursor: pointer;
		}
		.checkmark{
			position: absolute;
			top: 0;
			left: 0;
			height: 15px;
			width: 15px;
			background-color:#ffffff;
			border:1px solid #999999;
			border-radius:3px;
		}
		.container:hover input~.checkmark{
			background-color: #4dffb8;
			content: "Free";
		}
		.container input:checked~.checkmark{
			background-color: #b3b3b3;
		}
		.checkmark:after{
			content: "";
			position: absolute;
			display: none;
		}
		.container input:checked~.checkmark:after {
			display: block;
		}
		.container .checkmark:after {
			left:2px;
			top:2px;
			width: 5px;
			height: 5px;
			transform: rotate(90deg);
		}
		#all{
			padding-top:1%;
			width:98%;
			height:500px;
			margin-left:1%;
			background-color:#ffffff;
		}
		#seat_block{
			background-color:#FFFFFF;
			width:310px;
			height:340px;
			margin-top:2%;
			margin-left:6%;
			padding-top:2%;
			box-shadow: 0 0 10px #999999;
			border-radius:20px;
			padding-bottom:1%;
			float:left;
		}
		#seat_block:hover{
			box-shadow: 0 0 14px #000000;
		}
		.col2{
			float:left;
			width:65px;
			height:300px;
			background-color:#ffffff;
		}
		#businfo{
			width:300px;
			height:350px;
			margin-left:8%;
			background-color:#ffffff;
			float:left;
			margin-top:2%;
			padding:1%;
			border:1px solid #b9b9b9;
			border-radius:15px;
			box-shadow: 0 0 8px #999999;
			font-size:14px;
		}
		#select_info{
			width:220px;
			height:400px;
			padding:1%;
			margin-top:0%;
			margin-left:5%;
			background-color:#ffffff;
			float:left;
		}
		</style>
	</head>
	<body>	
		<div id="navbar" style='position:fixed;'>
			<div id='icon'>Gopalganj Bus Service<br><p style='font-size:12px;margin-top:-2px;margin-left:180px;'>FAST, EASY & SIMPLE</p></div>
			<a href="#pickbus" style="margin-left:145px;">Pick Bus</a>
			<a href="#oparators"style="margin-left:20px">Available Bus Oparators</a>
			<a href="#routes"style="margin-left:20px">Available Bus Routes</a>
			<a href="#payment"style="margin-left:20px">Payment</a>
			<a href="#contact"style="margin-left:20px">Contact</a>
		</div>
		<div id='progress_step'>
			<div id='step' style='margin-left:120px;'>
				<div id='step_no'style='background-color:#079d49;color:white;border:2px solid #079d49;'>1</div>
				<div id='step_line'style='float:left;margin-top:14px;background-color:#079d49;'></div><br>
				<div id='pro_text'style='margin-top:16px;'>Search</div>
			</div>
			<div id='step'>
				<div id='step_no'style='background-color:#079d49;color:white;border:2px solid #079d49;'>2</div>
				<div id='step_line'style='float:left;margin-top:14px;background-color:#079d49;'></div><br>
				<div id='pro_text'style='margin-top:16px;'>Select Bus</div>
			</div>
			<div id='step'>
				<div id='step_no'style='background-color:#079d49;color:white;border:2px solid #079d49;'>3</div>
				<div id='step_line'style='float:left;margin-top:14px;'></div><br>
				<div id='pro_text'style='margin-top:16px;'>Select Seat</div>
			</div>
			<div id='step'>
				<div id='step_no'style=''>4</div>
				<div id='step_line'style='float:left;margin-top:14px;'></div><br>
				<div id='pro_text'style='margin-top:16px;'>Confirm</div>
			</div>
			<div id='step'>
				<div id='step_no'style=''>5</div>
				<div id='step_line'style='float:left;margin-top:14px;'></div><br>
				<div id='pro_text'style='margin-top:16px;'>Payment</div>
			</div>
			<div id='step'>
				<div id='step_no'style=''>6</div><br>
				<div id='pro_text'style='margin-top:16px;'>Ticket</div>
			</div>
		</div>
		<form action="buy_seat.php" name="seats" method="POST">	
			<div id="all" style='margin-top:20px;'>
				<div id="businfo">
					<h3 style='text-align:;margin-top:-5px;'>Information</h3>
				<?php
					mysql_connect('localhost','root','');
					mysql_select_db('bus_service');
						
					$no=$_GET["no"];
					$sql = "SELECT * FROM `bus_lists` WHERE `no` LIKE '$no'";
					$records=mysql_query($sql);
					while($data=mysql_fetch_assoc($records))
						{
							echo "<p>Bus Name:".$data['bus_company']."</p>";
							echo "<p>Bus Type:".$data['bus_type']."</p>";
							echo "<p>From:".$data['start']."</p>";
							echo "<label>To:".$data['end']."</label>";
							echo "<p>Date:".$data['date']."</p>";
							echo "<p>Time:".$data['time']."</p>";
							echo "<p>Fare:".$data['fare']."</p>";
							echo "<p style=''>Available Seats:".$data['seats']."</p>";
							echo "<p>Seats:".$data['seat']."</p>";
							//<!--echo "<td><a href=\"seats.php?no=" . $data['no'] . "\">View Seats</a></td>";-->
						}
					
				?>
				</div>
				<div id="seat_block">
				<div style="width:80px;height:25px;background-color:#cccccc;margin-bottom:8%;text-align:center;padding-top:2px;">Enter</div>
					<div class="col2" style="margin-left:20px;">
						<label class="container">A1
						  <input type="checkbox" class="chkbx" value="A1">
						  <span class="checkmark"></span>
						</label>
						<label class="container">B1
						  <input type="checkbox" class="chkbx" value="B1">
						  <span class="checkmark"></span>
						</label>
						<label class="container">C1
						  <input type="checkbox" class="chkbx" value="C1">
						  <span class="checkmark"></span>
						</label>
						<label class="container">D1
						  <input type="checkbox" class="chkbx" value="D1">
						  <span class="checkmark"></span>
						</label>
						<label class="container">E1
						  <input type="checkbox" class="chkbx" value="E1">
						  <span class="checkmark"></span>
						</label>
						<label class="container">F1
						  <input type="checkbox" class="chkbx" value="F1">
						  <span class="checkmark"></span>
						</label>
						<label class="container">G1
						  <input type="checkbox" class="chkbx" value="G1">
						  <span class="checkmark"></span>
						</label>
						<label class="container">H1
						  <input type="checkbox" class="chkbx" value="H1">
						  <span class="checkmark"></span>
						</label>
						<label class="container">I1
						  <input type="checkbox" class="chkbx" value="I1">
						  <span class="checkmark"></span>
						</label>
						<label class="container">J1
						  <input type="checkbox" class="chkbx" value="J1">
						  <span class="checkmark"></span>
						</label>
					</div>
					<div class="col2">
						<label class="container">A2
						  <input type="checkbox" checked="checked"class="chkbx" value="A2">
						  <span class="checkmark"></span>
						</label>
						<label class="container">B2
						  <input type="checkbox"class="chkbx" value="B2">
						  <span class="checkmark"></span>
						</label>
						<label class="container">C2
						  <input type="checkbox"class="chkbx" value="C2">
						  <span class="checkmark"></span>
						</label>
						<label class="container">D2
						  <input type="checkbox"class="chkbx" value="D2">
						  <span class="checkmark"></span>
						</label>
						<label class="container">E2
						  <input type="checkbox" checked="checked"class="chkbx" value="E2">
						  <span class="checkmark"></span>
						</label>
						<label class="container">F2
						  <input type="checkbox">
						  <span class="checkmark"></span>
						</label>
						<label class="container">G2
						  <input type="checkbox">
						  <span class="checkmark"></span>
						</label>
						<label class="container">H2
						  <input type="checkbox">
						  <span class="checkmark"></span>
						</label>
						<label class="container">I2
						  <input type="checkbox">
						  <span class="checkmark"></span>
						</label>
						<label class="container">J2
						  <input type="checkbox">
						  <span class="checkmark"></span>
						</label>
					</div>
					<div class="col2" style="margin-left:30px;">
						<label class="container">A3
						  <input type="checkbox" checked="checked">
						  <span class="checkmark"></span>
						</label>
						<label class="container">B3
						  <input type="checkbox">
						  <span class="checkmark"></span>
						</label>
						<label class="container">C3
						  <input type="checkbox">
						  <span class="checkmark"></span>
						</label>
						<label class="container">D3
						  <input type="checkbox">
						  <span class="checkmark"></span>
						</label>
						<label class="container">E3
						  <input type="checkbox" checked="checked">
						  <span class="checkmark"></span>
						</label>
						<label class="container">F3
						  <input type="checkbox">
						  <span class="checkmark"></span>
						</label>
						<label class="container">G3
						  <input type="checkbox">
						  <span class="checkmark"></span>
						</label>
						<label class="container">H3
						  <input type="checkbox">
						  <span class="checkmark"></span>
						</label>
						<label class="container">I3
						  <input type="checkbox">
						  <span class="checkmark"></span>
						</label>
						<label class="container">J3
						  <input type="checkbox">
						  <span class="checkmark"></span>
						</label>
					</div>
					<div class="col2">
						<label class="container">A4
						  <input type="checkbox" checked="checked">
						  <span class="checkmark"></span>
						</label>
						<label class="container">B4
						  <input type="checkbox">
						  <span class="checkmark"></span>
						</label>
						<label class="container">C4
						  <input type="checkbox">
						  <span class="checkmark"></span>
						</label>
						<label class="container">D4
						  <input type="checkbox">
						  <span class="checkmark"></span>
						</label>
						<label class="container">E4
						  <input type="checkbox" checked="checked">
						  <span class="checkmark"></span>
						</label>
						<label class="container">F4
						  <input type="checkbox">
						  <span class="checkmark"></span>
						</label>
						<label class="container">G4
						  <input type="checkbox">
						  <span class="checkmark"></span>
						</label>
						<label class="container">H4
						  <input type="checkbox">
						  <span class="checkmark"></span>
						</label>
						<label class="container">I4
						  <input type="checkbox">
						  <span class="checkmark"></span>
						</label>
						<label class="container">J4
						  <input type="checkbox">
						  <span class="checkmark"></span>
						</label>
					</div>
				</div>
				<div id="select_info">
					<h3>Selected Seats</h3><textarea type="text" id="selectedtext" style="width:200px;height:100px;"></textarea><br>
					<h3>No. of seats<br><input type="text" id="count" style="width:200px;height:30px;"></h3><br>
					<h3>Total Fare<br><input type="text" id="fare" style="width:200px;height:30px;"></h3>
					<input style="width:120px;" class="cus_button cus_button1" onclick="function()" type="submit" name="submit" id="btn" value="Book Seat"></input>
				</div>
			</div>
		</form>
		<div id='below_up'></div>
		<div id='below' style='margin-top:0px;'>
			<h3 style="margin-left:70px;">About Us</h3>
			<p style="margin-left:70px;">Gopalganj Bus Service is a online ticket booking system.</p>
			<h3 style="margin-left:70px;margin-top:30px;padding-top:10px;">Follow Us On</h3>
			<h4><img src="icon/phone.png" style="margin-left:75px;width:30px;height:30px;"><style="margin-left:10px;">
			<a style="margin-left:10px;"href="https://www.facebook.com/sheba.greenline/"><img src="icon/fav.png" alt="sheba_green" style="margin-left:15px;width:30px;height:30px;"></a>
			<img src="icon/twitter.png" alt="sheba_green" style="margin-left:15px;width:30px;height:30px;">
			<a href="https://www.facebook.com/Tungipara-Express-1741667562730267/" style="margin-left:10px"></a>
			<p style="margin-bottom:10px;">
			<center>
				<h5>Copyright &copy; 2018 Developed By:<a style="color:white;"href="https://www.facebook.com/NurAlam.x39"> Nur Alam</a></h5>
				<h5 style="margin-top:-18px;">Dept.of CSE,BSMRSTU,Gopalganj</a></h5>
			</center>
		</div>
	</body>	
</html>
