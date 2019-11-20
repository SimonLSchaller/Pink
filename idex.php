<?php
$name = "";
if(isset($_GET['name'])){
$name = $_GET['name'];
}
?>



<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
echo "<h1>GTA V</h1>";
echo "<p>viel Spass</p>";
echo "<p>".$name."</p>";
?>

<form>
<input type="text" name="name">
<input type="submit">
</form>

<p style="color:red;">WASTED</p>
<audio controls>
  <source src="GTAV.mp3" type="audio/mpeg">
</audio>
<br>
<p1>Error</p1>
<br>
<audio controls>
<source src="WINDOWSXPError.mp3" type="audio/mpeg">
</audio>

	
</body>
</html>