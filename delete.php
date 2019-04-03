<?php
	$conn = mysqli_connect('localhost', 'root', 'dbms', 'webapp2projec');
		if (!$conn){
		    die("Database Connection Failed" . mysqli_error($conn));
		}

	$bid = $_GET['bid'];
	
	$sql = "DELETE FROM attendanceform WHERE bid = $bid";
	$result = mysqli_query($conn, $sql);
	print_r($result);
		if($result) {
			header('location: staff.php');
		} else{
			$_SESSION['message'] = "TRY AGAIN!";
		}
?>