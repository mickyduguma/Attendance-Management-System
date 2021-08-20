<?php
  session_start();
  if(isset($_SESSION['username'])){
    header('location:home.php');
	}
	header('location:../sign.php');
?>