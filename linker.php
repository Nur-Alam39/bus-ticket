<link rel="stylesheet" href="style.css" media="all" />
<link rel="stylesheet" href="animate.css" media="all" />
<script src="jquery.js" type="text/javascript"></script>
<script src="viewportchecker.js" type="text/javascript"></script>
<script src="scripts.js" type="text/javascript"></script>
<script src="serverTime.js" type="text/javascript"></script>
<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css"/>
<link rel="stylesheet" href="bootstrap4/css/bootstrap.css"/>
<script src="bootstrap4/js/bootstrap.js" type="text/javascript"></script>
<script type="text/javascript">
	$(window).scroll(function() {
	  if ($(document).scrollTop() > 50) {
		$('nav').addClass('shrink');
	  } else {
		$('nav').removeClass('shrink');
	  }
	});
</script>
<!--Routes map-->
<div class="modal fade" id="ModalforRouteMap" >
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
					<h4 class="modal-title" style='color:#079d49'>Routes Map</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body" id="route_map">
				<img src='map3.png' class='img-fluid'/>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
<!--Payment Verify-->
<div class="modal fade" id="ModalforPaymentVerify" >
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
					<h4 class="modal-title" style='color:#079d49'>Payment Verification</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body" id="route_map">
				<form action="ticket.php" name="buy_seat" method="POST">
				<div class="container">
					<h5></h5>
					<label style='font-weight:bold;'>Enter Reference Number:</label> 
					<input type='text' name='name' id='name' class='form-control'>
					<label style='font-weight:bold;'>Enter Transaction ID:</label> 
					<input name='mobile' id='mobile' type='text' class='form-control'><br>
					<center><input style="width:;margin-top:0px;" class="btn cus_button1" type="submit" name="submit" id="btn" value="Verify"></input></center>
				</div>
			</form >
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
<!--Contact-->
<div class="modal fade" id="ModalforContact" >
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
					<h4 class="modal-title" style='color:#079d49'>Contact Information</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body" id="route_map">
				<div class="container">
					<h6>Hot Line: 16334</h6>
					<h6>Phone: 025784359</h6>	
					<h6>Mobile: 0171265666, 01911432546</h6>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
<nav class="navbar navbar-expand-sm  navbar-light fixed-top" style="background-color:#fff;border-top:px solid #f2f2f2;box-shadow: 0 0 8px #999999;">
		  <a class="navbar-brand" style="color:#079d49;margin-left:1%;font-family:Helvetica;font-weight:bold;" href="index.php">
			<!--<img src='icon/bus_logo.jpg' style='width:80px;height:80px;padding-top:7%;margin-right:5%'/>-->
			<img src='logo.png' style='width:;height:;padding-top:2%;margin-right:5%' class='img-fluid'/>
		  </a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
			<span class="navbar-toggler-icon" style="border:px solid #666;background-color:#fff;border-radius:2px;"></span>
		  </button>
		  <div class="collapse navbar-collapse" style="background-color:white;color:white;z-index:200;width:100%;margin-left:17%;" id="collapsibleNavbar">
				 <ul class="navbar-nav">
				  <li class="nav-item">
					<a class="btn btn-link nav-link" style='color:#079d49;font-size:16px;font-weight:;background-color:white' href="index.php">&emsp;Pick Bus</a>
				  </li>
				  <li class="nav-item">
					<a class="btn btn-link nav-link" style='color:#079d49;font-size:16px;font-weight:;background-color:white' href="index.php">&emsp;Bus Operators</a>
				  </li>
				   <li class="nav-item">
					<a class="btn btn-link nav-link" style='color:#079d49;font-size:16px;padding:0;background-color:white' data-toggle='modal' data-target='#ModalforRouteMap'>&emsp;Routes map</a>
				  </li>
				  <li class="nav-item">
					<a class="btn btn-link nav-link" style='color:#079d49;font-size:16px;padding:0;background-color:white' data-toggle='modal' data-target='#ModalforPaymentVerify'>&emsp; Verify Payment</a>
				  </li>
				  <li class="nav-item">
					<a class="btn btn-link nav-link" style='color:#079d49;font-size:16px;padding:0;background-color:white' data-toggle='modal' data-target='#ModalforPaymentVerify'>&emsp; Cancel Ticket</a>
				  </li>
				  <li class="nav-item">
					<a class="btn btn-link nav-link" style='color:#079d49;font-size:16px;padding:0;background-color:white' data-toggle='modal' data-target='#ModalforContact'>&emsp; Contact</a>
				  </li>
				</ul>
		  </div> 
	</nav>
<?php
$connect=mysqli_connect("localhost","root","","bus_service");
?>