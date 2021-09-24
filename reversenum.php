<?php
if(isset($_POST['submit']))
{
$n=$_POST['num'];
function reverse_number($number)
{
$snum = (string) $number;
$revstr = strrev($snum);
$reverse = (int) $revstr;
return $reverse;
}
echo reverse_number($n);
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Reverse a number </title>
</head>
<body>
<table>
<form name="reverse" method="post">
<tr>
<td>Enter Number :</td>
<td><input type="text" name="num" required></td>
</tr>
<tr>
<td></td>
<td><input type="submit" value="Reverse" name="submit" /></td>
</tr>
</form>
</table>
</body>
</html>