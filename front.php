<?php
 
  session_start();

  if(!isset($_SESSION["username"])){
    header("Location:  http://localhost/chat/index.php");
   
}
?>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>front</title>
    <style>
        .header {
            background-color: aqua;
            height: 50px;
            padding: 10px;
            font-size: 30px;
        }

        body {
            background-color: gray;
        }

        .right {
            float: right;
            user-select: none;
            cursor: pointer;
        }

        #menu {
            float: right;
            display: none;
            background-color: blue;
            color:white;
            text-decoration: none;
        }
        #menu>a{ color:white;
            text-decoration: none;
            font-size: 30px;
            padding-left: 30px;
            padding-right: 30px;
           
}
    </style>
</head>

<body>
    <div class="header">
        webchat<div class="right"><span onclick="menu()">
            &#9776
        </span>
</div>

    </div>
    <div id="menu"><br><a href="" class="profile">profile</a><br><br>
        <a href="addfriend.php" class="addfriend">addfriend</a><br> 
    </div>
    <div id="chat"></div>
    <!-- <script type="text/javascript" src="jquary.js"></script> -->
    <script>
        function menu() {
           
            if (document.getElementById("menu").style.display == 'none') { document.getElementById("menu").style.display = 'block' }
            else { document.getElementById("menu").style.display = 'none' }
        }
    </script>
</body>

</html>