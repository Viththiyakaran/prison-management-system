<?php
include('db.php');
$valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp','webp' ); // valid extensions
$path = 'uploads/'; // upload directory

if(!empty($_POST['name']) || !empty($_POST['email']) || $_FILES['image'])
{
$img = $_FILES['image']['name'];
$tmp = $_FILES['image']['tmp_name'];

// get uploaded file's extension
$ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));

// can upload same image using rand function
$final_image = rand(1000,1000000).$img;

// check's valid format
if(in_array($ext, $valid_extensions)) 
{ 
$path = $path.strtolower($final_image); 

if(move_uploaded_file($tmp,$path)) 
{
echo "<img src='$path' />";
$name = $_POST['name'];
$gen = $_POST['gen'];
$age = $_POST['age'];
$nic = $_POST['nic'];
$phone = $_POST['contact'];
$address= $_POST['address'];
$desgination = $_POST['desgination'];
$section = $_POST['section'];
$duty = $_POST['duty'];

$id = $_POST['id'];

//include database configuration file


//insert form data in the database

$sql = "UPDATE `staff` SET `name`='$name',`gender`='$gen',`age`='$age',`nic`='$nic',`contact`='$phone',`address`='$address',`designation`='$desgination',`dutysec`='$section',`duties`='$duty',`image`='$path' WHERE id = '$id'";

mysqli_query($con,$sql);

header('location:staff.php');
	
echo $sql?'ok':'err';
}
} 
else 
{
echo 'invalid';
}
}
?>