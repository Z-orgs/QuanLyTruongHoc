<script src="ckeditor/ckeditor.js"></script>
<?php
// ket noi db
include_once("connect.php");
session_start();
define("TEMPLATE", true);
// kiem tra xem da dang nhap hay chua ?? 
if(isset($_SESSION["mail"]) && isset($_SESSION["pass"])){
    include_once("admin.php");
}
else{
    include_once("login.php");
}
?>