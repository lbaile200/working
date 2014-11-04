<html>
<head>
<link rel="stylesheet" type="text/css" href="bb.css">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css">
<title>Battlebitching updated easy</title>

</script>
</head>

<body bgcolor="#FFFFFF">
<?php
echo "<p>Update stats for</p>";
echo "<h2>".$_GET[User]."</h2>";
//echo $_GET[RealUser];
?>
<form name="submit_form" action="update_user.php" method="post"><input type="text" name="init">initiative<br><input type="text" name="status">status<br><input type="text" name="effects">effects<br><input type="text" name="damage_done">damage done<br><input type="text" name="damage_taken">damage taken<br><input type="submit">
</form>

</body>
</html>
