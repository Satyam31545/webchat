
<html lang="en">

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
    </style>
</head>

<body>
    <div class="header">registration</div><br><br>
    <div class="container">
        <div class="registrationdiv">
            <form action="ajax_insert_user.php" id="registration" method ="POST">
                <label>User Name : </label><input type="text" name="username" required><br><br>
                <label>Email : </label><input type="email" name="email" required><br><br>
                <label>Password : </label><input type="password" name="password" required><br><br>
                <label>phone no. : </label><input type="text" name="phone" required><br><br>
                <input type="submit" value= "register" name ="save_btn">
            </form>
        </div>

    </div>
  

    <script type="text/javascript">

</script>
</body>

</html>