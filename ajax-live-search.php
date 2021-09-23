<?php
$searchterm = $_POST['search'];
session_start();
$email =  $_SESSION["email"];
 $name =  $_SESSION["username"];

$conn = mysqli_connect("localhost","root","","chat_db") or die("failed :" . mysqli_connect_error()); 

$sql = "SELECT * FROM user  WHERE (name LIKE '%{$searchterm}%' OR email LIKE '%{$searchterm}%' OR phone LIKE '%{$searchterm}%') AND name != '$name'";
$result = mysqli_query($conn, $sql) or die("Querycv Failed.");
$output="";
if(mysqli_num_rows($result) > 0){

while($row = mysqli_fetch_assoc($result)){
     if($row["name"] !='{$name}'){$hide= "";}else{$hide="hide";};
 $output .="<a href='single.php?id={$row['id']}'><span class='user'>{$row["name"]}</span></a><br>";
  
}}else{echo "no record found";}

echo $output;
?>
<!-- $output .="<a href='single.php?id={$row['id']}'><span class='user' id ="
 
 $output .=" >{$row["name"]}</span></a><br>"; -->