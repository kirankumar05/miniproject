<?php
session_start();
$servername="localhost";
$username="";
$password="";
$dbname="test";
$tbl_name="student_detail";
$conn=mysqli_connect($servername,$username,$password,$dbname)or die(mysqli_error());
$select_db=mysqli_select_db($conn,$dbname)or die(mysqli_error($conn));
$sql="select * from $tbl_name";
$result=mysqli_query($conn,$sql)or die(mysqli_error($conn));
if(isset($_POST['submit']))
{
	$usn=$_POST['usn'];
	$name=$_POST['name'];
        $pass=$_POST['pass'];
	$sem=$_POST['sem'];
	$age=$_POST['age'];
	$addr=$_POST['addr'];
	$dob=$_POST['dob'];
	$q="select usn from student_detail where usn='$usn'";
	$cq=mysqli_query($conn,$q)or die(mysqli_error($conn));
	$ret=mysqli_num_rows($cq);
	if($ret==true)
	{
		echo"<center><h2 style='color:red'>USN already exists</h2></center>";
	}
	else
	{
		$query="insert into student_detail values('$usn','$name','$sem','$age','$addr','$dob','$pass')";
		mysqli_query($conn,$query) or die(mysqli_error($conn));
		echo"<center><h2 style='color:green'>Details Saved!</h2></center>";
	}
}
mysqli_close($conn);
?>
<html>
<head>
<body style="background-color:#E5E5E5">
<title>registration form</title>
<style>
#back-btn{
	color:inherit;
	text-decoration: none;
}
</style>
</head>
<h1 align="center">REGISTRATION FORM></h1>
<form action="" method="post">
<table border="0" align="center">
<tbody>
<tr>
<td><label for="usn">UNIVERSITY SEAT NUMBER:</label></td>
<td><input id="usn" maxlength="50" name="usn" type="text"/><td>
</tr>
<tr>
<td><label for="name">NAME:</label></td>
<td><input id="name" maxlength="50" name="name" type="text"/><td>
</tr>

<tr>
<td><label for="sem">SEMESTER:</label></td>
<td><input id="sem" maxlength="50" name="sem" type="number_format"/><td>
</tr>
<tr>
<td><label for="age">AGE:</label></td>
<td><input id="age" maxlength="50" name="age" type="number_format"/><td>
</tr>
<tr>
<td><label for="addr">ADDRESS:</label></td>
<td><input id="addr" maxlength="90" name="addr" type="text"/><td>
</tr>
<tr>
<td><label for="dob">DATE OF BIRTH:</label></td>
<td><input id="dob" maxlength="50" name="dob" type="date_create"/><td>
</tr>
<tr>
<td><label for="pass"> CHOOSE PASSWORD:</label></td>
<td><input id="pass" maxlength="50" name="pass" type="text"/><td>
</tr>
<tr>
<td align="right"><input name="submit" type="submit" value="Add"/>&nbsp;
<input type="reset" onClick="refresh()">
<button><a id="back-btn" href="start.html">back</a></button>
</p></td> 
</html>
















	