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
          float:right;
        }
#back-btn{
	color:inherit;
	text-decoration: none;
}
        </style>
        </head>
        <body align="center">
            <p><h3>click <button><a id="back-btn" href="delete.php">here</a></button>for student delete</h3></p>
            <br><br><br><br>
            <br>
            <a href="hod1page.php" class="button">next</a>
    </body>
    </html>
