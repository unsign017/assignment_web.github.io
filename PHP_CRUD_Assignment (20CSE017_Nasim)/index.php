<?php
include 'dbconnect.php';

$s="select * FROM teacher";
$result=$conn->query($s);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <title>Teacher List</title>
</head>

<body>
   <center>
    <div class="anchor">
       <h1>Teacher List</h1>

       <table class="table">
           <tr>
           
			        <th>ID</th>
					<th>Name</th>
					<th>Designation</th>
					<th>Phone</th>
                    <th>Date of Birth</th>
                    <th>Update</th>
                    <th>DELETE</th>
 <?php 
 while($r=$result->fetch_assoc()){
    $idd=$r['id'];
    $nam=$r['name'];
    $des=$r['designation'];
    $phn=$r['phone'];
    $dobb=$r['dob'];

    echo "<tr>";
    echo "<td>". $idd . "</td>";
    echo "<td>". $nam . "</td>";
    echo "<td>". $des . "</td>";
    echo "<td>". $phn . "</td>";
    echo "<td>". $dobb. "</td>";
    echo "<td> <a href='UpdateForm.php?edit_id=$idd'>Update</a></td>";
    echo "<td> <a href='Delete.php?del_id=$idd'>Delete</a></td>";
     echo "</tr>";

 }            

 ?>   
  <tr class="tr">
	<td colspan="7"><a href="InsertForm.php" class="anchor">Insert Record</a></td>
  </tr>
             
          </tr>
       <table>
</div>

   <center>

</body>
</html>