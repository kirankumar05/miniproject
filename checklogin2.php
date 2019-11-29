<?php
session_start();
$host="localhost";
$username="";
$password="";
$db_name="test";
$tbl_name="hod";
$con=mysqli_connect("$host","$username","$password")or die("cannot connect");
$select_db=mysqli_select_db($con,$db_name)or die("cannot slect db");
if(isset($_POST['hname'])&&isset($_POST['pass2']))
{
	$hnm=$_POST['hname'];
	$pswd2=$_POST['pass2'];
	$_SESSION['hid']=$hnm;
	$abd="select * from hod where hid='$hnm' and password='$pswd2'";
	$result3=mysqli_query($con,$abd) or die(mysqli_error($con));
	$c=mysqli_num_rows($result3);
	if($c==true)
	{
		header("location:hodnew.php");
	}
	else
	{
		echo"<center><h2 style='color:red'>ACCESS DENIED</h2></center>";
	}
}

ob_end_flush();
?>