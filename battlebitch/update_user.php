<html>
<head>
<title>Battlebitching made easy</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body bgcolor="#FFFFFF">

<?php
/*
$con=mysqli_connect("localhost","root","Purplefishland7.","DnD"); //may not need var$con
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
//need real escape strings for security
$RealUser =$_POST["user"];
$user =$_POST["character"];
$init=$_POST["init"];
$status=$_POST["status"];
$effects=$_POST["effects"];
$damage_done=$_POST["damage_done"];
$damage_taken=$_POST["damage_taken"];
$isdm=$_POST["isdm"];
// figure out how to add yes/no for dm field
$sql = "UPDATE main 
	SET init='$init', status='$status', effects='$effects', damage_done='$damage_done', damage_taken='$damage_taken'
	WHERE RealUser='$RealUser'";
if (!mysqli_query($con,$sql)) {
	die('Error: ' .mysqli_error($con));
}
else{
echo $RealUser;
echo "updated";
}
mysqli_close($con);
*/
$RealUser =$_POST['user'];
echo $RealUser;
?>
</body>
</html> 

