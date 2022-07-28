<?php

$db = mysqli_connect('fdb32.awardspace.net', '4133231_forex', 'qKGgqqz)4d-i0!^w', '4133231_forex') or die("Couldn't connect to the database");

if (isset($_POST['register'])) {
	$firstName = mysqli_escape_string($db, $_POST['firstname']);
	$lastName = mysqli_escape_string($db, $_POST['lastname']);
	$email = mysqli_escape_string($db, $_POST['email']);
	$phone = mysqli_escape_string($db, $_POST['phone']);
	$password = mysqli_escape_string($db, $_POST['password']);
	$password2 = mysqli_escape_string($db, $_POST['password1']);
	$checkbox = $_POST['checkboxfill'];
	$account_id = strtoupper(uniqid('Account'));

	//Check for errors

	if ($password != $password2) {
		header("Location: ../register.php?error=Passwords do not match");
	}else if(strlen($password) < 6){
		header("Location: ../register.php?error=Password is less than 6 characters");
	}else{
		//Generate Verification Key
		
		$vkey = md5(time() . $email);

		//Check if the email is registered
		$query = "SELECT * FROM `clients` WHERE email = '$email'";
		$result = mysqli_query($db, $query);

		if (mysqli_num_rows($result) > 0) {

			header("Location: ../register.php?error=Email already registered");

		}else{
			$pass = md5($password);
			$date = date("Y-m-d H:i:s");
			$insert = "INSERT INTO `clients`(`accountID`, `firstName`, `lastName`, `email`, `phone`, `password`, `vKey`,`createdAt`) VALUES ('$account_id','$firstName','$lastName','$email','$phone','$pass','$vkey', '$date')";

			if (mysqli_query($db, $insert)) {
				header("Location: ../email_verify.php?email=$email");
			}else{
				header("Location: ../register.php?error=An error occured. Please try");
			}

		}

	}

	


}else{
	header('Location: ../register.php');
}


?>
