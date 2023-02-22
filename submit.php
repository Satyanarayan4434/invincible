<?php 
	// echo "<pre>";print_r($_POST);die;
	$con=mysqli_connect("localhost","root","","invinsible");
	if(isset($_POST['submit'])):
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone_no = $_POST['phone_no'];
		$address = $_POST['address'];
		$query = "INSERT INTO donate_page VALUES('', '$name', '$email', '$phone_no', '$address');";
        $exec = mysqli_query($con, $query);
		echo $exec;die;
		header('Location:index.html');
	else:
		header('Location:donate_page.html');
	endif;
?>