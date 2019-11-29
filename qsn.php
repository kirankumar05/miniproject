<?php
session_start();

$fid = $_GET['fid'];
$sid = $_GET['sid'];
$sem = $_SESSION['sem'];
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
body{
    background-image:url("q.jpg");
    background-repeat:no-repeat;
    background-size:cover;
    background-position:center;

}</style>
<body>
<form  action="" method="POST">

  <input type="text" name="fid" value="<?php echo $fid ?>" style="display:none">
  <input type="text" name="sid" value="<?php echo $sid ?>" style="display:none">


<p></p><h2>1)whether she/he conduct the classes reagularly?</h2></p>
  <input type="radio" id="p1" name="hold" value="10"> good<br>
  <input type="radio" name="hold" value="5"> average<br>
  <input type="radio" name="hold" value="1"> poor<br>  

<p><h2>2)knows the subject matter of related course?</h2></p>
  <input type="radio" name="hold2" value="10">good<br>
  <input type="radio" name="hold2" value="5">average<br>
  <input type="radio" name="hold2" value="1">poor<br>  

  <p><h2>3)did she/he compleate the syllabus on time?</h2></p>
  <input type="radio" name="hold3" value="10">good<br>
  <input type="radio" name="hold3" value="5">average<br>
  <input type="radio" name="hold3" value="1">poor<br>  

  <p><h2>4)does he/she makes the topics understanding?</h2></p>
  <input type="radio" name="hold4" value="10">good<br>
  <input type="radio" name="hold4" value="5">average<br>
  <input type="radio" name="hold4" value="1">poor<br> <br> 

  <input  align="center" type="submit" value="Submit" name="submit">
</form>
<h2 id="err" style="color:red"></h2>
</body>

</html>

<?php
  if(isset($_POST['submit'])){
    if(isset($_POST['hold'])&&isset($_POST['hold2'])&&isset($_POST['hold3'])&&isset($_POST['hold4']))
    {
    $fid = $_POST['fid'];
    $sid = $_POST['sid'];
    $q1 = $_POST['hold'];
    $q2 = $_POST['hold2'];
    $q3 = $_POST['hold3'];
    $q4 = $_POST['hold4'];

    $connect=mysqli_connect('localhost','','','test');
    $query="INSERT INTO feedback VALUES ('$fid', '$sid', '$q1', '$q2', '$q3', '$q4')";
    $res=mysqli_query($connect,$query); 
    header("location:showfacultyname.php?id=$sem");
    }
    else {
      echo "<script> document.getElementById('err').innerHTML=`PLEASE GIVE FEEDBACK FOR ALL THE QUESTIONS`</script>";

    }
    
  }
?>