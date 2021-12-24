<?php
	$Name = $_POST['Name'];
	$Age = $_POST['Age'];
	$Gender = $_POST['Gender'];
	$Id = $_POST['Unique health Id'];
    $One = $_POST['1st Dose of vaccination']
    $Two = $_POST['2st Dose of vaccination']
	// Database connection
	$conn = new mysqli('localhost','root','','pcpf');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into information(Name, Email, Subject, Message) values(?, ?, ?, ?)");
		$stmt->bind_param("ssss", $Name,$Email,$Subject,$Message);
		$stmt->execute();
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>