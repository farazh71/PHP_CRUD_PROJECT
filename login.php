
<?php
include("./config/database.php");
// login form submit
if(isset($_POST['submit'])){
    extract($_POST);
    $pass=md5($password);
    $sql="select * from users where username='$username' and password='$pass'";
    $result=$conn->query($sql);
    if($result->num_rows){
       $_SESSION["is_user_loggedIn"]=true;
       $_SESSION["userDate"]=mysqli_fetch_assoc($result);
       header("LOCATION:users.php");
    }
    else{
        $_SESSION["error"]="Invalide entry";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/style.css" rel="stylesheet">
    <title>PHP CRUD Application</title>
</head>

<body>
    <section class="section">
        <h2>Login Form</h2>
        <?php require("./include/alert.php")?>
        <form action="login.php" method="post">
            <div class="container">
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="username" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" required>

                <button type="submit" name="submit">Signup</button>
            </div>
        </form>
    </section>

</body>

</html>