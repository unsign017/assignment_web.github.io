<?php
	include "dbconnect.php";
	$id=$_GET['edit_id'];
	$sql="SELECT * FROM teacher where id='$id'";
	$result=$conn->query($sql);
	
	$arr=$result->fetch_assoc();
	
	$nam=$arr['name'];
	$designation=$arr['designation'];
	$phone=$arr['phone'];
	$date=$arr['dob'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Update Form</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<center>
		<div class="wrapper">
		<h1>Update Form</h1>
		<form method="POST" action="Update.php?d_id=<?php echo $id?>">
			<div class="group">
		<label class="label">Name</label>
			<input type="text" value= " <?php echo $nam ?> " name="f_name"> <br> <br>
			</div>
			<div class="group">
			<label class="label">Designation</label>
			<input type="text" placeholder="Designation" value= " <?php echo $designation ?> " name="f_designation"> <br> <br>
            </div>
			<div class="group">
			<label class="label">Phone</label>
			<input type="text"  placeholder="Enter phone no. " value= " <?php echo $phone ?> " name="f_phone" > <br> <br>
			</div>
			<div class="group">
			<label class="label">Date of Birth</label>
			<input type="date"  placeholder="Enter date of birth " value= " <?php echo $date ?> " name="f_date" > <br> <br>
			</div>
			<input type="submit" value="update">
		</form>
		</div>
	</center>	
</body>
</html>