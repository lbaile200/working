<html>
<head>
<title>Battlebitching made easy</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body bgcolor="#FFFFFF">

<?php
$con=mysqli_connect("localhost","root","Purplefishland7.","DnD"); //may not need var$con
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
//need real escape strings for security
$realuser=$_POST["username"];//find correct var for this
$user =$_POST["character"];
$init=$_POST["init"];
$status=$_POST["status"];
$effects=$_POST["effects"];
$damage_done=$_POST["damage_done"];
$damage_taken=$_POST["damage_taken"];
$isdm=$_POST["isdm"];
// figure out how to add yes/no for dm field
$sql = "INSERT INTO main (user, init, effects, status, damage_done, damage_taken, RealUser, DM) VALUES ('$user', '$init', '$effects', '$status', '$damage_done', '$damage_taken', '$realuser', '$isdm')";
if (!mysqli_query($con,$sql)) {
	die('Error: ' .mysqli_error($con));
}
else{
echo "user added";}
mysqli_close($con);
?>
<br/>
<input type="button" value="Add More Users"
   onclick="window.location.href='main_form.php'">
<input type="button" value="Done, show me"
   onclick="window.location.href='battlebitchdisplay.php'">

</body>
</html> 

