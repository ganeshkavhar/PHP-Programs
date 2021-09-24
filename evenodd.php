<?php
if(isset($_POST['submit']))
{
$num=$_POST['num'];
if($num%2==0){
  echo "$num  is a even number ";
}
else
{
echo "$num is a odd number";
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Even odd  Numbers</title>
</head>
<body>
<table>
<form name="evenodd" method="post">
<tr>
<td>Enter Number :</td>
<td><input type="text" name="num" required></td>
</tr>
<tr>
<td></td>
<td><input type="submit" value="Check" name="submit" /></td>
</tr>
</form>
</table>
</body>
</html>