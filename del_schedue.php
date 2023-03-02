<?php
// Xác nhận xem có xóa thành viên hay không ?
// nếu có xác nhận xóa thì xóa thành viên
session_start();
include_once("connect.php");
if(isset($_SESSION["mail"]) && isset($_SESSION["pass"])){
    $id = $_GET["id"];
    $sql = "DELETE FROM schedue
            WHERE id = $id";
    mysqli_query($conn, $sql);
    header("location: index.php?page_layout=schedue");
}
else{
    die("You do not have permission to access this file !");
}
?>