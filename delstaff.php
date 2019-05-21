<?php
include ('db.php');
if(isset($_GET['q']))
{
	$id = $_GET['q'];
	$sql= "Delete from staff where id = '$id'";
	$row = mysqli_query($con,$sql);
	
	if($row)
	{
		echo "<script>alert('Delete')</script>";
		header("Location: staff.php"); 
	
	}
}


?>