<?php
session_start();
if(!$_SESSION['hid'])
header("location:start.html");
?>
<html>
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
        </style>
    </head>
    <body align="center">
    <?php
    $connect=mysqli_connect('localhost','','','test');
    $query="SELECT * from faculty";
    $conn=mysqli_query($connect,$query);
    while($row = mysqli_fetch_assoc($conn))
    {
       ?> <a class="button" href="hod2page.php?fid=<?php echo $row['fid']?>"><?php echo $row['fname']; ?> </a><br/><br/><?php
    }
    ?>
    <a href="logout.php" class="button" id="b">logout</a>

</body>
</html>