<?php
session_start();
$db = mysqli_connect('localhost', 'root', '', 'forex') or die("Couldn't connect to the database");

if (isset($_POST['login'])) {
	//Get Users input
	$email = mysqli_escape_string($db, $_POST['email']);
	$password = mysqli_escape_string($db, $_POST['password']);

	$hashedPassword = md5($password);
	//echo $password;
	echo $password;
	echo $hashedPassword;
	echo $email;

	//Check if email exists
	$search = "SELECT * FROM `clients` WHERE email = '$email'";
	$result = mysqli_query($db, $search);

	if (mysqli_num_rows($result) > 0) {
		
		//Check if passwords match
		$user = mysqli_fetch_assoc($result);
		//Check if the user is verified
        if ($hashedPassword === $user['password']) {

        	if ($user['verified'] === '1') {

        		$_SESSION['accountID'] = $user['accountID'];
        		$_SESSION['email'] = $user['email'];
        		$_SESSION['firstName'] = $user['firstName'];
        		$_SESSION['lastName'] = $user['lastName'];
        		$_SESSION['phone'] = $user['phone'];
        		$_SESSION['uploadedId'] = $user['uploadedId'];
        		$_SESSION['login-time'] = date("Y-m-d h:i:s");
        		$_SESSION['IP'] = $_SERVER['REMOTE_ADDR'];

        		if ($user['uploadedId'] === '0') {
        			header("Location: ../create_profile.php");
        		}else{
        			header("Location: ../home.php");
        		}

        		
        	}else{
        		header("Location: ../login.php?error=You account has not been verified");
        	}

        }else{
        	header("Location: ../login.php?error=Incorrect email or password");
        }

	}else{
        	header("Location: ../login.php?error=Email is not registered");
	}


}else{
        header('Location: ../login.php');
}

?>