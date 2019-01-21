<?php
$error=''; //Variable to Store error message;
$disabled='disabled';
$disabled1='';
if(isset($_POST['submit']))
{
	 if(empty($_POST['trnx_id']))
	 {
		$error = "Please enter the transaction id";
	 }
	 else
	 {
		 //Define $user and $pass
		 $trnx_id=$_POST['trnx_id'];
		 //Establishing Connection with server by passing server_name, user_id and pass as a patameter
		 $conn = mysqli_connect("localhost", "root", "");
		 //Selecting Database
		 $db = mysqli_select_db($conn, "bus_service");
		 //sql query to fetch information of registerd user and finds user match.
		 $query = mysqli_query($conn, "SELECT * FROM seat_reservation WHERE trnx_id='$trnx_id'");
		 $rows = mysqli_num_rows($query);
		 if($rows == 1)
		 {
			$error = "Thank you, your payment has been confirmed. Now click on <label class='btn-sm btn-primary'>Ticket</label> button for your ticket.";
			$disabled='';
			$disabled1='disabled';
			//header("Location:ticket.php"); // Redirecting to other page
		 }
		 else
		 {
			$error = "Transaction id does not match.";
			$disabled='disabled';
			$disabled1='';
		 }
		 mysqli_close($conn); // Closing connection
	 }
}
?>