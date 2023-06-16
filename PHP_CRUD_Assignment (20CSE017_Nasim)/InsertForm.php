<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Insert Form</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<center>
	<div class="wrapper">
		<h1>Insert Form</h1>
		<form method="POST" action="InsertData.php" class="form12">
			<div class="group">
			<label class="label">Name</label>
			<input type="text" placeholder="Enter name" name="f_name"> <br><br>
			</div>
			<div class="group">
			<label class="label">Designation</label>
			<input type="text" placeholder="Enter designation" name="f_des"> <br><br>
			</div>
			<div class="group">
			<label class="label">Phone</label>
			<input type="text" placeholder="Enter phone" name="f_phone"> <br><br>
			</div>
			<div class="group">
			<label class="label">Date of Birth</label>
			<input type="date" placeholder="Enter" name="f_dob"> <br><br>
			</div>
			<input type="submit" value="INSERT" class="insert">
		</form>
		</div>
	</center>	
	
</body>
</html>