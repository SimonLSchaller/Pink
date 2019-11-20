<?php

$x = 0;
$y = 0;
if (isset($_GET['x'])) {
    $x = $_GET['x'];
}
$y = "";
if (isset($_GET['y'])) {
    $y = $_GET['y'];
}

?>

<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<p1>Rechner</p1>
<?php
$z = $x * $y;
?>
<form>
    <input type="number" name="x"> <input type="number" name="y"> <input type="submit">

</form>

<?php
echo $z
?>

</body>
</html>


