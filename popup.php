<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
	height:400px;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
</style>
</head>
<body>
<center><button id="myBtn">View Details</button></center>
<div id="myModal" class="modal">
  <div class="modal-content">
    <div id="bus_details">
		<span class="close">&times;</span>
		<p style="padding-top:2%;color:green;text-align:center;font-size:20px;">Green Line Paribahan</p>
		<div id="bus_image">
			<img src="busimages/greenline.jpg" style="width:300px;height:200px;">
		</div>
		<div id="bus_info">
			<?php
				
				mysql_connect('localhost','root','');
				mysql_select_db('bus_service');
				$sql="SELECT *FROM `bus_info`WHERE `id` =1";
				$records=mysql_query($sql);

				while($data=mysql_fetch_assoc($records))
				{
					echo "Bus Name : ".$data['bus_name']."<br>";
					echo "Company Name : ".$data['company']."<br>";
					echo "Number of buses : ".$data['no_bus']."<br>";
					echo "Routes : ".$data['routes']."<br>";
				}
			?>
		</div>
    </div>
  </div>
</div>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>
