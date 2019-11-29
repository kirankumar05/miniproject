<?php
session_start();
$host="localhost";
$username="";
$password="";
$db_name="test";
$tbl_name="faculty";
$con=mysqli_connect("$host","$username","$password")or die("cannot connect");
$select_db=mysqli_select_db($con,$db_name)or die("cannot slect db");

if(isset($_POST['fname'])&&isset($_POST['pass1']))
{
	$fn=$_POST['fname'];
	$_SESSION['fid']=$fn;
	$fpswd=$_POST['pass1'];
	$abc="select * from faculty where fid='$fn' and password='$fpswd'";
	$result1=mysqli_query($con,$abc) or die(mysqli_error($con));
	$cn=mysqli_num_rows($result1);
	if($cn==true)
	{
		header("Location:fretrive.php");
	}
	else
	{
		echo"<center><h2 style='color:red'>ACCESS DENIED</h2></center>";
	}
}
ob_end_flush();
?>