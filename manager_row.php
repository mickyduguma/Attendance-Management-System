<?php 
	include 'includes/session.php';

	if(isset($_POST['id'])){
		$id = $_POST['id'];
		$sql = "SELECT *, manager.id as manid FROM manager LEFT JOIN position ON position.id=manager.position_id LEFT JOIN schedules ON schedules.id=manager.schedule_id WHERE manager.id = '$id'";
		$query = $conn->query($sql);
		$row = $query->fetch_assoc();

		echo json_encode($row);
	}
?>