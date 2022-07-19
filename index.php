<?php
include('db.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>chat app</title>
    <link rel="stylesheet" href='style.css'>
    <script>
        function taha(){
            var req = new XMLHttpRequest()
            req.onreadstatechange = function(){
                if(req.readstate = 4) && req.status==200{
                    document.getElementById("chat").innerHTML = responseText;

            }
        }
     req.open('GET','chat.php',true);
     req.send()
    }
    setInterval(function(){taha()},1000);
    </script>
</head>
<body onload="taha()">
   <div id="container">
       <div id="chatbox">
        <div id="chat"></div>
        <div id="chatdata">
<span style="color:gold">taha</span>
<span>: </span>
<span>hello how are you</span>
<span style="color:tomato;float:right">date</span>
</div>
        </div>
        <form action="index.php" method="post">
            <input type="text" name="name" placeholder="enter your name">
            <textarea name="msg" placeholder="enter your message"></textarea>
            <input type="submit" name="submit" value="send">
        </form>
        <?php
        if(isset($_POST['submit'])){
           $taha = $_POST['name'];
           $mat = $_POST['msg'];
           $insert = "insert into chat (name , msg) , values ('$taha','$mat')";
           echo $insert;
           $run_insert = mysqli_query($con,$insert);
           header('location:index.php');
} 

?>
=
   </div>
</body>
</html>