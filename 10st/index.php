<html>
<head>
<title>PHP Program To read the marks of three subjects and display the Total, Avg and Class</title>
</head>
<body>
<form method="post">
<table border="0">
<tr>
    <td> <input type="text" name="num1" value="" placeholder="Enter English marks"/>
    </td>
</tr>
<tr>
    <td> <input type="text" name="num2" value="" placeholder="Enter Maths marks"/>
    </td>
</tr>
<tr>
    <td> <input type="text" name="num3" value="" placeholder="Enter Science marks"/>
    </td>
</tr>
<tr>
    <td>
        <input type="text" name="num4" value="" placeholder="Enter Hindi marks">
    </td>
</tr>
<tr>
    <td>
        <input type="text" name="num5" value="" placeholder="Enter Punjabi marks">
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
$english = $_POST['num1'];
$maths = $_POST['num2'];
$science = $_POST['num3'];
$Hindi =$_POST['num4'];
$Punjabi =$_POST['num5'];
$precision = 5;
$total = ($english + $maths + $science + $Hindi + $Punjabi); // Compute total marks
$average = number_format($total/4, $precision); //compute the average of total marks
echo " Total marks of three subjects = ".$total ."<br><br>";
echo " Average marks of three subjects = ".$average ."<br><br>";
if($total<35 || $english<35 || $maths<35 || $science<35 || $Hindi<35 || $Punjabi<35)
{
echo "Fail";
}
else
if($average>=60 && $average<70)
{
echo "Third Class";
}
else
if($average>=70 && $average<80)
{
echo "Second Class";
}
else
if($average>=80 && $average<95)
{
echo "First Class";
}
else
{
echo "Average Student";
}
return 0;
}
?>
</body>
</html>