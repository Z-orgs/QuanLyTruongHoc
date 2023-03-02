<?php
if(!defined("TEMPLATE")){
	die("You do not have permission to access this file !");
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>VIN SCHOOL | ADMIN</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/bootstrap-table.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">

</head>

<body>

	<?php
	// Lấy ra thông tin và so sánh với người dùng khi đăng nhập
	if(isset($_POST["sbm"])){

		$mail = $_POST["mail"];
		$pass = $_POST["pass"];

		$sql = "SELECT * FROM user
				WHERE user_mail = '$mail'
				AND user_pass = '$pass'";
		$query = mysqli_query($conn, $sql);

		if(mysqli_num_rows($query) > 0){

			$_SESSION["mail"] = $mail;
			$_SESSION["pass"] = $pass;

			// Nếu đúng thông tin thì cho vào hệ thống
			header("location: index.php");
		}
		else{
			// Nếu sai thì hiển thị message lỗi
			$error = '<div class="alert alert-danger">This account is Invalid !</div>';
		}
	}
	?>
	
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">VIN SCHOOL | ADMIN</div>
				<div class="panel-body">
					<?php if(isset($error)){echo $error;}?>
					<form role="form" method="post">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="E-mail" name="mail" type="email" autofocus>
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Mật khẩu" name="pass" type="password" value="">
							</div>
							<div class="checkbox">
								<label>
									<input name="remember" type="checkbox" value="Remember Me">Remember account
								</label>
							</div>
							<button type="submit" name="sbm" class="btn btn-primary">Log in</button>
						</fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
</body>

</html>
