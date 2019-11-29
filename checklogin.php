<?php
session_start();
$host="localhost";
$username="";
$password="";
$db_name="test";
$tbl_name="student_detail";
$con=mysqli_connect("$host","$username","$password")or die("cannot connect");
$select_db=mysqli_select_db($con,$db_name)or die("cannot slect db");
if(isset($_POST['myusername'])&&isset($_POST['mypassword']))
{
	$usrnm=$_POST['myusername'];
	$_SESSION['sid']=$usrnm;
	$pswd=$_POST['mypassword'];
	$ab="select * from student_detail where usn='$usrnm' and password='$pswd'";
	$result=mysqli_query($con,$ab) or die(mysqli_error($con));
	$cnt=mysqli_num_rows($result);
	if($cnt==true)
	{
		header("Location:firstpage.html");
		
	}
	else
	{
		echo"<center><h2 style='color:red'>ACCESS DENIED</h2></center>";
	}
}

ob_end_flush();
?>