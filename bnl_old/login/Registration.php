
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSS File from Iconscout -->
	<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

	<link rel="stylesheet" type="text/css" href="Login_Style.css">

	<title> Login & SignUp </title>
</head>
<body>
	
	<div class="container">
		<div class="forms">
			<div class="form login">
				<span class="title"> Login </span>
				<form action="signin.php" method="post" >
					<div class="input-field">
						<input type="text" placeholder="Enter your email"  name ="email" required>
						<i class="uil uil-envelope icon"></i>
					</div>
					<div class="input-field">
						<input type="password" class="password" placeholder="Enter your password" name ="password"  required>
						<i class="uil uil-lock icon"></i>
						<i class="uil uil-eye-slash showHidePw"></i>
					</div>

					<div class="checkbox-text">
						<div class="checkbox-content">
							<input type="checkbox" id="logCheck">
							<label for="logCheck" class="text">Remember me</label>
						</div>

						<a href="#" class="text">Forget password?</a>
					</div>

					<div class="input-field button">
						<a href="index.html"><input type="submit" name = "logged" value="Login Now"></a>	
					</div>

				</form>

				<div class="login-signup">
					<span class="text"> Not a member?
						<a href="#" class="text signup-link">Signup now</a>
					</span>
				</div>
			</div>


			<!-- Signup Form -->
			<div class="form signup">
				<span class="title"> Registration </span>
				<form action="register.php" method="post">


					<div class="input-field">
						<input type="text" placeholder="Enter your name" name = "name" required>
						<i class="uil uil-user"></i>
					</div>

	<div class="radio-text">
						<div class="radio-content">
							<input type="radio" id="director" name="fav_language" value="HTML">
							<label for="director">Director</label><br>
							<input type="radio" id="promoter" name="fav_language" value="CSS">
							<label for="promoter">Promoter</label><br>
						</div>
					</div>     
					
				
					
					<div class="input-field">
						<input type="text" placeholder="Enter your email" name ="email" required>
						<i class="uil uil-envelope icon"></i>
					</div>
					<div class="input-field">
						<input type="password" class="password" placeholder="Create a password" name ="password" required>
						<i class="uil uil-lock icon"></i>
					</div>
					<div class="input-field">
						<input type="password" class="password" placeholder="Confirm a password" name ="cnf" required>
						<i class="uil uil-lock icon"></i>
						<i class="uil uil-eye-slash showHidePw"></i>
					</div>

					<div class="checkbox-text">
						<div class="checkbox-content">
							<input type="checkbox" id="logCheck">
							<label for="sigCheck" class="text">Remember me</label>
						</div>

						
						<a href="#" class="text">Forget password?</a>
						
					</div>

					<div class="input-field button">
						<input type="submit"  name ="create" value="SignUp Now">	
					</div>

				</form>

				<div class="login-signup">
					<span class="text"> Already have a account?
						<a href="#" class="text login-link">Login</a>
					</span>
				</div>
			</div>
		</div>
	</div>
	
	<script src="Login_Script.js"></script>
	
</body>
</html>
