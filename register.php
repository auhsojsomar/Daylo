<?php

if (isset($_POST['Submit_btn'])) {
	
include_once 'database.php';

$first = mysqli_real_escape_string($conn, $_POST['first']);
$last = mysqli_real_escape_string($conn, $_POST['last']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$username = mysqli_real_escape_string($conn, $_POST['username']);
$pass = mysqli_real_escape_string($conn, $_POST['pass']);

		if (!filter_var($email, FILTER_VALIDATE_EMAIL )) {
			header("Location: ../register.php?register=email");
			exit();
		} else {
			$sql = "SELECT * FROM users WHERE email = '$email'";
			$result = mysqli_query($conn, $sql);
			$resultCheck = mysqli_num_rows($result);

			if ($resultCheck > 0) {
			header("Location: ../register.php?register=emailalreadyexist");
			exit();
				# code...
			}else {
				$hashedPwd = password_hash ($pass, PASSWORD_DEFAULT);
				$sql = "INSERT INTO users (fname, lname, email, username, pwd) VALUES ('$first','$last','$email','$username','$pass');";
				mysqli_query($conn, $sql);
				header("Location: ../lnf?registerSucess");
				exit();
			}
			}
} else {
	header("Location: ../index.php");
	exit();
}