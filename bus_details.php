<!DOCTYPE>
<?php
	mysql_connect('localhost','root','');
	mysql_select_db('bus_service');
	$sql="SELECT *
		FROM `bus_info`
		WHERE `id` =1
		AND `bus_name` IS NOT NULL
		AND `company` IS NOT NULL
		AND `no_bus` IS NOT NULL
		AND `routes` IS NOT NULL
		LIMIT 0 , 30";
	$records=mysql_query($sql);
?>
<html>
	<head>
		<title>Gopalganj Bus Services</title>
		<link rel="icon" href="icon/bus_logo.jpg" />
		<style></style>
		<link rel = "stylesheet" type = "text/css"href = "style.css"/>
	</head>
	<body>
		<div id="bus_details">
			<p style="padding-top:2%;color:green;text-align:center;font-size:20px;">Green Line Paribahan</p>
			<div id="bus_image">
				<img src="busimages/greenline.jpg" style="width:400px;height:300px;">
			</div>
			<div id="bus_info">
				<?php
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
	</body>
</html>