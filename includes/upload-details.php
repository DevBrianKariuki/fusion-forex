<?php
session_start();

$db = mysqli_connect('fdb32.awardspace.net', '4133231_forex', 'qKGgqqz)4d-i0!^w', '4133231_forex') or die("Couldn't connect to the database");

if (isset($_POST['upload'])) {
	$metatrader = mysqli_escape_string($db, $_POST['metatrader']);
	$server = mysqli_escape_string($db, $_POST['server']);
	$login = mysqli_escape_string($db, $_POST['loginid']);
	$password1 = mysqli_escape_string($db, $_POST['password']);
	$password2 = mysqli_escape_string($db, $_POST['confirm-password']);

	if ($password1 != $password2) {
		header("Location: ../create_profile.php?error=Passwords do not match");
	}else if(empty($login) OR empty($server) OR empty($password1) OR empty($password2)){
		header("Location: ../create_profile.php?error=Invalid Data");
	}else{
		$accountID = $_SESSION['accountID'];
		$email = $_SESSION['email'];

		$insert = "INSERT INTO `details`(`accountID`, `email`, `metatrader`, `server`, `loginID`, `password`) VALUES ('$accountID','$email','$metatrader','$server','$login','$password1')";

		if (mysqli_query($db, $insert)) {
			header("Location: ../id_upload.php>success=Success!Details uploaded succesfully");
		}else{
			header("Location: ../create_profile.php?error=Something went wrong.Please try again");
		}

	}

}else{
	header("Location: ../create_profile.php");
}


?>
