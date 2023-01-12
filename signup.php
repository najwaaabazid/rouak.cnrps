<!DOCTYPE html>
<html>

<head>
	<title>Signup c_tune</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<style>
	nav {
		background: #fff;
		height: 80vh;

		height: 10vh;
		display: flex;

	}
	* {
		margin: 0;
		padding: 0;

	}

	body {
		color: #ef7d00;

		background: #ffe9c0;
		height: 80vh;
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
		
		background: #fff;
		width: 800px;

		list-style: none;
		margin: 10px 10px;
		padding: 10px;
	}

	a {
		color: white;
		text-decoration: none;
		font-size: 30px;
		font-weight: 500;
		background:#ef7d00 ;
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
		background:#ffe9c0;
		opacity: 1;
	}
</style>

<body>
<nav class="navbar ">
  <div class="container-fluid">
	 <img src="img/logo.png" style="width: 130px;height:80px;text-align:left" alt="">
  </div>
</nav>

	<section>
		<form action="" method="post">
			<ul>
				<li>
				<label > prénom </label> <br>	
                <input type="text" class="form-control" placeholder="prénom " name="f_name" required="required">
					
				</li>
				<li>
				<label >nom</label> <br>	
                <input type="text"class="form-control" placeholder="nom" name="l_name" required="required">
					
				</li>
               
				<li>
                <label >mot de passe </label>
                <input class="form-control"  id="password" type="password" placeholder="mot de passe" name="pass" required="required">
					
				</li>
                <li>
                <label >confirmer mot de passe </label>
                <input class="form-control"  id="password" type="password" placeholder="confirmer mot de passe" name="rpass" required="required">
					
				</li>
				<li>
                <label >email</label> <br>
                <input class="form-control"  id="email" type="email" placeholder="email " name="email" required="required">
				 
				</li>

				
			

				
				<li>
				<a href="signin.php"><button id="signup" class="btn btn-info btn-lg" name="sign_up">s'inscrire  </button></a>
				</li>
			</ul>
			<?php include("insert_user.php"); ?>
		</form>
	</section>

</body>

</html>