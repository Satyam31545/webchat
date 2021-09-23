<?php
  session_start();
  $email =  $_SESSION["email"];
$conn = mysqli_connect("localhost","root","","chat_db") or die("failed :" . mysqli_connect_error()); 

$sql = "SELECT * FROM user WHERE email !='{$email}'";echo '<br>';
$result = mysqli_query($conn, $sql) or die("Query Failed.");
$output="";
while($row = mysqli_fetch_assoc($result)){
 
    $output .="<a href='single.php?id={$row['id']}'><span class='user'>{$row["name"]}</span></a><br>";
}
echo $output;
?>