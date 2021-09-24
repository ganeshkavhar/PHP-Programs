?php
if(isset($_POST['submit']))
{
$num1=$_POST['num1'];
$num2=$_POST['num2'];
$result=$num1+$num2;
echo "Sum of " .$num1. " and ".$num2. " is " .$result;
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Add two number</title>
</head>
<body>
<table>
<form name="add" method="post">
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
<td><input type="submit" value="Add" name="submit" /></td>
</tr>
</form>
</table>
</body>
</html>
