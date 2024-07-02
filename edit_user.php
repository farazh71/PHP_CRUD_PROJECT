<?php
include './config/database.php';
include "./middleware.php";
if(isset($_GET['id'])){
    $sql="select * from users where id=".$_GET["id"];
    $result=$conn->query($sql);
    $user=mysqli_fetch_assoc($result);
}
else{
    echo "<h1>Invalid request</h1>";
}

if(isset($_POST['submit'])){
    extract($_POST);
    date_default_timezone_set('Asia/Kolkata');
    $date = date('Y-m-d H:i:s');
    $sql="update users set username='$username' where id=".$user["id"];
    $result=$conn->query($sql);
    if($result){
        $_SESSION["succes"]="User has been updated!!";
    }
    else{
        $_SESSION['error']="Something went wrong!!";
    }
    header("LOCATION:users.php");
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
        <h2>Edit Form</h2>
        <form action="edit_user.php?id=<?php echo $_GET['id']?>" method="post">
            <div class="container">
                <label for="uname"><b>username</b></label>
                <input type="text" placeholder="Enter Username" name="username" value="<?php echo $user["username"]?>" required>
                <?php
                /*<label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" value="<?php echo $user["password"]?>" required>
                */
                ?>
                <button type="submit" name="submit">Update</button>
            </div>
        </form>

        <div class="container" style="background-color:#f1f1f1">
            <a href="users.php" class="footerbtn">All Users</a>

            <a href="logout.php" class="footerbtn">Logout</a>

        </div>
    </section>

</body>

</html>