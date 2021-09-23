<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <style>
        .container {
            display: flex;
            justify-content: center;
            color: red;
        }

        .header {
            text-align: center;
        }
        .registration{
            text-align: center;
          }
    </style>
</head>

<body>
    <div class="header">login</div><br><br>
    <div class="container">
        <div class="registrationdiv">
        <form  action="<?php $_SERVER['PHP_SELF']; ?>" method ="POST">
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="username" placeholder="" required>
                            </div><br><br>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" placeholder="" required>
                            </div><br><br>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" placeholder="" required>
                            </div><br><br>
                            <input type="submit" name="login" value="login" />
                        </form>
        </div>
        

    </div>
    <div class="registration">if you are new register yourself. <a href="register.php">click here</a></div>
    <!-- form ends here -->
    <?php
    if(isset($_POST['login'])){
        $conn = mysqli_connect("localhost","root","","chat_db") or die("failed :" . mysqli_connect_error());
        
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email']; 
        $sql = "SELECT name, password, email FROM user WHERE name = '{$username}' AND password= '{$password}' AND email= '{$email}'"; 

        $result = mysqli_query($conn, $sql) or die("Query Failed.");
         
            if(mysqli_num_rows($result) > 0){

                while($row = mysqli_fetch_assoc($result)){
                  session_start();
                  $_SESSION["username"] = $row['name'];
                  $_SESSION["password"] = $row['password'];
                  $_SESSION["email"] = $row['email'];
                 
                  header("Location:  http://localhost/chat/front.php");
                }
          }

        
}
    ?>
</body>
</html>