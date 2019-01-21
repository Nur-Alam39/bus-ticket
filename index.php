<!DOCTYPE html>
<html>
	<title>Bus Services</title>
	<link rel="icon" href="icon/bus_logo.jpg" />
	<head>
		<?php include "linker.php";?>
		<style>
			#index .container-fluid
			{
				padding:2%;
				margin:2%;
				border-radius:0px;
				margin-top:2%;
				border-radius:10px;
				box-shadow:0px 0px 0px #999999;
			}
			#info:hover
			{
				box-shadow:	0px 0px 0px #999999;
			}
			#search_part
			{
				background-image:url(busimages/back8.jpg);
				background-repeat:no-repeat;
				background-size:%;
				width:100%;
				margin:0;
				padding:0;
				background-attachment:fixed;
			}
			#index hr{hheight:6px;background-color:#079d49;}
		</style>
	</head>
	<body>
		<div class='row' style='margin:0;padding:0;border-radius:0px;' id="index">
			<div class='container-fluid' id='search_part' style='padding:0;margin:0;border-radius:0px;'>
				<div class='row' style='margin:0;padding-top:5%;padding-bottom:5%;margin-top:%;background-color:rgba(0,0,0,0.6);'>
					<div class='col-lg-7 text-center' style='text-align:center;margin-top:auto;margin-bottom:auto;'>
						<div class='container text-center' style='margin-top:5%;'>
							<div class="progress" style='height:70px;font-size:14px;margin-left:20%;margin-right:auto;background-color:transparent'>
							  <div class="progress-bar" style="width:15%;background-color:transparent">
								<div class='circle' style='background-color:#fff;color:#666;'>1</div>
								<label style='color:'>Search </label>
							  </div>
							  <div class="progress-bar" style="width:15%;background-color:transparent;">
								<div class='circle'style='background-color:#fff;color:#666'>2</div>
								<label style='color:'>Book </label>
							  </div>
							  <div class="progress-bar" style="width:15%;background-color:transparent;">
								<div class='circle' style='background-color:#fff;color:#666'>3</div>
								<label style='color:'>Confirm </label>
							  </div>
							  <div class="progress-bar" style="width:15%;background-color:transparent;">
								<div class='circle' style='background-color:#fff;color:#666'>4</div>
								<label style='color:'>Pay </label>
							  </div>
							  <div class="progress-bar" style="width:15%;background-color:transparent;">
								<div class='circle' style='background-color:#fff;color:#666'>5</div>
								<label style='color:'>Ticket </label>
							  </div>
							</div>
						</div>
						<h1 style='margin-top:auto;margin-bottom:auto;padding:0%;color:white;'>
							Buy bus ticket at home through 5 easy steps
						</h1>
					</div>
					<!--Voice search map-->
					<div class="modal fade" id="ModalforVoiceInput" >
						<div class="modal-dialog modal-lg">
							<div class="modal-content">
								<div class="modal-header">
										<h4 class="modal-title" style='color:#079d49'>Voice Search</h4>
										<button type="button" class="close" data-dismiss="modal">&times;</button>
								</div>
								<div class="modal-body" id="route_map">
								<form>
									<input type="text" x-webkit-speech="true" />
									</form>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								</div>
							</div>
						</div>
					</div>
					<div class='col-lg-4' style='border-radius:6px;margin-left:auto;margin-right:auto;padding:2%;margin-top:%;margin-bottom:%;margin:4%;background-color:rgba(0,0,0,1.6);background-color:white;'>
								<!--<h5>
									<label style="color:#079d49"><a name="pickbus"></a>Pick Your Bus</label>
									<a class='btn btn-link' data-toggle='modal' data-target='#ModalforRouteMap' 
									   style='float:right;font-size:14px;text-decoration:underline;'>
										Search by map
									</a>
									<a class='btn btn-link' data-toggle='modal' data-target='#ModalforVoiceInput' 
									   style='float:right;font-size:14px;text-decoration:underline;'>
										Search by voice
									</a>
							</h5>
							<form   action="search_result.php" name="bus_search_form" method="POST" onsubmit="return check(this)">
							  <div class="row">
								<div class="col-lg-2">
								  <p>From:</p>
								  <select  style="margin-top:px;color:#333333;"  class='form-control' id="source" name="source">
										<option value="|">Enter City</option>
										<option value="Gopalganj">Gopalganj </option>
										<option value="Barisal">Barisal</option>
										<option value="Khulna">Khulna</option>
										<option value="Dhaka">Dhaka(via Mawa)</option>
										<option value="Dhaka">Dhaka(via Aricha)</option>
										<option value="Chittagong">Chittagong</option>
										<option value="Faridpur">Faridpur</option>
										<option value="Madaripur">Madaripur</option>
									</select>
								</div>
								<div class="col-lg-2">
									<p>To:</p>
									<select  style="margin-top:px;color:#333333;"  class='form-control' id="dstn" name="dstn"placeholder="Select option">
										<option value="|">Enter City</option>
										<option value="Gopalganj">Gopalganj </option>
										<option value="Barisal">Barisal</option>
										<option value="Khulna">Khulna</option>
										<option value="Dhaka">Dhaka(via Mawa)</option>
										<option value="Dhaka">Dhaka(via Aricha)</option>
										<option value="Chittagong">Chittagong</option>
										<option value="Faridpur">Faridpur</option>
										<option value="Madaripur">Madaripur</option>
									</select>		
								</div>
								<div class="col-lg-2">
									<p>Date of Journey:</p>
									<input  class='form-control' type ="date" name="journey_date"  value="journey_date"/>
								</div>
								<div class="col-lg-2">
									<p>Coach type(optional):</p>
									<select  style="margin-top:px;color:#333333;" id="type" class='form-control' name="type">
										<option value="all">All</option>
										<option value="normal">Normal</option>
										<option value="chair">Chair Coach</option>
										<option value="ac">AC</option>
										<option value="business">Business Class</option>
									</select>
								</div>
								<div class="col-lg-2">
									<p>&emsp;</p>
									<input style="" class="btn btn-success form-control" type="submit" name="submit" id="btn" onclick='check()' value="Search Bus"></input>
								</div>
							  </div>
							</form>-->
						<!--<form class="form-inline">
						  <label class="sr-only" for="inlineFormInputName2">Name</label>
						  <input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Jane Doe">

						  <label class="sr-only" for="inlineFormInputGroupUsername2">Username</label>
						  <div class="input-group mb-2 mr-sm-2">
							<div class="input-group-prepend">
							  <div class="input-group-text">@</div>
							</div>
							<input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Username">
						  </div>

						  <div class="form-check mb-2 mr-sm-2">
							<input class="form-check-input" type="checkbox" id="inlineFormCheck">
							<label class="form-check-label" for="inlineFormCheck">
							  Remember me
							</label>
						  </div>

						  <button type="submit" class="btn btn-primary mb-2">Submit</button>
						</form>-->
						<form  action="search_result.php" name="bus_search_form" method="POST" onsubmit="return check(this)">	
							<div class="container" style='font-weight:bold;'>
								<h5>
									<label style="color:#079d49"><a name="pickbus"></a>Pick Your Bus</label>
									<a class='btn btn-link' data-toggle='modal' data-target='#ModalforRouteMap' 
									   style='float:right;font-size:14px;text-decoration:underline;'>
										Search by map
									</a>
									<a class='btn btn-link' data-toggle='modal' data-target='#ModalforVoiceInput' 
									   style='float:right;font-size:14px;text-decoration:underline;'>
										Search by voice
									</a>
								</h5>
								<label style="margin-left:px;font-style:bold;color:black">From:</label>
									<select  style="margin-top:px;color:#333333;"  class='form-control' id="source" name="source">
										<option value="|">Enter City</option>
										<option value="Gopalganj">Gopalganj </option>
										<option value="Barisal">Barisal</option>
										<option value="Khulna">Khulna</option>
										<option value="Dhaka">Dhaka(via Mawa)</option>
										<option value="Dhaka">Dhaka(via Aricha)</option>
										<option value="Chittagong">Chittagong</option>
										<option value="Faridpur">Faridpur</option>
										<option value="Madaripur">Madaripur</option>
									</select>
								<label style="margin-left:px;color:black">To:</label>
									<select  style="margin-top:px;color:#333333;"  class='form-control' id="dstn" name="dstn"placeholder="Select option">
										<option value="|">Enter City</option>
										<option value="Gopalganj">Gopalganj </option>
										<option value="Barisal">Barisal</option>
										<option value="Khulna">Khulna</option>
										<option value="Dhaka">Dhaka(via Mawa)</option>
										<option value="Dhaka">Dhaka(via Aricha)</option>
										<option value="Chittagong">Chittagong</option>
										<option value="Faridpur">Faridpur</option>
										<option value="Madaripur">Madaripur</option>
									</select>			
								<label style="margin-left:px;color:black">Date of Journey:</label>
									<input  class='form-control' type ="date" name="journey_date"  value="journey_date"/>
								<label style="margin-left:px;color:black">Coach Type(optional):</label>
									<select  style="margin-top:px;color:#333333;" id="type" class='form-control' name="type">
										<option value="all">All</option>
										<option value="normal">Normal</option>
										<option value="chair">Chair Coach</option>
										<option value="ac">AC</option>
										<option value="business">Business Class</option>
									</select>
								<h4><p style="margin-left:px;margin-top:20px;">
								<input style="width:100%" class="btn btn-success" type="submit" name="submit" id="btn" onclick='check()' value="Search Bus"></input>
								</h4>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class='container-fluid text-center' id='info'>
				<div class='row' style='margin:0;padding:0;'>
					<div class='col-lg-4'>
						<img src='icon/safe&secure.png' style='width:60px;height:60px;'/>
						<h5 style='color:#079d49'>Safe and secure payment</h5>
						<p class='text-muted' style='padding-left:10%;padding-right:10%;'>
							We support online, mobile and cash on delivery. Security is our main concern.
						</p>
					</div>
					<div class='col-lg-4'>
						<img src='icon/247.png' style='width:60px;height:60px;'/>
						<h5 style='color:#079d49'>Anytime ticket purchase</h5>
						<p class='text-muted' style='padding-left:10%;padding-right:10%;'>
							Customer can easily cancel their ticket and get the payment
						</p>
					</div>
					<div class='col-lg-4'>
						<img src='icon/cancel1.png' style='width:60px;height:60px;'/>
						<h5 style='color:#079d49'>Easy cancellation</h5>
						<p class='text-muted' style='padding-left:10%;padding-right:10%;'>
							Customer can easily cancel their ticket and get the payment.
						</p>
					</div>
				</div>
			</div>
			<div class='container-fluid' id='info'>
				<h5><p style="color:#079d49;">Available Bus Operators</h5>
				<hr style='margin-bottom:2%;margin-top:2%;'></hr>
				<!-- ModalforBusInfo -->
				<div class="modal fade" id="ModalforBusDetail" >
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
				<style>
					.col-lg-2 img{width:240px;height:200px;}
					.col-lg-2 {margin-right:3.2%;}
				</style>
				<div class='row text-center'>
					<?php 
					$query="select * from bus_info";
					$result=mysqli_query($connect,$query);
					while($row = mysqli_fetch_array($result)){
						$id = $row['id'];
						$fb_link = $row['fb_link'];
						$bus_name = $row['bus_name'];
						$image = $row['image'];
						$img_array=explode(" ", $image);
						echo "<div class='col-lg-2'>
								<a class='btn btn-link bus_detail_info' data-toggle='modal' data-target='#ModalforBusDetail' id='businfo_".$id."' style='padding:0;color:black;text-decoration:;'>
									<img src='busimages/".$img_array[0]."'>
									<p>".$bus_name."</p>
								</a>
							 </div>";
					}	 
					?>
				</div>
			</div>
			<div class='container-fluid' id='info'>
				<h5><p style="color:#079d49;">Available Bus Routes</h5>
				<hr></hr>
				<div class='row' style='margin:0;padding:0;list-style:none'>
					<div class='col-lg-3'>
						<li><img src="icon/location1.png"  style="width:25px;height:15px;margin-top:-4px;">Dhaka - Gopalganj</li>
						<li><img src="icon/location1.png"  style="width:25px;height:15px;margin-top:-4px;">Dhkaka - Khulna</li>
						<li><img src="icon/location1.png"  style="width:25px;height:15px;margin-top:-4px;">Dhaka - Barisal</li>
						<li><img src="icon/location1.png"  style="width:25px;height:15px;margin-top:-4px;">Dhaka - Pirojpur</li>
						<li><img src="icon/location1.png"  style="width:25px;height:15px;margin-top:-4px;">Gopalganj - Benapole</li>
						<li><img src="icon/location1.png"  style="width:25px;height:15px;margin-top:-4px;">Khulna - Chattagram</li>
					</div>
					<div class='col-lg-3'>
						<li><img src="icon/location1.png"  style="width:25px;height:15px;margin-top:-4px;">Dhaka - Gopalganj</li>
						<li><img src="icon/location1.png"  style="width:25px;height:15px;margin-top:-4px;">Dhkaka - Khulna</li>
						<li><img src="icon/location1.png"  style="width:25px;height:15px;margin-top:-4px;">Dhaka - Barisal</li>
						<li><img src="icon/location1.png"  style="width:25px;height:15px;margin-top:-4px;">Dhaka - Pirojpur</li>
						<li><img src="icon/location1.png"  style="width:25px;height:15px;margin-top:-4px;">Gopalganj - Benapole</li>
						<li><img src="icon/location1.png"  style="width:25px;height:15px;margin-top:-4px;">Khulna - Chattagram</li>
					</div>
					<div class='col-lg-3'>
						<li><img src="icon/location1.png"  style="width:25px;height:15px;margin-top:-4px;">Dhaka - Gopalganj</li>
						<li><img src="icon/location1.png"  style="width:25px;height:15px;margin-top:-4px;">Dhkaka - Khulna</li>
						<li><img src="icon/location1.png"  style="width:25px;height:15px;margin-top:-4px;">Dhaka - Barisal</li>
						<li><img src="icon/location1.png"  style="width:25px;height:15px;margin-top:-4px;">Dhaka - Pirojpur</li>
						<li><img src="icon/location1.png"  style="width:25px;height:15px;margin-top:-4px;">Gopalganj - Benapole</li>
						<li><img src="icon/location1.png"  style="width:25px;height:15px;margin-top:-4px;">Khulna - Chattagram</li>
					</div>
				</div>
			</div>
			<div class='container-fluid' id='info'>
				<h5><p style="margin-left:px;padding-top:-20px;color:#079d49;"><a name="payment"></a>We accept payment with</p></h5>
				<hr></hr>
				<a style="margin-left:0px;"href="https://www.facebook.com/sheba.greenline/"><img src="icon/bkash.png"  style="margin-left:px;width:80px;height:45px;"></a>
				<a href="https://www.facebook.com/Tungipara-Express-1741667562730267/" style="margin-left:10px"><img src="icon/roket.png" style="margin-left:px;width:80px;height:45px;"></a>
				<a href="https://www.facebook.com/karimgroup.goldenline/" style="margin-left:15px"><img src="icon/SureCash.png" style="margin-left:px;width:80px;height:45px;"></a>
			</div>
		</div>
		<?php include "footer.php";?>
	</body>
</html>