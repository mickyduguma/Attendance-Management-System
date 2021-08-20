<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$empid = $_POST['id'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$address = $_POST['address'];
		$birthdate = $_POST['birthdate'];
		$contact = $_POST['contact'];
		$gender = $_POST['gender'];

		
		$sql = "UPDATE manager SET firstname = '$firstname', lastname = '$lastname', contact_info = '$contact', gender = '$gender' WHERE id = '$empid'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Manager updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Select Manager to edit first';
	}

	header('location: employee.php');
?>