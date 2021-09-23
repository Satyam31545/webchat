<?php

$chat_input = $_POST['chat_input'];
$reciver = $_POST['reciver'];
session_start();
 $name =  $_SESSION["username"];
 
$conn = mysqli_connect("localhost","root","","chat_db") or die("failed :" . mysqli_connect_error()); 
$date = date("Y/m/d");
$time = date("h:i:sa");
$sql = "INSERT INTO data_table (sender_name,reciver_name,data,time,date)
          VALUES('{$name}','{$reciver}','{$chat_input}','{$time}','{$date}');";
          $result = mysqli_query($conn, $sql) or die("Query Failed.");

if($result){echo "1";}else{"0";};
?>