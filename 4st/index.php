//To read three sides of a triangle and print the type of the triangle
<html>
<head>
<title>PHP Program To read three sides of a triangle and print the type of the triangle</title>
</head>
<body>
<form method="post">
<table border="0">
<tr>
<td> <input type="text" name="num1" value="" placeholder="Enter length of 1st side"/>
</td>
</tr>
<tr>
<td> <input type="text" name="num2" value="" placeholder="Enter length of 2nd side"/>
</td>
</tr>
<tr>
<td> <input type="text" name="num3" value="" placeholder="Enter length of 3rd side"/>
</td>
</tr>
<tr>
<td> <input type="submit" name="submit" value="Submit"/>
</td>
</tr>
</table>
</form>
<?php
if(isset($_POST['submit']))
{
$a = $_POST['num1'];
$b = $_POST['num2'];
$c = $_POST['num3'];
echo "Given sides : ".$a." ".$b." ".$c. "</br>";
if(($a + $b > $c) && ($a + $c > $b) && ($b + $c > $a))
{
echo("No, this is not a triangle");
}

else
if(($a==$b) || ($b==$c) || ($c==$a))
{
echo("Isosceles triangle");
}

return 0;
}
?>
</body>
</html>