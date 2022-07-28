<?php
session_start();

$db = mysqli_connect('fdb32.awardspace.net', '4133231_forex', 'qKGgqqz)4d-i0!^w', '4133231_forex') or die("Couldn't connect to the database");

if (isset($_GET['vkey'])) {
	//Process Verification
	$vkey = $_GET['vkey'];

	$search = "SELECT * FROM `clients` WHERE vKey = '$vkey'";
	$result = mysqli_query($db, $search);

	if (mysqli_num_rows($result) > 0) {
		$user = mysqli_fetch_assoc($result);
		echo $user['verified'];

		if ($user['verified'] === '1') {
			header("Location: ../login.php?message=Your account is already verified.Please login");
		}else{
			$update = "UPDATE `clients` SET `verified`=1 WHERE vKey='$vkey'";
			if (mysqli_query($db, $update)) {
				header("Location: ../verified_login.php");
			}else{
				header("Location: ../login.php?message=An error occured.Please try again");
			}
		}

	}else{
		header("Location: ../register.php?message=The verification key is invalid.Please request a new one");
	}

}else{
	header("Location: ../login.php");
}


?>
