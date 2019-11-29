<?php
session_start();
if(!$_SESSION['sid'])
header("location:start.html");
?>
<html>
<head>
    <title></title>
    <head>
        <style>
        .button {
          background-color: #4CAF50;
          border: none;
          color: white;
          padding: 15px 32px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
          font-size: 16px;
          margin: 4px 2px;
          cursor: pointer;
          height:30px;
          width:100px;
        }
        #b{
            float:right;
        }
body{
    background-image:url("F.jpg");
    background-repeat:no-repeat;
    background-size:cover;
    background-position:center;

}
</style>
</head>
<body align="center">
    <h1 align="center" style="color:red" >WELCOME TO INFORMATION SCIENCE DEPARTMENT</h1>
    <br>
    <h2 align="center" style="color:brown">please choose the faculty name</h2><br>
<?php
if(isset($_GET['id']))
{
    $id1=$_GET['id'];
    $_SESSION['sem']=$id1;
    }
    $sem= $_SESSION['sem'];

$connect=mysqli_connect('localhost','','','test');
$query="select * from faculty f, subjects s where f.fid=s.fid and sem='$sem' ";
$conn=mysqli_query($connect,$query);
while($row = mysqli_fetch_array($conn))
    {
     ?><a class="button" href="ShowFacultySubject.php?id=<?php echo $row['fid']?>&id1=<?php echo $row['sem']?>"><?php echo $row['fname']; ?> </a><br/><br/><?php
    }
    ?>
    <a href="logout.php" class="button" id="b">logout</a>
    </body>
</html>
