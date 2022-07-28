<?php
session_start();

$db = mysqli_connect('fdb32.awardspace.net', '4133231_forex', 'qKGgqqz)4d-i0!^w', '4133231_forex') or die("Couldn't connect to the database");

if (isset($_POST['update'])) {
	$metatrader = mysqli_escape_string($db, $_POST['metatrader']);
	$server = mysqli_escape_string($db, $_POST['server']);
	$login = mysqli_escape_string($db, $_POST['loginid']);
	$password1 = mysqli_escape_string($db, $_POST['password']);
	$currentPassword = mysqli_escape_string($db, $_POST['current-password']);

	if(empty($login) OR empty($server) OR empty($password1)){
		header("Location: ../edit_profile.php?error=Invalid Data");
	}else{
		//Check if its the owner
		$email = $_SESSION['email'];
		$search = "SELECT * FROM `clients` WHERE email = '$email'";
		$result = mysqli_query($db, $search);

		if (mysqli_num_rows($result) > 0) {
			$user = mysqli_fetch_assoc($result);

			$hashedPassword = md5($currentPassword);

			if ($user['password'] != $hashedPassword) {
				header("Location: ../edit_profile.php?error=Incorrect Password");
			}else{
				$accountID = $_SESSION['accountID'];

				$insert = "UPDATE `details` SET `metatrader`='$metatrader',`server`='$server',`loginID`='$login',`password`='$password1' WHERE accountID = '$accountID'";

				if (mysqli_query($db, $insert)) {
					header("Location: ../home.php?success=Details updated succesfully!");
				}else{
					header("Location: ../edit_profile.php?error=Something went wrong.Please try again");
				}
			}
		}

	}

}else{
	header("Location: ../home.php");
}


?>
