<!DOCTYPE html>
<?php $conn = mysqli_connect('localhost', 'root', '', 'c_tune'); ?>
<html>

<head>
	<title>c_tune </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="static/css/bootstrap.min.css">
	<link rel="stylesheet" href="static/css/bootstrap-rtl.css">
	<link rel="stylesheet" href="static/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="static/css/main.css">
	<script src="./static/js/jquery.js"></script>
	<!--ather place -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-rtl.css">
	<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/main.css">
	<script src="js/jquery.js"></script>


</head>
<style>
	body {


		background-image: url(img/1.jpg);
		background-repeat: no-repeat;
		background-size: 100% 100%;
		background-attachment: fixed;
		
	}


	nav {
		background: #fff;
		height: 80vh;

		height: 10vh;
		display: flex;

	}

	

	.btn:hover{
		
		transform: scale(1.5);
            background:  #ffe9c0;
         
        }
	

	

	.btn {
		margin: 20px;

		color: white;
		
		background: #ef7d00;
		/* ffe9c0   ef7d00  */
		padding: 6px 15px;
		border-radius: 20px;

		
	}

	
</style>

<body>
	
	<nav class="navbar ">
  <div class="container-fluid">
 
    <form class="d-flex">
		
	<button class="btn btn-outline" type="submit"><a href="signup.php" style="color: #fff;width: 300px; height: 60px;">regester </a>
	</button>
      <button class="btn btn-outline" type="submit"><a href="signin.php" style="color: #fff;width: 300px; height: 60px;">login </a>
	</button>
    </form>
	 <img src="img/logo.png" style="width: 130px;height:80px;text-align:left" alt="">
  </div>
</nav>


		<?php
		if (isset($_POST['signup'])) {
			echo "<script>window.open('signup.php','_self')</script>";
		}
		?>

		<?php
		if (isset($_POST['login'])) {
			echo "<script>window.open('signin.php','_self')</script>";
		}

		?>
	<div class="card text-center" style="margin-right: 150px; margin-left:150px;margin-top:50px;">
		<div class="card-header">
			Featured
		</div>
		<div class="card-body">
			<h5 class="card-title">Special title treatment</h5>
			<img src="img/2.jpg" class="card-img-top" alt="..."style="width: 100px;height:100px" >
			<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
			<a href="buy.php" class="btn btn-primary">Go somewhere</a>
		</div>
		<div class="card-footer text-muted">
			2 days ago
		</div>
		</div>


		<div class="card text-center" style="margin-right: 150px; margin-left:150px;margin-top:50px;">
			<div class="card-header">
				Featured
			</div>
			<div class="card-body">
				<h5 class="card-title">Special title treatment</h5>
				<img src="img/2.jpg" class="card-img-top" alt="..." style="width: 100px;height:100px">
				<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
				<a href="buy.php" class="btn btn-primary">Go somewhere</a>
			</div>
			<div class="card-footer text-muted">
				2 days ago
			</div>
		</div>
	</div>
	</div>