?php
if(isset($_POST['submit']))
{
$num=$_POST['num'];
define('NUM',$num);
for($i=1 ; $i<=10 ; $i++)
{
echo $i*NUM;
echo '<br>';
}
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Table of a Number</title>
</head>
<body>
<table>
<form name="table" method="post">
<tr>
<td>Enter Number :</td>
<td><input type="text" name="num" required></td>
</tr>
<tr>
<td></td>
<td><input type="submit" value="submit" name="submit" /></td>
</tr>
</form>
</table>
</body>
</html>