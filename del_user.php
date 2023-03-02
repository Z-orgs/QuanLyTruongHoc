<?php
// Xác nhận xem có xóa thành viên hay không ?
// nếu có xác nhận xóa thì xóa thành viên
session_start();
include_once("connect.php");
if(isset($_SESSION["mail"]) && isset($_SESSION["pass"])){
    $user_id = $_GET["user_id"];
    $sql = "DELETE FROM user
            WHERE user_id = $user_id";
    mysqli_query($conn, $sql);
    header("location: index.php?page_layout=user");
}
else{
    die("You do not have permission to access this file !");
}
?>