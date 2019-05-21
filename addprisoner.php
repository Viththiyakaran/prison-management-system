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
$age = $_POST['age'];
$gen = $_POST['gen'];
$nic = $_POST['nic'];
$address= $_POST['address'];
$phone = $_POST['phone'];
$bdate = $_POST['bdate'];
$relation = $_POST['relation'];
$cell = $_POST['cell'];
$remarks =$_POST['remarks'];
$height = $_POST['height'];
$weight = $_POST['weight'];

//include database configuration file


//insert form data in the database
$sql = "INSERT INTO `prisoner`( `name`, `age`, `gender`, `nic`, `address`, `contact`, `bookdate`, `section`, `cellno`, `remarks`, `hight`, `weight`, `image`) VALUES ('$name','$age','$gen','$nic','$address','$phone','$bdate','$relation','$cell','$remarks','$height','$weight','$path')";

mysqli_query($con,$sql);

header('location:prisoner.php');
	
echo $sql?'ok':'err';
}
} 
else 
{
echo 'invalid';
}
}
?>