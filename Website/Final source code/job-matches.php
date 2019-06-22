<!DOCTYPE html>
<html>
<head>
	<meta charset="utf8">
	<link rel="stylesheet" type="text/css" href="style-job.css">
	<title>Job pairing service</title>
</head>
<body>
	
<?php include("template.php"); ?>
	
	<main>
		<form action="job-matches.html" method="get">
			<div class="main-title">
				<h1>Job matches</h1>
			</div>
			<div class="main-content">
				<div class="main-card">
					<div class="main-card-title">
						<h4>Company 1</h4>
						Select: <input type="checkbox" name="job-match[]"> 
					</div>
					<div class="main-card-content">
						<p>Position: Cheif of design</p>
						<p>Taipei City</p>
					</div>
				</div>
				<div class="main-card">
					<div class="main-card-title">
						<h4>Company 2</h4>
						Select:<input type="checkbox" name="job-match[]"> 
					</div>
					<div class="main-card-content">
						<p>Position: Design manager</p>
						<p>Taipei City</p>
					</div>
				</div>

				<div class="main-card">
					<div class="main-card-title">
						<h4>Company 3</h4>
						Select:<input type="checkbox" name="job-match[]"> 
					</div>
					<div class="main-card-content">
						<p>Position: Cheif of design</p>
						<p>Taoyuan</p>
					</div>
				</div>
			</div>
			<div class="main-buttom">
				<input type="submit" name="sub" value="Send CV">
			</div>
		</form>
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