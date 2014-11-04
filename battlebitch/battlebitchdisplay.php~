<html>
<head>
<link rel="stylesheet" type="text/css" href="bb.css">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css">
<title>Battlebitching displayed easy</title>
<script type="text/javascript" src="js/jquery-1.11.0.js"></script>
<script type="text/javascript">
	  $(document).ready(function () {
      $('#btnHide').click(function () {
          //$('td:nth-child(2)').hide();
          // if your table has header(th), use this
          $('td:nth-child(3),th:nth-child(3)').hide();
      });
  });


      $(document).ready(function () {
          $('.editbtn').click(function () {
              var currentTD = $(this).parents('tr').find('td');
              if ($(this).html() == 'Edit') {
                  currentTD = $(this).parents('tr').find('td');
                  $.each(currentTD, function () {
                      $(this).prop('contenteditable', true)
                  });
              } else {
                 $.each(currentTD, function () {
                      $(this).prop('contenteditable', false)
                  });
              }
    

<body bgcolor="#FFFFFF">

</script>
<script>
function newwindow(myurl,xsize,ysize)
  {
   istr="";
   istr="scrollbars,resizable,WIDTH=" + xsize + ",HEIGHT=" + ysize;
   //alert(istr);
   newwin=window.open(myurl,"",istr);
  }
</script>
<a href="main_form.php">back to main form</a>
<!BEGIN MAIN TABLE-->

<?php
 $con=mysqli_connect("localhost","root","Purplefishland7.","DnD");
 // Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT RealUser, user, init, effects, status, damage_done, damage_taken FROM main ORDER BY init desc");
$drop = mysqli_query($con, "DELETE FROM main $user WHERE user LIKE $row");
while($row = mysqli_fetch_array($result))
{
echo "<table class=TFtable border='0' width='50%'>
<tr>
<th>User</th>
<th>Character</th>
<th>Initiative</th>
<th>Effects</th>
<th>Status</th>
<th>Damage Done</th>
<th>Damage Taken</th>
<th>UPDATE</th>
</tr>";
while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td><div contenteditable='False' tabindex='1'>" . $row['RealUser'] . "</div></td>";
echo "<td><div contenteditable='False' tabindex='2'>" . $row['user'] . "</div></td>";
echo "<td><div contenteditable='true' tabindex='3'>" . $row['init'] . "</div></td>";
echo "<td><div contenteditable='true' tabindex='4'>" . $row['effects'] . "</div></td>";
echo "<td><div contenteditable='true' tabindex='5'>" . $row['status'] . "</div></td>";
echo "<td><div contenteditable='true' tabindex='6'>" . $row['damage_done'] . "</div></td>";
echo "<td><div contenteditable='true' tabindex='7'>" . $row['damage_taken'] . "</div></td>";
$RealUser=$row['RealUser'];
$alink="javascript:newwindow(\"update_user_form.php?User=".$RealUser." &sw=0\",275,350)";
  echo "<td><p><a href='".$alink."'>".EDIT."</p></td>\n";
echo "</tr>";
}
echo "</table>";
mysqli_close($con);
}

?>


<!--BEGIN DICE ROLLER FUNCTION-->

<style type="text/css">
div.dice{
	align:centert;
	width:32px;
	background:#F5F5F5;
	border:#999 1px solid;
	padding:10px;
	font-size:24px;
	text-align:center;
	margin:5px;

</style>
<script>
function rollDice4(){
    var die14 = document.getElementById("die14");
    //var die2 = document.getElementById("die2");
    var status = document.getElementById("status");
    var d14 = Math.floor(Math.random() * 4) + 1;
    //var d2 = Math.floor(Math.random() * 6) + 1;
    //var diceTotal = d1 + d2;
    die1.innerHTML = d14;
    //die2.innerHTML = d2;
    //status.innerHTML = "You rolled "+diceTotal+".";
    
}

function rollDice6(){
    var die16 = document.getElementById("die16");
    //var die2 = document.getElementById("die2");
    var status = document.getElementById("status");
    var d16 = Math.floor(Math.random() * 6) + 1;
    //var d2 = Math.floor(Math.random() * 6) + 1;
    //var diceTotal = d1 + d2;
    die1.innerHTML = d16;
    //die2.innerHTML = d2;
    //status.innerHTML = "You rolled "+diceTotal+".";
    
}

function rollDice8(){
    var die18 = document.getElementById("die18");
    //var die2 = document.getElementById("die2");
    var status = document.getElementById("status");
    var d18 = Math.floor(Math.random() * 8) + 1;
    //var d2 = Math.floor(Math.random() * 6) + 1;
    //var diceTotal = d1 + d2;
    die1.innerHTML = d18;
    //die2.innerHTML = d2;
    //status.innerHTML = "You rolled "+diceTotal+".";
    
}
function rollDice10(){
    var die110 = document.getElementById("die110");
    //var die2 = document.getElementById("die2");
    var status = document.getElementById("status");
    var d110 = Math.floor(Math.random() * 10) + 1;
    //var d2 = Math.floor(Math.random() * 6) + 1;
    //var diceTotal = d1 + d2;
    die1.innerHTML = d110;
    //die2.innerHTML = d2;
    //status.innerHTML = "You rolled "+diceTotal+".";
    
}
function rollDice12(){
    var die112 = document.getElementById("die112");
    //var die2 = document.getElementById("die2");
    var status = document.getElementById("status");
    var d112 = Math.floor(Math.random() * 12) + 1;
    //var d2 = Math.floor(Math.random() * 6) + 1;
    //var diceTotal = d1 + d2;
    die1.innerHTML = d112;
    //die2.innerHTML = d2;
    //status.innerHTML = "You rolled "+diceTotal+".";
    
}
function rollDice20(){
    var die120 = document.getElementById("die120");
    //var die2 = document.getElementById("die2");
    var status = document.getElementById("status");
    var d120 = Math.floor(Math.random() * 20) + 1;
    //var d2 = Math.floor(Math.random() * 6) + 1;
    //var diceTotal = d1 + d2;
    die1.innerHTML = d120;
    //die2.innerHTML = d2;
    //status.innerHTML = "You rolled "+diceTotal+".";
    
}

</script>

<div id="die1" class="dice">0</div>
<!--<div id="die2" class="dice">0</div>-->
<input type="image"
src="d4-icon.png"
class="btnClaim"
src="btnclickimage"
onclick="rollDice4()">
<input type="image"
src="d6-icon.png"
class="btnClaim"
src="btnclickimage"
onclick="rollDice6()">
<input type="image"
src="d8-icon.png"
class="btnClaim"
src="btnclickimage"
onclick="rollDice8()">
<input type="image"
src="d10-icon.png"
class="btnClaim"
src="btnclickimage"
onclick="rollDice10()">
<input type="image"
src="d12-icon.png"
class="btnClaim"
src="btnclickimage"
onclick="rollDice12()">
<input type="image"
src="d20-icon.png"
class="btnClaim"
src="btnclickimage"
onclick="rollDice20()">
<br/>
<br/>
<input type=button value="next round" onclick="function">
<br/>
<br/>

<!-- BEGIN DRAGGABLE WIDGET STUFF-->
<iframe src="draggywidget.php" width="50%" height="40%" scrolling="no"></iframe>
</div>
</body>
</html>
