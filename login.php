<?php


$conn = mysqli_connect("localhost", "root", "", "c_tune");

// إستقبال البيانات

if (isset($_POST['login'])) {

	$email = htmlentities(mysqli_real_escape_string($conn, $_POST['email']));
	$pass = htmlentities(mysqli_real_escape_string($conn, $_POST['pass']));

	$select_user = "SELECT * from users where email='".$_POST['email']."'
	 AND  pass='".$_POST['pass']."'";

	$result = mysqli_query($conn, $select_user);
	if(mysqli_fetch_assoc($result)){
		$_SESSION['user']=$_POST['email'];
         header("location:accueille.php");
	} else {
		echo "<script>alert('Your Email or Password is incorrect')</script>";
	}
}