<?php
if(isset($_SESSION['succes'])){
    echo $_SESSION['succes'];
    unset($_SESSION['succes']);
}
if(isset($_SESSION['error'])){
    echo $_SESSION['error'];
    unset($_SESSION['error']);
}
?>