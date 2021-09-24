<?php
if(isset($_POST['submit']))
{
echo "<b>Number before Swapping</b><br>";
$num1=$_POST['num1'];
$num2=$_POST['num2'];
echo "Number one is $num1 <br />";
echo "Number two is $num2 <br />";
$temp=$num1;
$num1=$num2;
$num2=$temp;
echo "<b>Number after Swapping</b> <br />";
echo "Number one is $num1<br />";
echo "Number two is $num2<br />";
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Swap Two Numbers</title>
</head>
<body>
<table>
<form name="swap" method="post">
<tr>
<td>Number 1 :</td>
<td><input type="text" name="num1" required></td>
</tr>
<tr>
<td>Number 2 :</td>
<td><input type="text" name="num2" required></td>
</tr>
<tr>
<td></td>
<td><input type="submit" value="swap" name="submit" /></td>
</tr>
</form>
</table>
</body>
</html>