<?php
$firstNumber = 0;
if(isset($_GET['firstNumber'])){
$name = $_GET['firstNumber'];
}
$secondNumber = 0;
if(isset($_GET['secondNumber'])){
$name = $_GET['secondNumber'];
}
?>

<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<h1>Rechner</h1>
<body>

<form>
<p1>x:</p1>
<input type="number_format" name="firstNumber">
</form>
<form>
<p1>y:</p1>
<input type="number_format" name="secondNumber">
<input type="submit">
</form>
<?php
$Solution = $firstNumber * $secondNumber;
echo "<p1>".$Solution."</p1>";
?>

</body>
</html>