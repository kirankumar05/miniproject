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
          background-color:green;
          border: none;
          color: white;
          padding: 15px 32px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
          font-size: 16px;
          margin: 4px 2px;
          cursor: pointer;
          height:20px;
          width:100px;

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
    <h1 align="center" style="color:rgba(226, 43, 129, 0.829);" >WELCOME TO INFORMATION SCIENCE DEPARTMENT</h1>
    <br>
    <h3 align="center" style="color:red">please choose your semister</h3><br>
    <?php
    $connect=mysqli_connect('localhost','','','test');
    $query="SELECT * from subjects group by sem order by sem";
    $conn=mysqli_query($connect,$query);
    while($row = mysqli_fetch_array($conn))
    {
     ?><a class="button" href="showfacultyname.php?id=<?php echo $row['sem']?>"><?php echo $row['sem']; ?> </a><br/><br/><?php
    }
    ?>


</body>
</html>