
<?php 
require_once("dbconn.php");
// error_reporting(0);
if ($_POST['submit']) {
$error="";
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$adress=$_POST['adress'];


if ($name && $email && $password && $adress) {
	$sql="INSERT into users(name, email,passwrd,adress)VALUES('$name','$email','$password','$adress')";
   $result=mysqli_query($conn,$sql);
if ($result) {
	echo "success";
}else{
die(mysqli_error($conn));

}
}
   
}else{

	echo "All fileds must be field in";
}
mysqli_close($conn);

 ?>
 <center>

	<?php include("links.php") ?>
</center>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="configs/settings.css">
	<title></title>
</head>
<body>

</body>
</html>