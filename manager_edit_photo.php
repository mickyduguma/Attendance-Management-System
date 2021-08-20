<?php
	include 'includes/session.php';

	if(isset($_POST['upload'])){
		$manid = $_POST['id'];
		$filename = $_FILES['photo']['name'];
		if(!empty($filename)){
			move_uploaded_file($_FILES['photo']['tmp_name'], '../images/'.$filename);	
		}
		
		$sql = "UPDATE manager SET photo = '$filename' WHERE id = '$manid'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'manager photo updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Select manager to update photo first';
	}

	header('location: manager.php');
?>