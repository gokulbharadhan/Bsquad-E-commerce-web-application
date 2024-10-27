<?php

include '../../config.php';

$admin = new Admin();


if(isset($_POST['login'])){

	$username = $_POST['username'];

	$password = $_POST['password'];

	$query=$admin->ret("SELECT * FROM `wholesaler` WHERE `username`='$username' AND `password`='$password' ");


//couting row
	$num=$query->rowCount();

	if($num>0){
		$row=$query->fetch(PDO::FETCH_ASSOC);

		$id =$row['wholesaler_id'];
		$_SESSION['wholesaler_id']=$id; //used to uniquely identify user session. use this in user pages

		echo "<script>alert('login successful'); window.location.href='../wholesaler_index.php';</script>";

	}


	else
	{
		echo "<script>alert('wrong username or password..!'); window.location.href='../wholesaler_index.php';</script>";
	}
	
}

?>


<?php
//Registration
if(isset($_POST['register'])){


	$username = $_POST['username'];

	$password = $_POST['password'];

	$bname = $_POST['bname'];

    $phone = $_POST['phone'];

	$address = $_POST['address'];

	$email = $_POST['email'];

	$location = $_POST['location'];

	$wholesaler_status ='pending';
	
	//---image
	$imagetargetfolder ='../uploads/';  // folder to store images
	$imagename=$imagetargetfolder.basename($_FILES["image"]["name"]); //['image'] is HTML name=""
	move_uploaded_file($_FILES["image"]["tmp_name"],$imagename); 
	
	$query=$admin->cud("INSERT INTO `wholesaler` (`username`,`password`,`bname`,`phone`,`address`,`email`,`location`,`wholesaler_status`,`wholesaler_photo`) VALUES('$username','$password','$bname','$phone','$address','$email','$location','$wholesaler_status','$imagename')","saved");
	
	echo "<script>alert('registration successful'); window.location.href='../wholesaler_index.php';</script>";
	}
	
	
	

?>
