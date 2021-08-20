  <?php 
	include 'conn.php';

$username = "";
$password    = "";
if (isset($_POST['login'])) 
		{ 
		$username = $_POST['username'];
		$password = $_POST['password'];		
		
		$query = "SELECT * FROM administrator WHERE username='$username' AND password='$password'";
		$query1 = "SELECT * FROM manager WHERE username='$username' AND password='$password'";
		

		
		$results = mysqli_query($link, $query);
		$results1 = mysqli_query($link, $query1);
		

		$count = mysqli_num_rows($results);
		$count1 = mysqli_num_rows($results1);
		

		if ($count == 1) { 
				$_SESSION['username']=$username;
				
				header('location: administrator/employee.php');
			}
		else if ($count1 == 1) { 
				$_SESSION['username']=$username;
				
				header('location: admin/home.php');
			}			else {
					?>	<script>
                           alert('incorrect user name and password');
                              
                        </script>
				<?php
		}
}

?>