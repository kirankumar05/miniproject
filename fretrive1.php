<?php
session_start();
if(isset($_SESSION['fid']))
{
  

$sid = $_GET['sid'];

$connect=mysqli_connect('localhost','','','test');
$query= "select * from  feedback where sub_code ='$sid' ";
$conn=mysqli_query($connect,$query);
$row_count = mysqli_num_rows($conn);

$q1good = 0;$q1avg = 0;$q1bad = 0;$q2good = 0;$q2avg = 0;$q2bad = 0;$q3good = 0;$q3avg = 0;$q3bad = 0;$q4good = 0;$q4avg = 0;$q4bad = 0;
while($row = mysqli_fetch_array($conn))
{
    if($row['q1'] == 10)
    {
        $q1good ++;
    }
    elseif($row['q1'] == 5)
    {
        $q1avg ++;
    }
    else
    {
        $q1bad ++;
    }

    if($row['q2'] == 10)
    {
        $q2good ++;
    }
    elseif($row['q2'] == 5)
    {
        $q2avg ++;
    }
    else
    {
        $q2bad ++;
    }

    if($row['q3'] == 10)
    {
        $q3good ++;
    }
    elseif($row['q3'] == 5)
    {
        $q3avg ++;
    }
    else
    {
        $q3bad ++;
    }

    if($row['q4'] == 10)
    {
        $q4good ++;
    }
    elseif($row['q4'] == 5)
    {
        $q4avg ++;
    }
    else
    {
        $q4bad ++;
    }

    
}

$good_perc_1 = ($q1good / $row_count) * 100;
$avg_perc_1 = ($q1avg / $row_count) * 100;
$bad_perc_1 = ($q1bad / $row_count) * 100;

$good_perc_2 = ($q2good / $row_count) * 100;
$avg_perc_2= ($q2avg / $row_count) * 100;
$bad_perc_2 = ($q2bad / $row_count) * 100;

$good_perc_3 = ($q3good / $row_count) * 100;
$avg_perc_3 = ($q3avg / $row_count) * 100;
$bad_perc_3 = ($q3bad / $row_count) * 100;

$good_perc_4 = ($q4good / $row_count) * 100;
$avg_perc_4 = ($q4avg / $row_count) * 100;
$bad_perc_4 = ($q4bad / $row_count) * 100;
?>

<html>
    <body>
<table align="center" border="1" >
    <tr>
        <td>Feedback Result</td>
        <td>Question 1</td>
        <td>Question 2</td>
        <td>Question 3</td>
        <td>Question 4</td>
    </tr>
    <tr>
        <td>Good</td>
        <td><?php echo $good_perc_1."%";?></td>
        <td><?php echo $good_perc_2."%";?></td>
        <td><?php echo $good_perc_3."%";?></td>
        <td><?php echo $good_perc_4."%";?></td>
    </tr>
    <tr>
        <td>Average</td>
        <td><?php echo $avg_perc_1."%";?></td>
        <td><?php echo $avg_perc_2."%";?></td>
        <td><?php echo $avg_perc_3."%";?></td>
        <td><?php echo $avg_perc_4."%";?></td>
    </tr>
    <tr>
        <td>Bad</td>
        <td><?php echo $bad_perc_1."%";?></td>
        <td><?php echo $bad_perc_2."%";?></td>
        <td><?php echo $bad_perc_3."%";?></td>
        <td><?php echo $bad_perc_4."%";?></td>
    </tr>
</table>
<br/><br/>
<center><a href="fretrive.php"><button style="background-color:blue ;">Back</button></a></center>

</body>
</html>
<?php
}


