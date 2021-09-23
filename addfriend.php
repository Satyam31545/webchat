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
    <title>addfriends</title>
    <style>
        body{background-color: gray;}
        .header{  text-align: center;
          background-color: blue;
          font-size: 60px;
}
          
          #searchbar{
            background-color: green;
            display: flex;
          justify-content: center;}
          #search_input{margin-top: 10px;  
                        height: 35px;
                        }
          .user{height: 30px; display: block;color:red;width:100%; background-color: rgb(84, 247, 233); border:2px solid rgb(88, 70, 168);}
          #hide{display: none;}
         
    </style>
</head>
<body>
   <div class="header">webchat</div>
   <div id="searchbar">
                    <form id="search_form"><input type="text" id="search_input" placeholder="search"></form>
                </div>
                <div id="loaddata"></div>
                <!--script starts here  -->
                <script type="text/javascript" src="jquary.js"></script>
                <script>
                    $(document).ready(function(){
     function loadtable(){
        $.ajax({
                    url : "ajax-load.php",
                    type : "POST",
            success : function(data){
                $("#loaddata").html(data);
                
            } 
                  });
     };loadtable();
    //live search
    $("#search_input").on("keyup", function () {
                var search_term = $(this).val();
                $.ajax({
                    url: "ajax-live-search.php",
                    type: "POST",
                    data: { search: search_term },
                    success: function (data) {
                        $("#loaddata").html(data);
                        console.log(data);
                    }
                })
            });
    })
    if($("#search_input").val() != ""){console.log(" not empty")}else{console.log("empty")}
                </script>
</body>
</html>