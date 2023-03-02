<?php
// Bảo vệ tài khoản khi chưa đăng nhập vẫn nhảy vào trang
if(!defined("TEMPLATE")){
	die("You do not have permission to access this file !");
}

$checkError = '';

// Chức năng: Thêm mới thành viên "INSERT INTO"
if(isset($_POST["sbm"])){

    // Basic
    $user_full = $_POST["user_full"];
    $user_mail = $_POST["user_mail"];
    $user_pass = $_POST["user_pass"];
    $user_re_pass = $_POST["user_re_pass"];

    if ($user_pass != $user_re_pass) {
    	$checkError = '<div class="alert alert-danger">The entered password does not match !</div>';
    }else{
    	 $user_level = $_POST["user_level"];

	    // SQL
	    $sql = "INSERT INTO user(user_full,user_mail,user_pass,user_level) 
	    values('$user_full','$user_mail','$user_pass','$user_level')";

		$result = mysqli_query($conn, $sql);

	    if($result){
            // di chuyen ve man user
	    	header("location: index.php?page_layout=user");
	    }else{
            // hien thi loi email da ton tai
	    	$checkError = '<div class="alert alert-danger">Email already exists !</div>';
	    }
    }
}

?>	


	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
                <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li><a href="">Manage member</a></li>
				<li class="active">Add member</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Add member</h1>
			</div>
        </div><!--/.row-->
        <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="col-md-8">

                            	<?php echo $checkError; ?>

                                <form role="form" method="post">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input name="user_full" required class="form-control" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input name="user_mail" required type="text" class="form-control">
                                </div>                       
                                <div class="form-group">
                                    <label>Password</label>
                                    <input name="user_pass" required type="password"  class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Enter the password</label>
                                    <input name="user_re_pass" required type="password"  class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Permission</label>
                                    <select name="user_level" class="form-control">
                                        <option value=1>Admin</option>
                                        <option value=2>Member</option>
                                    </select>
                                </div>
                                <button name="sbm" type="submit" class="btn btn-success">Add</button>
                                <button type="reset" class="btn btn-default">Refresh</button>
                            </div>
                        </form>
                        </div>
                    </div>
                </div><!-- /.col-->
            </div><!-- /.row -->
	</div>	<!--/.main-->	
