<?php
$conn = mysqli_connect("localhost", "root", "", "c_tune");

if(isset($_POST['sign_up'])){

	$f_name = htmlentities(mysqli_real_escape_string($conn,$_POST['f_name']));
	$l_name = htmlentities(mysqli_real_escape_string($conn,$_POST['l_name']));
	$pass = htmlentities(mysqli_real_escape_string($conn,$_POST['pass']));
	$rpass= htmlentities(mysqli_real_escape_string($conn,$_POST['rpass']));
	$email = htmlentities(mysqli_real_escape_string($conn,$_POST['email']));
	

	if(strlen($pass) <9 ){
		echo"<script>alert(' Le mot de passe ne doit pas contenir moins de 9 caractères')</script>";
		exit();
	}
	
	$run_email = mysqli_query($conn,"select * from users where email='$email'");
	

	$check = mysqli_num_rows($run_email);

	if($check == 1){
		echo "<script>alert('Cet e-mail est actuellement utilisé')</script>";
		echo "<script>window.open('signup.php', '_self')</script>";
		exit();
	}	
			

	
			$insert = "INSERT into users (f_name,l_name,pass,rpass,email)values('$f_name','$l_name','$pass','$rpass',
            '$email')";
			
			$query = mysqli_query($conn, $insert);
	if($query){
		echo "<script>alert('Bien fait $f_name, ')</script>";
		echo "<script>window.open('signin.php', '_self')</script>";

	}
	

	 else{
		echo "<script>alert('Échec de l'inscription!')</script>";
		echo "<script>window.open('signin.php', '_self')</script>";
	} 
}
?>