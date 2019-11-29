<?php
session_start();
$servername="localhost";
$username="";
$password="";
$dbname="test";
$tbl_name="student_detail";
$conn=mysqli_connect($servername,$username,$password,$dbname) or die(mysqli_error());
$select_db=mysqli_select_db($conn,$dbname) or die (mysqli_error($conn));
$usn=$_POST['usn'];
$pwd=$_POST['pwd'];
if(isset($_POST['update']))
    {
        
        $usn=$_POST['usn'];
        $name=$_POST['name'];
        $sem=$_POST['sem'];
        $age=$_POST['age'];
        $addr=$_POST['addr']; 
        $dob=$_POST['dob'];
        $pwd=$_POST['pwd'];
       
        $res2="UPDATE $tbl_name set name='$name',sem='$sem',age='$age',addr='$addr',dob='$dob',password='$pwd' where usn='$usn'";
        $result=mysqli_query($conn,$res2) or die (mysqli_error($conn));
        
    }
?>

<?php
$usn=$_POST['usn'];
$pwd=$_POST['pwd'];
$res1="select * from student_detail where usn='$usn' and password='$pwd'";
$result1=mysqli_query($conn,$res1) or die (mysqli_error($conn));
$cn=mysqli_num_rows($result1);
if($cn==false)
    {
        echo"<center><h2 style='color:red'>ACCESS DENIED</h2></center>";
    }
else
    {
        while($row=mysqli_fetch_array($result1))
        {
            $usn=$row['usn'];
            $name=$row['name'];
            $sem=$row['sem'];
            $age=$row['age'];
            $addr=$row['addr'];
            $dob=$row['dob'];
            $pwd=$row['password'];
        }
      
?>
<html>
    <head>
        <title>Edit details</title>
        <style>
#back-btn{
	color:inherit;
	text-decoration: none;
}
</style>
    </head>
    <body>
        <br/><br/>
        <form name="form1" method="post" action="">
            <table border="0">
                <tr>
                    <td>USN</td>
                    <td><input type="uniqid" name="usn" value="<?php echo $usn;?>" ></td>
                </tr>
                <tr>
                    <td>NAME</td>
                    <td><input type ="text" name="name" value="<?php echo $name;?>" ></td>
                </tr>
                <tr>
                    <td>sem</td>
                    <td><input type ="text" name="sem" value="<?php echo $sem;?>" ></td>
                </tr>
                <tr>
                    <td>age</td>
                    <td><input type ="text" name="age" value="<?php echo $age;?>" ></td>
                </tr>
                <tr>
                    <td>address</td>
                    <td><input type ="text" name="addr" value="<?php echo $addr;?>" ></td>
                </tr>

                <tr>
                    <td>dob</td>
                    <td><input type ="text" name="dob" value="<?php echo $dob;?>" ></td>
                </tr>
                <tr>
                    <td>password</td>
                    <td><input type ="text" name="pwd" value="<?php echo $pwd;?>" ></td>
                </tr>
                
                <tr>
                    <td><input type="submit" name="update" value="Update"></td>
                </tr>
            </table>
            <button><a id="back-btn" href="start.html">back</a></button>
        </form>
    </body>
</html>
<?php
    }?>


            
        