<?php
session_start();
$reciver = $_SESSION["reciver"];


 $name =  $_SESSION["username"];

$conn = mysqli_connect("localhost","root","","chat_db") or die("failed :" . mysqli_connect_error()); 

$sql = "SELECT * FROM data_table WHERE (sender_name = '$reciver' AND reciver_name = '$name') OR (sender_name ='$name'  AND reciver_name = '$reciver')";
 $result = mysqli_query($conn, $sql) or die("Querycv Failed.");

// $row = mysqli_fetch_ALL($result);
$output = "";


while($row = mysqli_fetch_assoc($result)){
if($row['sender_name'] == $name){$displayname = "you"; $file = "fulls";}else if($row['sender_name'] == $reciver){$displayname = $row['sender_name']; $file = "full";}else{$displayname = "else";}

   $output .= "<div id='";
   $output .= $file;
   $output .= "'> 
   <span id = 'name'>";
   $output .= $displayname;
   $output .= "</span><br><span id = 'data'>{$row['data']}</span><br><span id = 'time'>{$row['time']}</span>
</div>";

}
echo $output ;
?>

<!-- 
   $output .= "<div id='full'> 
   <span id = 'name'>";
   $output .= $displayname;
   $output .= "</span><br><span id = 'data'>{$row['data']}</span><br><span id = 'time'>{$row['time']}</span>
</div>"; -->







