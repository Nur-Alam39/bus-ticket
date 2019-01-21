<html>
	<head>
		<link rel="stylesheet" href="style.css" media="all" />
		<link rel="stylesheet" href="animate.css" media="all" />
		<script src="jquery.js" type="text/javascript"></script>
		<script src="viewportchecker.js" type="text/javascript"></script>
		<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css"/>
		<link rel="stylesheet" href="bootstrap4/css/bootstrap.css"/>
		<script src="bootstrap4/js/bootstrap.js" type="text/javascript"></script>
	</head>
</html>
<?php
$connect=mysqli_connect("localhost","root","","bus_service");
$busid = $_POST['busid'];
$sql = "select * from bus_info where id=$busid";
$result = mysqli_query($connect,$sql);
$response = "<div>";
while( $row = mysqli_fetch_array($result) ){
	 $Id = $row['id'];
	 $bus_name = $row['bus_name'];
	 $company = $row['company'];
	 $no_bus = $row['no_bus'];
	 $routes = $row['routes'];
	 $image = $row['image'];
	 $img_array=explode(" ", $image);
	$response .="
	<h5 class='card-title'>".$bus_name."</h5>
	<div id='demo' class='carousel slide' data-ride='carousel'>
	  <!-- Indicators -->
	  <ul class='carousel-indicators'>
		<li data-target='#demo' data-slide-to='0' class='active'></li>
		<li data-target='#demo' data-slide-to='1'></li>
		<li data-target='#demo' data-slide-to='2'></li>
	  </ul>
	  
	  <!-- The slideshow -->
	  <div class='carousel-inner'>
		<div class='carousel-item active'>
		  <img src='busimages/".$img_array[0]."'  width='100%' height='400px'>
		</div>
		<div class='carousel-item'>
		  <img src='busimages/".$img_array[1]."'  width='100%' height='400px'>
		</div>
		<div class='carousel-item'>
		  <img src='busimages/".$img_array[2]."' width='100%' height='400px'>
		</div>
	  </div>
	  
	  <!-- Left and right controls -->
	  <a class='carousel-control-prev' href='#demo' data-slide='prev'>
		<span class='carousel-control-prev-icon'></span>
	  </a>
	  <a class='carousel-control-next' href='#demo' data-slide='next'>
		<span class='carousel-control-next-icon'></span>
	  </a>
	</div>
	<div class='container' id='bus_info_modal'>
				  <div class='card-body'>
					<!--<img class='card-img-top' src='busimages/".$img_array[0]."' alt='' style='width:;height:;'>-->
					<small class='text-muted'>Company: ".$company."</small></label></label>
					<label class='card-text'><small class='text-muted'>Number of bues: ".$no_bus."</small></label>
					<p class='card-text' style='margin-top:2%'>Routes: ".$routes."</p>
					<a href='#' class='fa fa-twitter'></a>
					<a href='#' class='fa fa-facebook'></a>
					<a href='#' class='fa fa-linkedin'></a>
				  </div>
				</div>";
 
	 
}
$response .= "</div>";

echo $response;
exit;

