	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=width-device, initial-scale=1">
				<title>Registration Page</title>
				<link rel="stylesheet" type="text/css" href="Style.css">
	</head>
	<body>
		<div class="container">
			<h2  style="text-align: center; "> Register here</h2><br>
			<div class="form-container">
				<form>

					<div class="input-name">
						<i class="fa fa-user"></i>
						<input type="text" name="fname" placeholder="First name" class="name">
						<span>
						<i class="fa fa-user"></i>
						<input type="text" name="lname" placeholder="Last name" class="name">
					</span>
					</div><br><br>
					<div>
						<div class="input-name">
						<i class="fa fa-envelope email"></i>
						<input type="email" name="email" placeholder="enter  valid email " class="name">
					</div><br>

					<div>
						<div class="input-name">
						<i class="fa fa-lock lock"></i>
						<input type="password" name="password" placeholder="enter  password " class="name">
					</div><br>

					<div>
						<div class="input-name">
						<i class="fa fa-lock lock"></i>
						<input type="password" name=" password" placeholder="enter   confirm password " class="name">
					</div><br>
						<div>
						<div class="input-name">
						<i class="fa fa-lock lock"></i>
						<input type="number" name=" mobile no" placeholder="enter mobile no " class="name">
					</div><br>
					<!-- <label>Address:</label> -->
					<textarea id="address" name="address" placeholder="enter the addresss"></textarea><br>

					<div><br>
						<div class="input-name" style="text-align: center;">
						<input type="submit" name=" submit" value="Register" class="name">
				</form>
			</div>
		</div>
	
	</body>
	</html>
