//To find the Sum of N natural numbers
<html>
<head>
<title>PHP Program To find the Sum of N natural numbers</title>
</head>
<body>
<form method="post">
<table border="0">
<tr>
<td> <input type="text" name ="num" value="" placeholder="Enter a positive integer"/> </td>
</tr>
<tr>
<td> <input type="submit" name ="submit" value="Submit"/> </td>
</tr>
</table>
</form>
<?php
if(isset($_POST['submit']))
{
$n = $_POST['num'];
$sum = 0;
//Using loop to do sum of N natural numbers
for($i = 1; $i <= $n; ++$i)
{
$sum = $sum + $i;
}
echo "Sum of $n natural numbers = $sum";
return 0;
}
?>
</body>
</html>