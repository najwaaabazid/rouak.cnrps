<!DOCTYPE html>
<html>

<head>
	<title>Signin_c_tune</title>
	<meta charset="utf-8">

</head>
<style>
	body {
		background: #ffe9c0;
		height: 80vh;
		}
	nav {
		background: #fff;
		height: 10vh;
	    display: flex;
	}

	section {

		height: 80vh;
		display: flex;
		justify-content: center;
		font-size: large;
		font-weight: 400;
	}

	ul {
		text-align: center;
	}

	ul li {
		width: 800px;
		list-style: none;
		margin: 10px 10px;
		padding: 10px;
	}

	a {
		text-decoration: none;
		font-size: 20px;
		font-weight: 500;
		background: #ef7d00;
		padding: 6px 6px;
		border-radius: 20px;
		display: inline-block;
		width: 200px;
		transition: 1s;
		position: relative;
		z-index: 10;
	}

	ul li :hover {
		transform: scale(1.5);
		background: #ef7d00;
		opacity: 1;
	}

	.email {
		width: 40%;
		border-bottom: 1px solid #ef7d00;
		padding: 10px;
		border-radius: 20px;
	}

	.botn {
		width: 40%;
		padding: 7px;
		border-radius: 20px;
	}
</style>
<body>
	<nav class="navbar ">
		<a href="accueille.php" style="background-color: #fff; width: 900px; color:#ef7d00;">accueille</a>
		<img src="img/logo.png" style="width: 130px;height:80px;text-align:left" alt="">
	</nav>
	<section>
		<form class="form" action="" method="post">
			<ul>
				<li>
					<input style="margin-top:200px;" class="email" type="email" name="email" placeholder="Email" required="required" class="form-control input-md"><br>
				</li>
				<li>
					<input class="email" type="password" name="pass" placeholder="Password" required="required" class="form-control input-md"><br>
				</li>
				<li>
					<a href="home.php"><button class="botn" id="signin" class="btn btn-info btn-lg" name="login">se connecter </button></a>
				</li>
			</ul>
			<?php include("login.php"); ?>
		</form>
	</section>
</body>

</html>