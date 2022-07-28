<?php
session_start();

$db = mysqli_connect('fdb32.awardspace.net', '4133231_forex', 'qKGgqqz)4d-i0!^w', '4133231_forex') or die("Couldn't connect to the database");

if (isset($_POST['upload']) AND isset($_FILES['front']) AND isset($_FILES['back'])) {
	

	//ID Front
	$front_name = $_FILES['front']['name'];
	$front_size = $_FILES['front']['size'];
	$front_tmp_name = $_FILES['front']['tmp_name'];
	$error = $_FILES['front']['error'];

	//ID Back
	$back_name = $_FILES['back']['name'];
	$back_size = $_FILES['back']['size'];
	$back_tmp_name = $_FILES['back']['tmp_name'];
	$errors = $_FILES['back']['error'];

	if (($error === 0) AND ($errors === 0)) {

		$allowed_ex = array('jpg', 'jpeg', 'png');
		//Front
		$front_ex = pathinfo($front_name, PATHINFO_EXTENSION);
		$front_ex_lc = strtolower($front_ex);

		//Back
		$back_ex = pathinfo($back_name, PATHINFO_EXTENSION);
		$back_ex_lc = strtolower($back_ex);


		if (in_array($front_ex_lc, $allowed_ex) AND in_array($back_ex_lc, $allowed_ex)) {
			$account_ID = $_SESSION['accountID'];
			// MAKE A FOLDER
			$folder = mkdir('../accounts/' . $account_ID);
			//Front
			$front_image_name = strtoupper($account_ID).'-FRONT.'.$front_ex_lc;
			$front_upload_path = '../accounts/IDS/'. $folder .$front_image_name;
			move_uploaded_file($front_tmp_name, $front_upload_path);

			//Back
			$back_image_name = strtoupper($account_ID) .'-BACK.'. $back_ex_lc;
			$back_upload_path = '../accounts/IDS/' . $folder . $back_image_name;
			move_uploaded_file($back_tmp_name, $back_upload_path);

			$insert = "INSERT INTO `ids_table`(`accountID`, `IDfront`, `IDback`) VALUES ('$account_ID','$front_image_name','$back_image_name')";
			mysqli_query($db, $insert);

			$update = "UPDATE `clients` SET `uploadedId`=1 WHERE accountID='$account_ID'";


			if (mysqli_query($db, $update)) {
				header("Location: ../home.php?success=Success! ID documents uploaded succesfully");
			}else{
				header("Location: ../id_upload.php?error=Something went wrong");
			}


		}else{
			header("Location: ../id_upload.php?error=Invalid File format");
		}



	}else{
		header("Location: ../id_upload.php?error=An error occured.Please try again");
	}




}else{
	header("Location: ../id_upload.php");
}


?>
