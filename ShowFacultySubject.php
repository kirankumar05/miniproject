<?php
session_start();
$id= $_GET['id'];
$id1=$_SESSION['sem'];
$connect=mysqli_connect('localhost','','','test');
    $query="SELECT * from subjects where fid='$id' and sem='$id1'";
    $conn=mysqli_query($connect,$query);?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
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
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body align="center">
    <p><h3>click on the subject for the further process </h3></p>


    <?php
    while($row = mysqli_fetch_array($conn))
    {?>

        <a class="button" href="qsn.php?fid=<?php echo $id ?>&sid=<?php echo $row['sub_code']?>&sem=<?php echo $row['sem']?>"><?php echo $row['sub_name']?></a><br><br>

    <?php
    }
    ?>
        
    </body>
    </html>
    