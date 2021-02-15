<?php
	require_once 'config/koneksi.php';
	
	if(ISSET($_POST['save'])){
		try{
			$firstname = $_POST['firstname'];
			$lastname = $_POST['lastname'];
			$address = $_POST['address'];
			$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "INSERT INTO `member` (`firstname`, `lastname`, `address`) VALUES ('$firstname', '$lastname', '$address')";
			$db->exec($sql);
		}catch(PDOException $e){
			echo $e->getMessage();
		}
		
		$conn = null;
		header('location:index.php');
	}
?>