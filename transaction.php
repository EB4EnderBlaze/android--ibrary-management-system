<?php
	//In this code we demonstrate insertion of data
	//Declare the variables
	$servername = "localhost";
	$username = "root";
	$password = "password";
	$database = "library";
    $currentDateTime = date('Y-m-d');
    //echo $currentDateTime;
	//Connect
	$conn = mysqli_connect($servername, $username, $password, $database);
	if(!$conn){
		die("connection_failed: ".mysqli_connect_error());
	}
	else{
		echo "Database connected sucessfully";
		echo "<br>";
	}
	$sql = "insert into transaction_status(trans_id, book_id, customer_id, branch_id, issue, trans_date) values ('".$_POST["transID"]."', '".$_POST["bookID"]."', '".$_POST["custID"]."', '".$_POST["branchID"]."', '".$_POST["transtype"]."', '".$currentDateTime."')";
	if(mysqli_query($conn, $sql)){
    	echo "New record created successfully";
    	include 'homepage.html';
	}else{
    	echo "Error: " . $sql . "<br>" . 	mysqli_error($conn);
	}
	mysqli_close($conn);
?>