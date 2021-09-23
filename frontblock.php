<?php
session_start();
$name =  $_SESSION["username"];

$conn = mysqli_connect("localhost","root","","chat_db") or die("failed :" . mysqli_connect_error()); 

$sql = "SELECT user.id,data_table.data_id, user.name, data_table.sender_name,data_table.reciver_name FROM user
                    JOIN data_table  ON user.name = data_table.sender_name OR user.name = data_table.reciver_name";

$result = mysqli_query($conn, $sql) or die("Query Failed.");

 while($row = mysqli_fetch_assoc($result)){

    echo $row['name'] . "<br>"; 

 }


 
 
 
 
 ?>
 <!--  -- WHERE post.author = {$_SESSION['user_id']} -->