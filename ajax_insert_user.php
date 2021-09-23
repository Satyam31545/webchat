<?php
$conn = mysqli_connect("localhost","root","","chat_db") or die("failed :" . mysqli_connect_error()); 

    $uname = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $sql = "INSERT INTO user (name, email,password,phone)
          VALUES('{$uname}','{$email}','{$password}','{$phone}');";

          $sql1 = "SELECT * FROM user WHERE email='{$email}'"; 
          $result = mysqli_query($conn, $sql1);
          if (mysqli_num_rows($result) > 0) {
              echo "enter another email";
              die();
          }
          $sql2 = "SELECT * FROM user WHERE phone='{$phone}'"; 
          $result2 = mysqli_query($conn, $sql2);
          if (mysqli_num_rows($result2) > 0) {
            echo "enter another phone";
            die();
        }
          if(mysqli_query($conn, $sql)){
            header("location: http://localhost/chat/index.php");
          }else{
            echo "<div class='alert alert-danger'>Query Failed.</div>";
          }
         

?>