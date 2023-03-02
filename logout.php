<?php
// Hủy bỏ phiên đăng nhập
session_start();
if(isset($_SESSION["mail"]) && isset($_SESSION["pass"])){
    unset($_SESSION["mail"]);
    unset($_SESSION["pass"]);
}
else{
    die("You do not have permission to access this file !");
}
header("location: index.php");
?>