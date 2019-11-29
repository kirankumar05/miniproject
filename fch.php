<?php
session_start();
$servername="localhost";
$username="";
$password="";
$dbname="test";
$tbl_name="feedback";
$conn=mysqli_connect($servername,$username,$password,$dbname)or die(mysqli_error());
$select_db=mysqli_select_db($conn,$dbname)or die(mysqli_error($conn));
$sql="select * from $tbl_name";
$result=mysqli_query($conn,$sql)or die(mysqli_error($conn));
if(isset($_POST['submit']))
{
	$sid=$_POST['sid'];
	$q="select sid from feedback where sid='$sid'";
	$cq=mysqli_query($conn,$q)or die(mysqli_error($conn));
	$ret=mysqli_num_rows($cq);
	if($ret==true)
	{
		echo"<center><h2 style='color:red'>USN already exists</h2></center>";
	}
	else
	{
		$query="insert into feedback column(s_id) values('$sid');
		mysqli_query($conn,$query) or die(mysqli_error($conn));
		echo"<center><h2 style='color:green'>Details Saved!</h2></center>";
	}
}
mysqli_close($conn);
?>