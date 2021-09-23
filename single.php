<?php
session_start();
$id = $_GET["id"];
$conn = mysqli_connect("localhost","root","","chat_db") or die("failed :" . mysqli_connect_error()); 

$sql = "SELECT * FROM user WHERE id ='{$id}'";
$result = mysqli_query($conn, $sql) or die("Query Failed.");
$row = mysqli_fetch_assoc($result);
$_SESSION["reciver"] = $row['name'];

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>single</title>
    <style>
 body{background-color: gray;}
        #header{  text-align: center;
          background-color: blue;
          font-size: 60px;
position: fixed;width:100%;display: block;}
#reciver{background-color: green; padding-left:10px;position: fixed;width:100%;}
.input{position: fixed; top:92%;height: 30px;width:100%;display: flex; justify-content: center;}
input{width:70%;border-radius: 30px;border:none;}
#send{border-radius: 20px;border:none;}
#full{ background-color: rgb(153, 255, 255);max-width: 400px; border-radius: 30px;border: 2px solid red;margin: 5px;}
#data{font-size: 25px; padding-left: 20px;display: block;padding-right: 10px;}
#time{font-size: 15px;padding-right: 30px;position: relative;left: 280px;color: rgb(252, 16, 193);}
#times{font-size: 15px;padding-right: 30px;float: right;color: rgb(252, 16, 193);}
#name{font-size: 15px;padding-left: 20px;color: rgb(47, 0, 255);}
#fulls{ background-color: rgb(153, 255, 255);max-width: 400px; border-radius: 30px;border: 2px solid red;margin: 5px;position: relative; left: 69%;}
    </style>
    
</head>
<body>
<div id="header">webchat</div><br><br><br>
<div id="reciver"><?php echo $row['name']; ?></div><br><br>
<div id="chat">




</div>
 <br> <br><br><br><br><div class="input"><input type="text" id = "chat_input" value = ""><button id ="send">send</button></div>
 <!--script starts here  -->

 
 <script type="text/javascript" src="jquary.js"></script>
                <script>
                  
 $(document).ready(function(){
 $(document).on("click", "#send", function () {
                var chat_input = $("#chat_input").val();
                var reciver = document.getElementById('reciver').innerHTML;
                  
                $.ajax({
                    url: "send.php",
                    type: "POST",
                    data: { chat_input :chat_input ,reciver:reciver },
                   
                       
                    

                });
               
            });
           

         function chats() { 
             $.get("chat.php").done(function(data){

            $("#chat").html(data);
           
          });
          };
          
          setInterval(chats, 10);


         
            });
            
            
            
           

            </script>

</body>
</html>