<!DOCTYPE html>
<html>
<head>
	<meta charset="utf8">
	<link rel="stylesheet" type="text/css" href="style-test.css">
	<title>Job pairing service</title>
</head>
<body>

	<?php include("template.php"); ?>
	
	<main>
		<div class="main-title">
			<h1>Sign up</h1>
		</div>
		<div class="main-content">
			<form action="my-profile.html" method="get">
				<h3>Personal information</h3>
				<div class="personal-info">
					<p>Name: <input type="text" name="name"></p>
					<p>Birthdate: <input type="date" name="birthdate"></p>
				</div>
				<h3>Photo</h3>
				<div class="personal-info">
					<p><input type="file" name="picture" value="Select...">
				</div>
			</form>
			<form action="my-profile.html" method="get">
				<h3>Interests</h3>
				<p>
					<input type="checkbox" name="interest[]" value="Language">Language
					<input type="checkbox" name="interest[]" value="Music">Music
					<input type="checkbox" name="interest[]" value="Travel">Travel
					<input type="checkbox" name="interest[]" value="IT & Tech">IT & Tech
					<input type="checkbox" name="interest[]" value="Business">Business
				</p>
				<h3>Location</h3>
				<p>Address: <input type="text" name="address"></p>
				<p>How many km are you willing to travel to work?</p>
				<p><input type="number" name="distance" min="0"></p>
				<p>
					Are you willing to work in annother country?
					<input type="checkbox" name="work-in-other-country">Yes
				</p>
				<p>If yes, input which countries: <input type="text" name="countries"></p>
				<p><input type="checkbox" value="agreement">I agree that Chung Hua Post can gather information about me</p>
				<p><input type="checkbox" name="terms">I agree to the <a href="" class="terms">Terms of condition</a></p>
				<p><input type="submit" value="Sign up"></p>
			</form>
		</div>
	</main>
	<footer>
		<div class="foot-container">
			<div class="foot-item">
				<h5 class="foot-title">Address</h5>
				<p class="foot-content">No.55, Sec. 2, Jinshan S. Rd., Da-an District, Taipei City 10603, Taiwan (R.O.C.).</p>
			</div>
			<div class="foot-item">
				<h5 class="foot-title">Contact Number</h5>
				<p class="foot-content">TEL : +886-2-2321-4311</p>
			</div>
		</div>
	</footer>
</body>
</html>