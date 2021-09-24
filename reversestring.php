<?php
if(isset($_POST['submit']))
{
$string=$_POST['string'];
$length = strlen($string);
for ($i=($length-1) ; $i >= 0 ; $i--)
{
  echo $string[$i];
}
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Reverse a String</title>
</head>
<body>
<table>
<form name="reversestring" method="post">
<tr>
<td>Enter a String  :</td>
<td><input type="text" name="string" required></td>
</tr>
<tr>
<td></td>
<td><input type="submit" value="Reverse" name="submit" /></td>
</tr>
</form>
</table>
</body>
</html>