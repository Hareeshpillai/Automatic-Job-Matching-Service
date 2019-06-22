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
			<h1>My Profile</h1>
		</div>
		<div class="main-content">
			<form action="my-profile.html" method="get">
				<h3>Personal information</h3>
				<div class="personal-info">
					<p>Name: <input type="text" name="name" value="Anna Andersson"></p>
					<p>Birthdate: <input type="date" name="birthdate" value="1994-04-03"></p>
				</div>
				<h3>Photo</h3>
				<div class="personal-info">
					<p><input type="file" name="picture" value="Select..."> <img src="https://media.istockphoto.com/photos/beautiful-woman-in-denim-shirt-smiling-picture-id655015648?k=6&m=655015648&s=612x612&w=0&h=Dqijc-8XkNCzvqO05Jq_JlO8HC7wD0gqt70CuE2Jt3s=" alt="" width="20%"></p>
				</div>
			</form>
			<form action="my-profile.html" method="get">
				<h3>Interests</h3>
				<p>
					<input type="checkbox" name="interest[]" value="Language" checked>Language
					<input type="checkbox" name="interest[]" value="Music" checked>Music
					<input type="checkbox" name="interest[]" value="Travel" checked>Travel
				</p>
				<p>New interests: <input type="text" name="new-interests" value=""></p>
				<h3>Location</h3>
				<p>Address: No.54, Sec. 2, Jinshan S. Rd., Da-an District, Taipei City 10603, Taiwan (R.O.C.).</p>
				<input type="submit" value="Confirm changes">
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