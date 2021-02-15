<?php
	require_once 'config/koneksi.php';
	
	if(ISSET($_POST['update'])){
		try{
			$id = $_GET['id'];
			$firstname = $_POST['firstname'];
			$lastname = $_POST['lastname'];
			$address = $_POST['address'];
			$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			$sql = "UPDATE `member`SET `firstname` = '$firstname', `lastname` = '$lastname', `address` = '$address' WHERE `mem_id` = '$id'";
			$db->exec($sql);
		}catch(PDOException $e){
			echo $e->getMessage();
		}
		
		$db = null;
		header('location:index.php');
	}
?>