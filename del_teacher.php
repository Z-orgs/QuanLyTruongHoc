<?php
// Xác nhận xem có xóa thành viên hay không ?
// nếu có xác nhận xóa thì xóa thành viên
session_start();
include_once("connect.php");
if(isset($_SESSION["mail"]) && isset($_SESSION["pass"])){
    $teacher_id = $_GET["teacher_id"];
    $sql = "DELETE FROM teacher
            WHERE teacher_id = $teacher_id";
    mysqli_query($conn, $sql);
    header("location: index.php?page_layout=teacher");
}
else{
    die("You do not have permission to access this file !");
}
?>