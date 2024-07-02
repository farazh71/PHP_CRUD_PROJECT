<?php
include("./config/database.php");
session_destroy();
header("LOCATION:login.php");
exit;
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD Application</title>
    <style>        
        .container{
            height: 100vh;
            width: 100vw;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .myDiv{
           text-align: center;
        }
     </style>   
</head>
<body>
    <div class="container">
    <div class="myDiv">
      <h1>Thanks for using the CRUD App</h1>
    </div>
    </div>
</body>
</html>