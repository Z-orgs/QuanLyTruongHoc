<?php
// Bảo vệ tài khoản khi chưa đăng nhập vẫn nhảy vào trang
if(!defined("TEMPLATE")){
	die("You do not have permission to access this file !");
}

$checkError = '';

// Chức năng: Thêm mới teacher "INSERT INTO"
if(isset($_POST["sbm"])){

    // Basic
    $teacher_name = $_POST["teacher_name"];
    $teacher_email = $_POST["teacher_email"];
    $teacher_phone = $_POST["teacher_phone"];
    $teacher_address = $_POST["teacher_address"];
    $teacher_class = $_POST["teacher_class"];
    $teacher_birth_day = $_POST["teacher_birth_day"];

    // SQL
    $sql = "INSERT INTO teacher(teacher_name,teacher_email,teacher_phone,teacher_address,teacher_class,teacher_birth_day) 
    values('$teacher_name','$teacher_email','$teacher_phone','$teacher_address','$teacher_class','$teacher_birth_day')";

    $result = mysqli_query($conn, $sql);

    if($result){
        // di chuyen ve man teacher
        header("location: index.php?page_layout=teacher");
    }else{
        // hien thi loi email da ton tai
        $checkError = '<div class="alert alert-danger">Email | Phone | Code already exists !</div>';
    }
}

?>	


	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
                <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li><a href="">Manage Teacher</a></li>
				<li class="active">Add Teacher</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Add Teacher</h1>
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
                                    <input name="teacher_name" required class="form-control" placeholder="" required="">
                                </div>
                                <div class="form-group">
                                	<label>Email</label>
									<input class="form-control" placeholder="" name="teacher_email" type="email" required="">
								</div>
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input name="teacher_phone" required type="number" class="form-control" required="">
                                </div>                       
                                <div class="form-group">
                                    <label>Address</label>
                                    <input name="teacher_address" required type="text"  class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Class Manager</label>
                                    <select name="teacher_class" class="form-control">
                                        <option value=6A>6A</option>
                                        <option value=6B>6B</option>
                                        <option value=7A>7A</option>
                                        <option value=7B>7B</option>
                                        <option value=8A>8A</option>
                                        <option value=8B>8B</option>
                                        <option value=9A>9A</option>
                                        <option value=9B>9B</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Birth Day</label>
                                    <input name="teacher_birth_day" required type="date"  class="form-control">
                                </div>
                                <button name="sbm" type="submit" class="btn btn-success">Add Teacher</button>
                                <button type="reset" class="btn btn-default">Refresh</button>
                            </div>
                        </form>
                        </div>
                    </div>
                </div><!-- /.col-->
            </div><!-- /.row -->
	</div>	<!--/.main-->	
