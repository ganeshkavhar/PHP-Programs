<?php
if(isset($_POST['submit']))
{
	$n=$_POST['num'];
define('NUM',$n);
$a = 0;
$b = 1;
echo "$a $b "; // 0 1
for($i=1   ; $i<= NUM-2 ;  $a=$b, $b=$c, $i++ )
{
  echo $c = $a+$b;
  echo " ";
}
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Fibonacci Series </title>
</head>
<body>
<table>
<form name="fibonacci" method="post">
<tr>
<td colspan="2">Enter number upto you want to print the series.
</tr>
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