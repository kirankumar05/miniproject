<?php
session_start();
if(isset($_SESSION['fid']))
{
  ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
        .button {
          background-color: red;
          border: none;
          color: white;
          padding: 15px 32px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
          font-size: 16px;
          margin: 4px 2px;
          cursor: pointer;
          height:40px;
          width:100px;

        }
        body{
    background-image:url("y.jpg");
    background-repeat:no-repeat;
    background-size:cover;
    background-position:center;
    background-attachment: fixed;

}
        </style>
<body>
<div style="float:right"><a href="start.html"><button>Logout</button></a></div>
<br/><br/><br/><br/><br/>
<?php
$fid = $_SESSION['fid'];
$connect=mysqli_connect('localhost','','','test');
$query= "select * from  subjects where fid ='$fid' ";
$conn=mysqli_query($connect,$query);
while($row = mysqli_fetch_array($conn))
{?>
 <div style="text-align:center"><a class="button" href="fretrive1.php?fid=<?php echo $fid ?>&sid=<?php echo $row['sub_code']?>"><?php echo $row['sub_name'];?></a></div><br><br><?php
}
?>

    
</body>
</html>

<?php
}

else
{
  
  echo"<h1>User Not Found Please Login......</h1>";
}
?>